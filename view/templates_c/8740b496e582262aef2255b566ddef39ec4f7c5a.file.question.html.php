<?php /* Smarty version Smarty-3.0.6, created on 2016-11-04 14:34:15
         compiled from "D:\wamp\www\sim_power\view\templates\question.html" */ ?>
<?php /*%%SmartyHeaderCode:13959581c2be7c2e6a8-99130360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8740b496e582262aef2255b566ddef39ec4f7c5a' => 
    array (
      0 => 'D:\\wamp\\www\\sim_power\\view\\templates\\question.html',
      1 => 1478241251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13959581c2be7c2e6a8-99130360',
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('cssSite')->value;?>
style1.css"/>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
jQuery1.11.3.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('jsSite')->value;?>
viewport.js"></script>
</head>
<body>
    <div class="question_wrap">
        <!--logo-->
        <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
logo.jpg" alt="" class="logo"/>
        <!--问题1-->
        <div class="qs qs2">
            <div class="question2"><span>Q1:</span>How much % of today’s work could be automated by current technology?</div>
            <ul class="question2_choice">
                <li>
                    <span class="choice_wrong">A</span><p>25%</p>
                </li>
                <li>
                    <span class="choice_wrong">B</span><p>45%</p>
                </li>
                <li>
                    <span class="choice_wrong">C</span><p>65%</p>
                </li>
            </ul>
            <div class="Submit_box">
                <div class="Submit NSubmit Submit2">Submit</div>
            </div>
        </div>
        <!--问题2-->
        <div class="qs qs2" style="display:none;">
            <div class="question2" style="margin-top:120px;"><span>Q2:</span>How much % of Generation Z’s jobs do not exist yet?</div>
            <ul class="question2_choice" style="margin-bottom:160px;">
                <li>
                    <span class="choice_wrong">A</span><p>25%</p>
                </li>
                <li>
                    <span class="choice_wrong">B</span><p>45%</p>
                </li>
                <li>
                    <span class="choice_wrong">C</span><p>65%</p>
                </li>
            </ul>
            <div class="Submit_box">
                <div class="Submit NSubmit Submit2">Submit</div>
            </div>
        </div>
        <!--问题3-->
        <div class="qs qs3" style="display:none;">
            <div class="question3">
                <P><span>Q3:</span>Are we open enough to reward fast failure?</P>
            </div>
            <div class="q3_question1">
                <p class="q3_title">Importance</p>
                <ul class="question3_choice">
                    <li>
                        <span class="choice_wrong">A</span><p>Very important</p>
                    </li>
                    <li>
                        <span class="choice_wrong">B</span><p>More or less</p>
                    </li>
                    <li>
                        <span class="choice_wrong">C</span><p>Not important</p>
                    </li>
                </ul>
            </div>

            <div class="q3_question2" style="margin-bottom:60px;">
                <p class="q3_title">Status-quo</p>
                <ul class="question3_choice">
                    <li>
                        <span class="choice_wrong">A</span><p>High</p>
                    </li>
                    <li>
                        <span class="choice_wrong">B</span><p>Medium</p>
                    </li>
                    <li>
                        <span class="choice_wrong">C</span><p>Low</p>
                    </li>
                </ul>
            </div>
			
            <div class="Submit_box">
                <div class="Submit NSubmit Submit3">Submit</div>
            </div>
        </div>
        <!--问题4-->
        <div class="qs qs2" style="display:none;">
            <div class="question2" style="margin-top:120px;word-wrap:break-word;word-break:break-all; padding-left:35px;">What is your understanding of "digitalization for power generation & service"?</div>
            <ul class="question2_choice" style="margin-bottom:160px;">
                <li>
                    <span class="choice_wrong">A</span><p>New IT Technology</p>
                </li>
                <li>
                    <span class="choice_wrong">B</span><p>New way of engaging customer</p>
                </li>
                <li>
                    <span class="choice_wrong">C</span><p>New way of doing business</p>
                </li>
                <li>
                    <span class="choice_wrong">D</span><p>Buzz word from top management</p>
                </li>
            </ul>
            <div class="Submit_box">
                <div class="Submit NSubmit Submit2">Submit</div>
            </div>
        </div>
         <!--问题5-->
        <div class="qs qs2" style="display:none;">
            <div class="question2" style="margin-top:120px; padding-left:35px;">What is your perception on our safety culture?</div>
            <ul class="question2_choice" style="margin-bottom:160px;">
                <li>
                    <span class="choice_wrong">A</span><p>Initial</p>
                </li>
                <li>
                    <span class="choice_wrong">B</span><p>Reactive</p>
                </li>
                <li>
                    <span class="choice_wrong">C</span><p>Calculative</p>
                </li>
                <li>
                    <span class="choice_wrong">D</span><p>Indicative</p>
                </li>
                <li>
                    <span class="choice_wrong">E</span><p>Appreciative</p>
                </li>
            </ul>
            <div class="Submit_box">
                <div class="Submit NSubmit Submit2">Submit</div>
            </div>
        </div>
    </div>
    <div class="layer_box layer_box1">
        <div class="layer_con layer_con1">
            <p class="font font1">Submitted successfully !</p>
            <p class="font font2">Please look at the screen<br/>for the survey result !</p>
            <a href="javascript:;" onClick="shuaxin()"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
next.png" alt=""/></a>
        </div>
    </div>
    <div class="layer_box layer_box2">
        <div class="layer_con layer_con2">
            <p class="font font1">Submitted successfully !</p>
            <p class="font font2">Please look at the screen<br/>for the voting result !</p>
        </div>
    </div>
</body>
<script type="text/javascript">
//    问题1
	 

    var CH=$(window).height();
    var CW=$(window).width();
	var guan='<?php echo $_smarty_tpl->getVariable('guan')->value;?>
';
	if(guan==1){
		$('.qs').hide();
		$('.qs').eq(0).show();
	}else if(guan==2){
		$('.qs').hide();
		$('.qs').eq(1).show();
	}else if(guan==3){
		$('.qs').hide();
		$('.qs').eq(2).show();	
	}else if(guan==4){
		$('.qs').hide();
		$('.qs').eq(3).show();	
	}else if(guan==5){
		$('.qs').hide();
		$('.qs').eq(4).show();	
	}
	
	
//    控制弹层js
    $('.layer_box').css({height:CH});
    $('.layer_con1').css({'margin-top':(CH-434)/2-50});
    $('.layer_con2').css({'margin-top':(CH-299)/2-50});
// 问题1,2
    $('.question2_choice li').click(function(){
        $('.question2_choice li').css({background:'#50bed7'});
        $('.question2_choice li span').removeClass('choice_wrong choice_right').addClass('choice_wrong');
        $(this).css({background:'#006487'});
		$(this).addClass('hover');
        $(this).find('span').removeClass('choice_wrong').addClass('choice_right');
        if($('.question2_choice li span').hasClass('choice_right')){
            $('.Submit').removeClass('NSubmit').addClass('CSubmit');
        }
    })

    $('.Submit2').click(function(){
        if($(this).hasClass('CSubmit')){
			if(guan==5){
				$('.layer_box2').show();
			}else{
          	  $('.layer_box1').show();
			}
			var xuan=$('.hover').find('.choice_right').html();
			
			$.ajax({
			   type: "POST",
			   beforeSend:function(){
			   },
			   url: "index.php?m=event&a=saveinfo",
			   data: "guan="+guan+"&xuan="+xuan,
			   success: function(msg){
				   //alert(1);
			   }
			});
			
        }
        setTimeout(function(){
            //$('.layer_box1').hide();
        },1000)
    })
	
//问题3
    $('.q3_question1 .question3_choice li').click(function(){
        $('.q3_question1 .question3_choice li').css({background:'#50bed7'});
        $(this).css({background:'#006487'});
		$(this).addClass('hover');
        $(this).find('span').removeClass('choice_wrong').addClass('choice_right');
    })

    $('.q3_question2 .question3_choice li').click(function(){
        $('.q3_question2 .question3_choice li').css({background:'#50bed7'});
        $(this).css({background:'#006487'});
		$(this).addClass('hover');
        $(this).find('span').removeClass('choice_wrong').addClass('choice_right');
    })
    setInterval(function(){
        if($('.q3_question1 .question3_choice li span').hasClass('choice_right') && $('.q3_question2 .question3_choice li span').hasClass('choice_right')){
            $('.Submit3').removeClass('NSubmit').addClass('CSubmit');
        }else{
            $('.Submit3').removeClass('CSubmit').addClass('NSubmit');
        }
    },100)

    $('.Submit3').click(function(){
        if($('.q3_question1 .question3_choice li span').hasClass('choice_right') && $('.q3_question2 .question3_choice li span').hasClass('choice_right')){
           
			var xuan1=$('.hover').eq(0).find('.choice_right').html();
			var xuan2=$('.hover').eq(1).find('.choice_right').html();
			$.ajax({
			   type: "POST",
			   beforeSend:function(){
			   },
			   url: "index.php?m=event&a=saveinfo",
			   data: "guan="+guan+"&xuan="+xuan1,
			   success: function(msg){
				   //alert(1);
			   }
			});
			var newguan=parseInt(guan)+1;
			$.ajax({
			   type: "POST",
			   beforeSend:function(){
			   },
			   url: "index.php?m=event&a=saveinfo",
			   data: "guan=9&xuan="+xuan2,
			   success: function(msg){
				   //alert(1);
			   }
			});
			$('.layer_box1').show();
			//$('.layer_box2').show();
        }
        setTimeout(function(){
            //$('.layer_box2').hide();
        },1000)
    })
	
	
	function shuaxin()
    {
    	$.ajax({
		   type: "POST",
		   url: "index.php?m=event&a=checkcuree",
		   data: "guan="+guan,
		   success: function(msg){
				if(msg==1){
					location.href=location.href+"&rand="+Math.random();
				}else{
					
				}
		   }
		});
    }
</script>
</html>