<?php
	/**
	 *
	 * 用户控制器
	 *
	 * @category Controller
	 * @package Controller
	 * @author harry
	 * @version v1.0 2014-06-23
	 */
	class ControllerEvent extends Base
	{
        protected $model = null;
        protected $jssdk = null;
        protected $openid = null;
        protected $sourceOpenid = null;
		/**
		 * 构造函数
		 *
		 * @access public
		 */
		public function __construct()
		{
			parent::Base();

			include_once($this->config->modelDir.'ModelEvent.php');
			$this->model = new ModelEvent();

			self::initConfig();
			if(!isset($_SESSION)){
				session_start();
			}
			
			include_once("../jssdk2.php");
			$this->jssdk = new JSSDK("wx6df60d01cc2e0ab3", "c70eda9f0f8efbd6010a264661b1188a");

			if($_GET['siemens_openid']){
				setcookie('siemens_openid',$_GET['siemens_openid'],$this->config->time+86400*12,$this->config->cookiePath,$this->config->domain,$this->config->cookieSecure);
				header("Location:".str_replace('&siemens_openid='.$_GET['siemens_openid'],'',str_replace('?siemens_openid='.$_GET['siemens_openid'],'',$this->curPageURL())));
				die();
			}
			$this->openid=$_COOKIE['siemens_openid'];
			
			if($_GET['sourceOpenid']){
				setcookie('sourceOpenid',$_GET['sourceOpenid'],$this->config->time+86400*12,$this->config->cookiePath,$this->config->domain,$this->config->cookieSecure);
				header("Location:".str_replace('&sourceOpenid='.$_GET['sourceOpenid'],'',str_replace('?sourceOpenid='.$_GET['sourceOpenid'],'',$this->curPageURL())));
				die();
			}
			$this->sourceOpenid=$_COOKIE['sourceOpenid'];
			if(!$this->openid){
				setcookie('state',$this->curPageURL(),$this->config->time+86400*30,$this->config->cookiePath,$this->config->domain,$this->config->cookieSecure);
				header("Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx6df60d01cc2e0ab3&redirect_uri=".urlencode("http://www.wechat.siemens.com.cn/external/getOpenid4.php")."&response_type=code&scope=snsapi_base&state=".urlencode($this->curPageURL())."#wechat_redirect");
				
				die("请从微信点击菜单入口进入");
			}
			if(!$this->sourceOpenid){
				$this->sourceOpenid = $this->openid;
			}

			if (!$_SESSION['wechat_user']){
                $_SESSION['wechat_user'] = $this->getuserinfo();
            }
            if (!$_SESSION['user_id']){
                $_SESSION['user_id'] = $this->checkUser();
            }

			$signPackage = $this->jssdk->getSignPackage($_GET["requrl"]);
			$this->template->assign('signPackage',$signPackage);
            $this->template->assign('blueopenid',$this->openid);
            $this->template->assign('wechat_user',$_SESSION['wechat_user']);
            $this->template->assign('headimgurl',$_SESSION['headimgurl']);
            $this->template->assign('user_id',$_SESSION['user_id']);
		}
		
		/**
		 * 构造函数
		 *
		 * @access public
		 */
		public function ControllerEvent()
		{
			self::__construct();
		}

		/**
		 * 首页
		 *
		 * @access public
		 */
		public function getuserinfo(){
			$token=$this->getAccessToken();
            ob_start();
			$url="https://api.weixin.qq.com/cgi-bin/user/info?access_token={$token}&openid=".$this->openid;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			$result = curl_exec($ch);
			$out1 = ob_get_contents();
			ob_end_clean();
			$getarr=json_decode($out1,true);
			return $getarr;
		}

		public function index()
		{
			$this->template->display('index.html');
		}

		public function picture()
        {
            $this->template->display('picture.html');
        }

        public function text()
        {
            $text = $_POST['text'];
            $data = array(
                'user_id'       => $_SESSION['user_id'],
                'text'          => $text,
                'create_time'   => time()
            );
            $this->model->insert($data, 'sim_active');
        }

        public function share()
        {
            $status = $_POST['status'];
            $page = $_POST['page'];
            $data = array(
                'user_id'       => $_SESSION['user_id'],
                'page'          => $page,
                'create_time'   => time(),
                'status'        => $status
            );
            $this->model->insert($data, 'sim_share');
        }

        public function checkUser()
        {
            $res = $this->model->select('`id`,`openid`', 'sim_user', 'openid = "'.$this->openid.'"');
            if ($res){
                $_SESSION['headimgurl'] = $res[0]['headimgurl'];
                return $res[0]['id'];
            }else{
                $headimgurl = $this->put_file_from_url_content($_SESSION['wechat_user']['headimgurl'],time().rand(100,999).".jpg","/www/web/weixin_siemens/external/sim-20180217/view/templates/headimgurl/");
                $data = array(
                    'openid'        => $this->openid,
                    'nickname'      => $_SESSION['wechat_user']['nickname'],
                    'headimgurl'    => '/external/sim-20180217/view/templates/headimgurl/'.$headimgurl,
                    'subscribe'     => $_SESSION['wechat_user']['subscribe'],
                    'create_time'   => time()
                );
                $this->model->insert($data, 'sim_user');
                $res = $this->model->select('`id`,`openid`', 'sim_user', 'openid = "'.$this->openid.'"');
                $_SESSION['headimgurl'] = $res[0]['headimgurl'];
                return $res[0]['id'];
            }
        }

        private function put_file_from_url_content($url, $saveName, $path) {
            // 设置运行时间为无限制
            set_time_limit ( 0 );
            $url = trim ( $url );
            $curl = curl_init ();
            // 设置你需要抓取的URL
            curl_setopt ( $curl, CURLOPT_URL, $url );
            // 设置header
            curl_setopt ( $curl, CURLOPT_HEADER, 0 );
            // 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
            curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
            // 运行cURL，请求网页
            $file = curl_exec ( $curl );
            // 关闭URL请求
            curl_close ( $curl );
            // 将文件写入获得的数据
            $filename = $path . $saveName;
            $write = @fopen ( $filename, "w" );
            if ($write == false) {
                return false;
            }
            if (fwrite ( $write, $file ) == false) {
                return false;
            }
            if (fclose ( $write ) == false) {
                return false;
            }
            return $saveName;
        }

        public function getAccessToken() {
  			if(time()-filemtime("/www/web/weixin_siemens/external/token1.txt")>1200||file_get_contents("/www/web/weixin_siemens/external/token1.txt")==''){
			ob_start();
			$url='https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx6df60d01cc2e0ab3&secret=c70eda9f0f8efbd6010a264661b1188a';
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			$result = curl_exec($ch);
			$out1 = ob_get_contents();
			ob_end_clean();
			$getarr=json_decode($out1,true);
			file_put_contents("/www/web/weixin_siemens/external/token1.txt",$getarr['access_token']);
			$token=$getarr['access_token'];
			}else{
				$token=file_get_contents("/www/web/weixin_siemens/external/token1.txt");
			}
			return $token;	
 
		}


        function curPageURL()
        {
            $pageURL = 'http';

            if ($_SERVER["HTTPS"] == "on")
            {
                $pageURL .= "s";
            }
            $pageURL .= "://";

            if ($_SERVER["SERVER_PORT"] != "80")
            {
                $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
            }
            else
            {
                $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
            }
            return $pageURL;
        }
		
	}
?>