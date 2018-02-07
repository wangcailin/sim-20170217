<?php /* Smarty version Smarty-3.0.6, created on 2016-11-15 15:31:01
         compiled from "D:\wamp\www\sim_mobc\view\templates\question.html" */ ?>
<?php /*%%SmartyHeaderCode:26522582ab9b5f01080-83260937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd5323ffa83140a4ee11bf1b85297d4a6c6ffdc5' => 
    array (
      0 => 'D:\\wamp\\www\\sim_mobc\\view\\templates\\question.html',
      1 => 1479195057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26522582ab9b5f01080-83260937',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>西门子</title>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('cssSite')->value;?>
style.css">
	<script src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
jQuery1.11.3.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
viewport.js"></script>
</head>
<body>
    <div class="question_wrap">
        <!--logo-->
        <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
logo1.jpg" alt="" class="logo"/>
        <!--问题3-->
        <div class="qs qs3">
            <div class="question3">
                <P>Which party below you believe is NOT the key stakeholder of Siemens e-Mobility ?</p>
            </div>
            <ul class="question3_choice">
                <li>
                    <span class="choice_wrong">A</span><p>Utility</p>
                </li>
                <li>
                    <span class="choice_wrong">B</span><p>BUS OEM</p>
                </li>
                <li>
                    <span class="choice_wrong">C</span><p>Operator</p>
                </li>
                <li>
                    <span class="choice_wrong">D</span><p>Gas station</p>
                </li>
                <li>
                    <span class="choice_wrong">E</span><p>Transportation Authority</p>
                </li>
            </ul>
            <div class="Submit_box">
                <div class="Submit NSubmit Submit3">Submit</div>
            </div>
        </div>
    </div>
    <div class="layer_box layer_box2">
        <div class="layer_con layer_con2">
            <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
close.png" alt="" class="close"/>
            <p class="font font1">Submitted successfully !</p>
            <p class="font font2"></p>
        </div>
    </div>
</body>
<script type="text/javascript">
//    问题1
    var CH=$(window).height();
    var CW=$(window).width();
	var kai=1;
//    控制弹层js
    $('.layer_box').css({height:CH});
    $('.layer_con2').css({'margin-top':(CH-299)/2});
//问题
    $('.question3_choice li').click(function(){
		if(kai==0){return false;}
        $('.question3_choice li').css({background:'#50bed7'});
        $('.question3_choice li span').removeClass('choice_wrong choice_right').addClass('choice_wrong');
        $(this).css({background:'#006487'});
		$(this).addClass('hover');
        $(this).find('span').removeClass('choice_wrong').addClass('choice_right');
        if($('.question3_choice li span').hasClass('choice_right')){
            $('.Submit').removeClass('NSubmit').addClass('CSubmit');
        }
    })
    $('.Submit3').click(function(){
		if(kai==0){return false;}
        if($(this).hasClass('CSubmit')){
			var xuan=$('.hover').find('.choice_right').html();
			var guan=1;
			$.ajax({
			   type: "POST",
			   beforeSend:function(){
			   },
			   url: "index.php?m=index&a=saveinfo",
			   data: "guan="+guan+"&xuan="+xuan,
			   success: function(msg){
				  $('.layer_box2').show();
				  kai=0;
			   }
			});
            
        }
    })
    $('.close').click(function(){
        $('.layer_box2').hide();
    })
</script>
</html>