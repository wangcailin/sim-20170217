<?php /* Smarty version Smarty-3.0.6, created on 2016-11-04 14:45:56
         compiled from "D:\wamp\www\sim_power\view\templates\toupiao4.html" */ ?>
<?php /*%%SmartyHeaderCode:29153581c2ea497f3f1-40011886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ca6780c9e38c1112a898f9b4b62ef9b2dbe9fa3' => 
    array (
      0 => 'D:\\wamp\\www\\sim_power\\view\\templates\\toupiao4.html',
      1 => 1478241956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29153581c2ea497f3f1-40011886',
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
    <style>
    	.a_box{left:310px;}
		.a_box p{color:#565656; line-height:36px;}
		.a_box span{border-top:6px solid #a8a8a8;color:#565656;}
		.a_box .zhu{background:#a8a8a8;height:93px;}
		.a_box .num{color:#565656;}
		
		.b_box{left:691px;}
		.b_box p{color:#006487; line-height:36px;}
		.b_box span{border-top:6px solid #006487;color:#006487;}
		.b_box .zhu{background:#006487;height:93px;}
		.b_box .num{color:#006487;}
		
		.c_box{left:1070px;}
		.c_box p{color:#55a0b9; line-height:36px;}
		.c_box span{border-top:6px solid #55a0b9;color:#55a0b9;}
		.c_box .zhu{background:#55a0b9;height:93px;}
		.c_box .num{color:#55a0b9;}
		
		.d_box{left:1450px;}
		.d_box p{color:#879baa; line-height:36px;}
		.d_box span{border-top:6px solid #879baa;color:#879baa;}
		.d_box .zhu{background:#879baa;height:93px;}
		.d_box .num{color:#879baa;}
		.box_list p{ width:337px; margin-left:-68px;}
		.box_list{ bottom:56px;}
    </style>
</head>
<body style="background:#fff;">
<div class="toupiao_box">
    <div class="toupiao_title">
        PG, PS & WP Business Conference China 2016
        <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
logo_pc.jpg" alt="" class="logo_pc"/>
    </div>
    <div class="toupiao_con">
        <div class="question">What is your understanding of "digitalization for power generation & service"?</div>
        
        <div class="box_list a_box">
            <b class="num">41%</b>
            <div class="zhu"></div>
            <span>A</span>
            <p>New IT<br>Technology</p>
        </div>
        <div class="box_list b_box">
            <b class="num">8%</b>
            <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
win.png" alt="" class="win"/>
            <div class="zhu"></div>
            <span>B</span>
            <p>New way<br> of engaging customer</p>
        </div>
        <div class="box_list c_box">
            <b class="num">16%</b>
            <div class="zhu"></div>
            <span>C</span>
            <p>New way<br>of doing business</p>
        </div>
        <div class="box_list d_box">
            <b class="num">16%</b>
            <div class="zhu"></div>
            <span>D</span>
            <p>Buzz word<br>
from top management</p>
        </div>
    </div>
</div>
<script>
	function getvote()
	{
		$.ajax({
		   type: "POST",
		   url: "index.php?m=event&a=getvote2&rand="+Math.random(),
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
				
		   		$(".d_box").find(".num").html(msg['D']['bai']+"%");
		   		$(".d_box").find(".zhu").css("height",msg['D']['gao']);
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
