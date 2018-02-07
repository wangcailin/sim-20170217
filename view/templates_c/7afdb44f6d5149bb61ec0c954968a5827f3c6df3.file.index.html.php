<?php /* Smarty version Smarty-3.0.6, created on 2016-09-12 16:03:52
         compiled from "D:\wamp\www\sim_sbcc\view\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1824657d66168cf6887-32189930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7afdb44f6d5149bb61ec0c954968a5827f3c6df3' => 
    array (
      0 => 'D:\\wamp\\www\\sim_sbcc\\view\\templates\\index.html',
      1 => 1473667432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1824657d66168cf6887-32189930',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta id="viewport" name="viewport" content="width=640,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="MobileOptimized" content="800">
<title>西门子SBCC</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('cssSite')->value;?>
style.css">
<script src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
viewport.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
jQuery1.11.3.js"></script>
</head>
<body>
<div class="wrap1"  style="display:-none;" >	
	<div class="title">
    	<div class="p1">Mobile Minisite<img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
line_1.jpg" />Pre-event</div>
        <div class="">Siemens Business </div>
        <div class="">Conference China 2016</div>
        
    </div>
    <ul class="iconlist">
    	<li class=""  onClick="window.location='index.php?m=event&a=hotel'"><div class="icon"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
icon_1.png" /></div><p class="txt">My Logistic</p></li>
        <li   onClick="window.location='index.php?m=event&a=agenda'"><div class="icon"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
icon_2.png" /></div><p class="txt">Agenda</p></li>
        <li class="none" ></li><li  class="none"></li>
        <li class="che hover" onClick="window.location='https://www.sojump.hk/jq/9606092.aspx'"  ><div class="icon"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
icon_3.png" /></div><p class="txt">My Voice</p></li>
        <li class="che" onClick="window.location='index.php?m=event&a=beer'"><div class="icon"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
icon_4.png" /></div><p class="txt">My <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
e_1.png" style="width: 14px;position: relative;top: 12px;" />-Drink</li>
    </ul>
</div>
<script>
	function aa(){
		$('.che').each(function() {
            if($(this).hasClass('hover')){
				$(this).removeClass('hover');	
			}else{
				$(this).addClass('hover');		
			}
        });
	}
	//setInterval("aa()",2000)
</script>
</body>
</html>
