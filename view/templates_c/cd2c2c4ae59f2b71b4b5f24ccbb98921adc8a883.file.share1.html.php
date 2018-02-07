<?php /* Smarty version Smarty-3.0.6, created on 2016-12-13 11:32:45
         compiled from "/www/web/weixin_siemens/external/sim_katong/view/templates/share1.html" */ ?>
<?php /*%%SmartyHeaderCode:1016571949584f6bd3dfde30-41967070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd2c2c4ae59f2b71b4b5f24ccbb98921adc8a883' => 
    array (
      0 => '/www/web/weixin_siemens/external/sim_katong/view/templates/share1.html',
      1 => 1481599828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1016571949584f6bd3dfde30-41967070',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
var blueopenid='<?php echo $_smarty_tpl->getVariable('blueopenid')->value;?>
';
</script>
<script>
(function() {
  var blue_hm = document.createElement("script");
  blue_hm.src = "http://tracking.blue-dot.cn/js/monitor.js";             
  var blue_s = document.getElementsByTagName("script")[0];
  blue_s.parentNode.insertBefore(blue_hm, blue_s);

	  //数据监测js文件加载后调用
	  blue_hm.onload = function(){
		  blue_tracker_monitor('init',{
			   'openid':''+blueopenid+'',           //用户openid
			   'unionid':'',                                             //用户在多微信公众号中的身份 unionid
			   'prjid':'BDWA-000010-1',                                             //跟踪id
			   'otherid':''                                  //网站其他用于登陆的用户id
			   
		  }); 
	  }
})();
</script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 如有问题请通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    appId: '<?php echo $_smarty_tpl->getVariable('signPackage')->value["appId"];?>
',
    timestamp: '<?php echo $_smarty_tpl->getVariable('signPackage')->value["timestamp"];?>
',
    nonceStr: '<?php echo $_smarty_tpl->getVariable('signPackage')->value["nonceStr"];?>
',
    signature: '<?php echo $_smarty_tpl->getVariable('signPackage')->value["signature"];?>
',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
	  'closeWindow','onMenuShareTimeline','onMenuShareAppMessage','hideOptionMenu','showOptionMenu'
    ]
  });
	wx.ready(function () {
		wx.showOptionMenu();
		 wx.onMenuShareTimeline({
			                title: '快来领取限量版西门子玩偶啦！', 
			                link: 'http://www.wechat.siemens.com.cn/external/sim_katong/index.php?m=event&a=index&source='+blueopenid,
			                imgUrl: 'http://www.wechat.siemens.com.cn/external/sim_katong/view/templates/images/shili_3.jpg',
			                success: function() {
								 blue_tracker_monitor('sharelog',{       //监测分享的方法
									  'sharetype':'wechatAppMessage',
									  'shareurl':'http://www.wechat.siemens.com.cn/external/sim_katong/index.php?m=event&a=index&source='+blueopenid     
								 }); 							
			                },
			                cancel: function() {
			                }
			            });
			
			            wx.onMenuShareAppMessage({
			                title: '快来领取限量版西门子玩偶啦！', 
			                desc : '今天是西门子创始人维尔纳•冯•西门子200岁大寿！我们特别制作了一系列限量版西门子老爷爷玩偶。想要得到玩偶么？那就来领取你的神秘任务吧！',
			                link: 'http://www.wechat.siemens.com.cn/external/sim_katong/index.php?m=event&a=index&source='+blueopenid,
			                imgUrl: 'http://www.wechat.siemens.com.cn/external/sim_katong/view/templates/images/shili_3.jpg',
			                type: '', 
			                dataUrl: '', 
			                success: function() {	
								 blue_tracker_monitor('sharelog',{       //监测分享的方法
									  'sharetype':'wechatAppMessage',
									  'shareurl':'http://www.wechat.siemens.com.cn/external/sim_katong/index.php?m=event&a=index&source='+blueopenid     
								 });  				
			                },
			                cancel: function() {
			                }
			            });
	});
</script>