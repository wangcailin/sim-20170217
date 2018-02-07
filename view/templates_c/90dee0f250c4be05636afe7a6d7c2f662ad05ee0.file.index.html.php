<?php /* Smarty version Smarty-3.0.6, created on 2016-11-15 12:13:02
         compiled from "/www/web/weixin_siemens/external/sim_mobc/view/templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:891508958582a8b4e1d0483-89690429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90dee0f250c4be05636afe7a6d7c2f662ad05ee0' => 
    array (
      0 => '/www/web/weixin_siemens/external/sim_mobc/view/templates/index.html',
      1 => 1479183173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '891508958582a8b4e1d0483-89690429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html lang="en">
<head>
    <title>Mobility China Management Meeting 2016</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('cssSite')->value;?>
style.css">
	<script src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
jQuery1.11.3.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
viewport.js"></script>
</head>
<body style="background:#e5e6e0;">
<div class="index_box">
    <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
logo.jpg" alt="" class="logo"/>
    <div class="one_con">
        <p class="one_title">Mobility China<br/>Management Meeting 2016</p>
        <ul class="one_list">
            <li style="background:none;box-shadow:none;"></li>
            <li onclick="document.location='index.php?m=event&a=agenda'" class="ll">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
nav_logo1.png" alt="" class="d1"/>
                <p>Agenda</p>
            </li>
            <li monitor="Q&A" onclick="document.location='https://www.sojump.hk/jq/10234651.aspx'">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
nav_logo2.png" alt=""/>
                <p>Q&A</p>
            </li>
            <li monitor="Gallery"  onclick="document.location='http://u353468.viewer.maka.im/k/PS3FXREJ'" >
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
nav_logo3.png" alt=""/>
                <p style="font-size:28px;">Gallery</p>
            </li>
            <li monitor="Survey"  onclick="document.location='https://siemens.sojump.com/jq/10237212.aspx'">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
nav_logo4.png" alt=""/>
                <p>Survey</p>
            </li>
            <li style="background:none;box-shadow:none;"></li>
        </ul>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template("share.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
    var h=$('.index_box').height($(window).height());
    function aa(){
        setTimeout(function(){
            $('.ll').eq(0).addClass('hover');
        },0)
        setTimeout(function(){
            $('.ll').eq(0).removeClass('hover');
            $('.ll').eq(1).addClass('hover');
        },1000)
        setTimeout(function(){
            $('.ll').eq(1).removeClass('hover');
            $('.ll').eq(2).addClass('hover');
        },2000)
        setTimeout(function(){
            $('.ll').eq(2).removeClass('hover');
        },3000)
    }
    function bb(){
        setTimeout(function(){
            $('.ll').eq(0).addClass('hover');
        },0)
        setTimeout(function(){
            $('.ll').eq(0).removeClass('hover');
            $('.ll').eq(1).addClass('hover');
        },1000)
        setTimeout(function(){
            $('.ll').eq(1).removeClass('hover');
            $('.ll').eq(2).addClass('hover');
        },2000)
        setTimeout(function(){
            $('.ll').eq(2).removeClass('hover');
            $('.ll').eq(3).addClass('hover');
        },3000)
        setTimeout(function(){
            $('.ll').eq(3).removeClass('hover');
        },4000)
    }
//星期一之前执行代码
//    aa();
//    var t=setInterval(function(){
//        aa();
//    },3000)
//星期一（包括星期一）之后执行代码
    var Time = new Date('2016/10/31');
    var d = new Date();
    var dates = Math.floor((d.getTime() - Time.getTime())/(1000*60*60*24));
//    if(dates>=0){
//        clearInterval(t);
//        bb();
//        setInterval(function(){
//            bb();
//        },4000)
//    }
</script>
</body>
</html>