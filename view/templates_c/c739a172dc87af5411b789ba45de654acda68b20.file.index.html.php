<?php /* Smarty version Smarty-3.0.6, created on 2016-10-28 17:29:49
         compiled from "D:\wamp\www\sim_power\view\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:822858131a8dbbc929-14847760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c739a172dc87af5411b789ba45de654acda68b20' => 
    array (
      0 => 'D:\\wamp\\www\\sim_power\\view\\templates\\index.html',
      1 => 1477646989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '822858131a8dbbc929-14847760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html lang="en">
<head>
    <title>PG,PS&WP Business Conference China 2016</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('cssSite')->value;?>
style.css"/>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
jQuery1.11.3.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
viewport.js"></script>
</head>
<body style="background:#e5e6e0;">
<div class="index_box">
    <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
logo.jpg" alt="" class="logo"/>
    <div class="one_con">
        <div class="one_title">
            PG, PS & WP Business<br/>Conference China 2016
        </div>
        <ul class="one_list">
            <li style="background:none;box-shadow:none;"></li>
            <li onclick="document.location='index.php?m=event&a=agenda'">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
nav_logo1.png" alt=""/>
                <p>Agenda</p>
            </li>
            <li onclick="document.location='index.php?m=event&a=logistic'"  class="ll">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
nav_logo2.png" alt="" class="d1"/>
                <p>Logistic</p>
            </li>
            <li onclick="document.location=''" class="ll">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
nav_logo3.png" alt="" class="d1"/>
                <p style="font-size:28px;">Vote</p>
            </li>
            <li onclick="document.location=''">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
nav_logo4.png" alt=""/>
                <p>Feedback</p>
            </li>
            <li style="background:none;box-shadow:none;"></li>
        </ul>
    </div>
</div>
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
//    var Time = new Date('2016/10/31');
//    var d = new Date();
//    var dates = Math.floor((d.getTime() - Time.getTime())/(1000*60*60*24));
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