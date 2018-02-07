<?php /* Smarty version Smarty-3.0.6, created on 2016-11-04 14:45:42
         compiled from "D:\wamp\www\sim_power\view\templates\toupiao3_1.html" */ ?>
<?php /*%%SmartyHeaderCode:881581c2e9613ab76-68165690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f67ef42e4ffa495a04e9588a1582c809abd18cc' => 
    array (
      0 => 'D:\\wamp\\www\\sim_power\\view\\templates\\toupiao3_1.html',
      1 => 1478241941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '881581c2e9613ab76-68165690',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>西门子</title>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('cssSite')->value;?>
style1.css"/>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
jQuery1.11.3.js"></script>
</head>
<body style="background:#fff;">
<div class="toupiao_box">
    <div class="toupiao_title">
        PG, PS & WP Business Conference China 2016
        <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
logo_pc.jpg" alt="" class="logo_pc"/>
    </div>
    <div class="toupiao_con">
        <div class="question">Q3: Are we open enough to reward fast failure?</div>
        <p class="question3_comment">Importance</p>
        <div class="box_list a_box">
            <b class="num">41%</b>
            <div class="zhu"></div>
            <span>A</span>
            <p>Very important</p>
        </div>
        <div class="box_list b_box">
            <b class="num">8%</b>
            <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
win.png" alt="" class="win"/>
            <div class="zhu"></div>
            <span>B</span>
            <p>More or less</p>
        </div>
        <div class="box_list c_box">
            <b class="num">16%</b>
            <div class="zhu"></div>
            <span>C</span>
            <p>Not important</p>
        </div>
    </div>
</div>
<script>
	function getvote()
	{
		$.ajax({
		   type: "POST",
		   url: "index.php?m=event&a=getvote&rand="+Math.random(),
		   data: "",
		   dataType:'json', 
		   cache:false,
		   async:false,
		   success: function(msg){
			   
		   	 	$(".a_box").find(".num").html(msg['A']['bai']+"%");
		   		$(".a_box").find(".zhu").css("height",msg['A']['gao']);
		   		$(".b_box").find(".num").html(msg['B']['bai']+"%");
		   		$(".b_box").find(".zhu").css("height",msg['B']['gao']);
		   		$(".c_box").find(".num").html(msg['C']['bai']+"%");
		   		$(".c_box").find(".zhu").css("height",msg['C']['gao']);
				setTimeout("getvote()",3000);
		   }
		});
	}
getvote();
var type='<?php echo $_smarty_tpl->getVariable('guan')->value;?>
';
document.onkeydown=function(event){
		var e = event || window.event || arguments.callee.caller.arguments[0];
		if(event.keyCode==13){
			var no=parseInt(type)+1;
			window.location="index.php?m=event&a=web&type="+no+"";	
		}
	}; 

</script>
</body>
</html>
