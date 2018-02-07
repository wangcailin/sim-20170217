<?php /* Smarty version Smarty-3.0.6, created on 2016-12-13 11:33:58
         compiled from "/www/web/weixin_siemens/external/sim_katong/view/templates/qrcode.html" */ ?>
<?php /*%%SmartyHeaderCode:310514473584f6c2616ba70-82714869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9eaca8cc294d29483564abe8ffc147aefb79adc' => 
    array (
      0 => '/www/web/weixin_siemens/external/sim_katong/view/templates/qrcode.html',
      1 => 1481599942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310514473584f6c2616ba70-82714869',
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
<title>西门子</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('cssSite')->value;?>
style.css">
<script src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
viewport.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
jQuery1.11.3.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
iscroll4.js"></script>
</head>
<body>
<div class="wrap1"  style="display:-none;" >
    <div><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
qrcode.jpg" style="padding:200px 100px; width:500px;" /></div>
</div>
<?php $_template = new Smarty_Internal_Template("share1.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
