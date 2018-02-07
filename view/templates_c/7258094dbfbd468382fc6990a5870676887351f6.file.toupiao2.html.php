<?php /* Smarty version Smarty-3.0.6, created on 2016-11-15 15:25:35
         compiled from "D:\wamp\www\sim_mobc\view\templates\toupiao2.html" */ ?>
<?php /*%%SmartyHeaderCode:25669582ab86f895ca9-27156876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7258094dbfbd468382fc6990a5870676887351f6' => 
    array (
      0 => 'D:\\wamp\\www\\sim_mobc\\view\\templates\\toupiao2.html',
      1 => 1479194734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25669582ab86f895ca9-27156876',
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
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('cssSite')->value;?>
style.css">
	<script src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
jQuery1.11.3.js"></script>
</head>
<body style="background:#fff;">
<div class="toupiao_box">
    <div class="toupiao_title">
        Mobility China Management Meeting 2016
        <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
logo_pc.jpg" alt="" class="logo_pc"/>
    </div>
    <div class="toupiao_con">
        <div class="question">Which party below you believe is NOT the key stakeholder of Siemens e-
            Mobility ?</div>
        <div class="box_list a_box">
            <b class="num">41%</b>
            <div class="zhu"></div>
            <span>A</span>
            <p>Utility</p>
        </div>
        <div class="box_list b_box">
            <b class="num">8%</b>
            <div class="zhu"></div>
            <span>B</span>
            <p style="width:120px;margin-left:-10px;">BUS OEM</p>
        </div>
        <div class="box_list c_box">
            <b class="num">16%</b>
            <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
win.png" alt="" class="win"/>
            <div class="zhu"></div>
            <span>C</span>
            <p>Operator</p>
        </div>
        <div class="box_list d_box">
            <b class="num">41%</b>
            <div class="zhu"></div>
            <span>D</span>
            <p style="width:120px;margin-left:-9px;">Gas station</p>
        </div>
        <div class="box_list e_box">
            <b class="num">100%</b>
            <div class="zhu"></div>
            <span>E</span>
            <p style="width:150px;margin-left:-24px;">Transportation Authority</p>
        </div>
    </div>
</div>
<script>
    $('.result').click(function(){
        $('.c_box').addClass('c_box1');
        $('.win').show();
    })
	
	
</script>

<script>
	function getvote()
	{
		$.ajax({
		   type: "POST",
		   url: "index.php?m=index&a=getvote3&rand="+Math.random(),
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
				
		   		$(".e_box").find(".num").html(msg['E']['bai']+"%");
		   		$(".e_box").find(".zhu").css("height",msg['E']['gao']);
				setTimeout("getvote()",3000);
		   }
		});
	}
getvote();

</script>
</body>
</html>
