<?php /* Smarty version Smarty-3.0.6, created on 2016-11-04 11:34:20
         compiled from "D:\wamp\www\sim_power\view\templates\toupiao1.html" */ ?>
<?php /*%%SmartyHeaderCode:9035581c01bc25cd61-44570650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7ddb39ec244b6fe9c41f736e4e5b42e0ea94979' => 
    array (
      0 => 'D:\\wamp\\www\\sim_power\\view\\templates\\toupiao1.html',
      1 => 1478069536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9035581c01bc25cd61-44570650',
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
        <div class="question">Q1: How much % of today’s work could be automated by current technology?</div>
        <div class="box_list a_box">
            <b class="num">41%</b>
            <div class="zhu"></div>
            <span>A</span>
            <p>25%</p>
        </div>
        <div class="box_list b_box">
            <b class="num">8%</b>
            <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
win.png" alt="" class="win"/>
            <div class="zhu"></div>
            <span>B</span>
            <p>45%</p>
        </div>
        <div class="box_list c_box">
            <b class="num">16%</b>
            <div class="zhu"></div>
            <span>C</span>
            <p>65%</p>
        </div>
        <a href="javascript:void 0;" class="result" style="display:none;">Find Answer</a>
    </div>
</div>
<script>
    $('.result').click(function(){
        $('.b_box').addClass('c_box1');
        $('.win').show();
    })
	var type='<?php echo $_smarty_tpl->getVariable('guan')->value;?>
';
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
