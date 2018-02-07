<?php
	/**
	 *
	 * 用户模型
	 *
	 * @category Model
	 * @package Model
	 * @author harry
	 * @version v1.0 2014-06-23
	 */
	class ModelEvent extends Base
	{
		/**
		 * 构造函数
		 *
		 * @access public
		 */
		public function __construct()
		{
			parent::Base();
			parent::initDB();
			self::initConfig();
		}
		
		/**
		 * 构造函数
		 *
		 * @access public
		 */
		public function modelEvent()
		{
			self::__construct();
		}
		
		/**
		 * 初始化配置
		 *
		 * @access public
		 */
		public function initConfig()
		{
			//include_once($this->config->confDir.'event.conf');
		}
		
		
		public function faduser($openid)
		{
			$sql="select * from faduser where OpenID='{$openid}'";
			return $this->db->getToArray($sql);
		}
		public function faduser1($id)
		{
			$sql="select * from faduser where FaduserID='{$id}'";
			return $this->db->getToArray($sql);
		}
		public function faduser2($openid)
		{
			$sql="select count(*) c from troops where (TroopsFromName='{$openid}' and `FromStatus`=1) or (TroopsToName='{$openid}' and `ToStatus`=1)";
			return $this->db->getToArray($sql);
		}
		public function faduser3($openid)
		{
			$sql="select * from troops where (TroopsFromName='{$openid}' and `FromStatus`=1) or (TroopsToName='{$openid}' and `ToStatus`=1)";
			return $this->db->getToArray($sql);
		}
		public function getTroops($id)
		{
			$sql="select * from troops where TroopsID='{$id}'";
			return $this->db->getToArray($sql);
		}
		public function getTroopsuser($id)
		{
			$sql="select * from troops where TroopsToName='$id' || TroopsFromName='$id'";
			return $this->db->getToArray($sql);
		}
		public function saveFadUser($array)
		{
			$sql="select * from faduser where Openid='".$array['OpenID']."'";
			if(!$this->db->getToArray($sql)&&$array['OpenID']){
				return $this->db->saveFromArray("faduser",$array);
			}else{
				return true;	
			}
		}

		public function saveFadUser1($array)
		{
				//$sql="select * from faduser where Openid='".$array['OpenID']."'";		
				return $this->db->saveFromArray("troops",$array);
			
		}
		public function savegameUser($array)
		{
				//$sql="select * from faduser where Openid='".$array['OpenID']."'";		
				return $this->db->saveFromArray("gameing_user",$array);
			
		}
		public function savefromseter($array)
		{
				//$sql="select * from faduser where Openid='".$array['OpenID']."'";		
				return $this->db->saveFromArray("from_gameuser",$array);
			
		}
		public function upload($id,$filed){
			$sql="update troops set $filed =0 where TroopsID='$id'";
			return $this->db->update($sql);
		}
		public function getRoops($openid1 ,$openid2)
		{
			$sql="select * from troops where (`TroopsFromName`='$openid1' and `TroopsToName`='$openid2') or (`TroopsFromName`='$openid2' and `TroopsToName`='$openid1')";
			return $this->db->getToArray($sql);
		}
		public function getRoopsByFromUerID($openid)
		{
				$sql="select * from troops where (`TroopsFromName`='$openid' and FromStatus=1) or (`TroopsToName`='$openid' and ToStatus=1) ";		
				
				return $this->db->getToArray($sql);
		
		
		}
		public function winneruser($array)
		{
						
				return $this->db->saveFromArray("winningUser",$array);
				
		}
		public function todaycount()
		{
				//$date=date('Y-m-d');
				$sql="select count(1) c from winningUser";		
				return $this->db->getToArray($sql);
				
		}
		public function selwinner($openid)
		{
				$sql="select * from winningUser where `winningOpenID`='$openid'";		
				
				return $this->db->getToArray($sql);
		
		
		}
		public function upwinner($text,$openid)
		{
				$sql="update winningUser set winningadd='$text' where winningOpenID='$openid'";
								
				return $this->db->update($sql);
		
		
		}

		
		
		
		
		
		
		
		
		
		/**
		 * 获取参加活动用户信息
		 *
		 * @access public
		 * @param string $openID OpenID
		 * @return array
		 */
		public function getShareUserByOpenID($openID)
		{
			$sql="select * from share_user where OpenID='{$openID}'";
			return $this->db->getToArray($sql);
		}
		
		/**
		 * 获取注册用户信息
		 *
		 * @access public
		 * @param string $openID OpenID
		 * @return array
		 */
		public function getRegUserByOpenID($openID)
		{
			$sql="select * from reguser where OpenID='{$openID}'";
			return $this->db->getToArray($sql);
		}
		/**
		 * 获取用户大表用户信息
		 *
		 * @access public
		 * @param string $openID OpenID
		 * @return array
		 */
		 public function getSiemensChinaWechatUserByOpenID($openID)
		{
			$sql="select * from siemens_china_wechat_user where OpenID='{$openID}'";
			return $this->db->getToArray($sql);
		}
		/**
		 * 保存进入分享页面人员列表
		 *
		 * @access public
		 * @param array $array=array("Openid"=>$openID,"Type"=>$type,"Status"=>$status)
		 * @return int insertID
		 */
		public function saveShareTemuserLog($array)
		{
			return $this->db->saveFromArray("share_temuser_log",$array);
		}
		/**
		 * 保存未关注参加活动用户状态
		 *
		 * @access public
		 * @param array $array=array("Openid"=>$openID,"Type"=>$type,"Status"=>$status)
		 * @return int insertID
		 */
		public function saveShareUserStatus($array)
		{
			return $this->db->saveFromArray("share_user_status",$array);
		}
		/**
		 * 保存参加活动用户信息
		 *
		 * @access public
		 * @param array $array=array("Name"=>$name,"Tel"=>$tel,"Addr"=>$addr,"OpenID"=>$openID)
		 * @return int insertID
		 */
		public function saveShareUser($array)
		{
			return $this->db->saveFromArray("share_user",$array);
		}
		/**
		 * 保存注册人员信息
		 *
		 * @access public
		 * @param array $array=array("Name"=>$name,"Tel"=>$tel,"Province"=>$province,"Hospital"=>$hospital,"City"=>$city,"Study"=>$study,"OpenID"=>$openID,"SourceOpenID"=>$sourceOpenID)
		 * @return int insertID
		 */
		public function saveRegUser($array)
		{
			return $this->db->saveFromArray("reguser",$array);
		}
		/**
		 * 创建客服状态
		 *
		 * @access public
		 * @param string openid
		 */
		public function saveKfUserStatus($openid)
		{
			$sql="select * from kf_user where OpenID='{$openid}'";
			$kfUserInfo=$this->db->getToArray($sql);
			if($kfUserInfo){
				$this->db->saveFromArray("kf_user",array("KfUserID"=>$kfUserInfo['KfUserID'],"Status"=>1),"KfUserID");
			}else{
				$this->db->saveFromArray("kf_user",array("OpenID"=>$openid,"Status"=>1));
			}
		}
		/**
		 * 获取新闻列表
		 *
		 * @access publicx
		 */
		public function getNews()
		{
			$sql="select * from news where class=23";
			
			$newList=$this->db->loadToArray($sql);
			if(is_array($newList)){
				$temArray=array();
				foreach($newList as $key=>$value){
					if($value['toppic']=="")
					{
					preg_match('/src="([^"]*)"/', $value['content'],$matchs);
					$value['pic']=$matchs[1];
					}
					//var_dump($matchs);die;
					$value['content']=str_replace(" ","",str_replace("&nbsp;","",strip_tags($value['content'])));
					$value['addtime']=substr($value['addtime'],0,-3);
					$temArray[$key]=$value;
				}	
				$newList=$temArray;
			}
			return $newList;
		}
		/**
		 * 获取新闻详情
		 *
		 * @access public
		 * @param string newsid
		 */
		public function getNewsInfoByID($id)
		{
			$sql="select * from news where id='{$id}'";
			
			$newInfo=$this->db->getToArray($sql);
			if($newInfo['toppic']=="")
			{
				preg_match('/src="([^"]*)"/', $newInfo['content'],$matchs);
				$newInfo['pic']=$matchs[1];
			}
			//$newInfo['content']=strip_tags($newInfo['content']);
			$newInfo['addtime']=substr($newInfo['addtime'],0,-3);
			return $newInfo;
		}
		/**
		 * 获取我的注册用户列表
		 *
		 * @access public
		 * @param string openid
		 */
		public function getMyUserList($openid)
		{
			$sql="select * from reguser left join siemens_china_wechat_user on(siemens_china_wechat_user.OpenID=reguser.OpenID) where reguser.SourceOpenID='{$openid}' and reguser.SourceOpenID!=reguser.OpenID";
			$myUserList=$this->db->loadToArray($sql);
			return $myUserList;
		}
		/**
		 * 验证Email
		 *
		 * @access public
		 * @param string $email Email
		 * @return bool
		 */
		public function checkEmail($email)
		{
			$status = validate::email($email);
			return $status;
		}
		
		/**
		 * 验证用户姓名
		 *
		 * @access public
		 * @param string $realname 
		 * @return bool
		 */
		public function checkRealName($realname)
		{
			$status = validate::fixtext($realname,array(3,20));
			return $status;
		}

			
		/**
		 * 验证checkPhone
		 *验证电话和手机
		 * @access public
		 * @param string $Phone Phone
		 * @return bool
		 */
		public function checkPhone($phone)
		{
			if(strlen($phone)==12 || strlen($phone)==8){
				$status = validate::phone($phone);//验证电话
			}else{
				$status = validate::mobile($phone);//验证手机
			}
			return $status;
		}
	
	/**
	 * 执行sql查询
	 * @param $data 		需要查询的字段值[例`name`,`gender`,`birthday`]
	 * @param $table 		数据表
	 * @param $where 		查询条件[例`name`='$name']
	 * @param $limit 		返回结果范围[例：10或10,10 默认为空]
	 * @param $order 		排序方式	[默认按数据库默认方式排序]
	 * @param $group 		分组方式	[默认为空]
	 * @param $key 			返回数组按键名排序
	 * @return array		查询结果集数组
	 */
	public function select($data, $table, $where = '', $limit = '', $order = '', $group = '', $key = '') {
		$where = $where == '' ? '' : ' WHERE '.$where;
		$order = $order == '' ? '' : ' ORDER BY '.$order;
		$group = $group == '' ? '' : ' GROUP BY '.$group;
		$limit = $limit == '' ? '' : ' LIMIT '.$limit;

		$sql = 'SELECT '.$data.' FROM `'.$table.'`'.$where.$group.$order.$limit;
		$result=$this->db->loadToArray($sql);
		return $result;
	}

}
?>