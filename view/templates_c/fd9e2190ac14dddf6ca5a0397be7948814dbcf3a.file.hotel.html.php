<?php /* Smarty version Smarty-3.0.6, created on 2016-10-09 21:27:05
         compiled from "D:\wamp\www\sim_sbcc\view\templates\hotel.html" */ ?>
<?php /*%%SmartyHeaderCode:943257fa45a9238142-99510901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9e2190ac14dddf6ca5a0397be7948814dbcf3a' => 
    array (
      0 => 'D:\\wamp\\www\\sim_sbcc\\view\\templates\\hotel.html',
      1 => 1476019624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '943257fa45a9238142-99510901',
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
<div class="wrap4"  style="display:-none;" >	
	<div class="title">
    	<div class="p1">Siemens Business </div>
        <div class="">Conference China 2016</div>      
    </div>
    <div class="listtitle">
    	<div class="hover">Hotel</div>
        <div class="line"></div>
        <div>Shuttle</div>
        <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
xia.png" class="icon" />
    </div>
    <!--<div class="textover" style="display:none;">
     <p style="margin-top:30px; font-weight:bold; color:#60063a;margin-bottom: 20px;">Hotel to Beijing Capital International Airport</p>
    <p>Distance: 46 km; Duration for car driving: 90 min</p>
	<p style="margin-top:30px; font-weight:bold; color:#60063a;margin-bottom: 20px;">Hotel to Siemens Beijing Office</p>
	<p>Distance: 57 km; Duration for car driving: 100 min</p>
		<p style="margin-top:30px; font-weight:bold; color:#60063a" >Arrival</p>
    	<div class="li1">
        	
        	<ul>
            	<li><span>Self arrangement: Free parking for hotel guests</span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot1.png"/></li>
                <li><span>Shuttle: Siemens Beijing Office – Hotel</span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot1.png"/></li>
                <li><span>Shuttle: Beijing Capital International Airport – Hotel</span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot1.png"/></li>
            </ul>
        </div>
        <p style="margin-top:30px; font-weight:bold; color:#60063a" >Departure</p>
    	<div class="li1">
        	<ul>
            	<li><span>Self arrangement: Free parking for hotel guests</span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot1.png"/></li>
                <li><span>Shuttle: Hotel – Siemens Beijing Office</span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot1.png"/></li>
                <li><span>Shuttle: Hotel – Beijing Capital International Airport</span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot1.png"/></li>
            </ul>
        </div>
        <p style="margin-top:30px; " >Detailed logistic information will be updated at later phase.</p>
        <p style="margin-top:30px; font-weight:bold; color:#60063a" >Venue map (DRAFT only!)</p>
        <p style="margin-top:30px; " ><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
map.jpg"/></p>
     		<div class="btn">Submit</div>
    </div> -->
    <div class="textover" style="display:-none;">
        <p>Please choose your transportation arrangement:</p>
        <p class="t1">Arrival on Oct. 30</p>
        <p class="line"></p>
    	<div class="question1">
        	<div class="qtitle" id="yc1"><span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_1.png" /><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_2.png" style="display:none;" /></span>Self arrangement</div>
            <p class="line"></p>
            <div class="list1">
            	<p>By car: Free parking for hotel guests</p>
                <p class="line"></p>
                <p>By taxi:</p>
                <p style="line-height:32px; margin-top:10px; color:#60063a;">From<br>Beijing Capital International Airport</p>
                <div class="list">
                    <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
line_1.png" class="leftline" style="height:130px; width:1px;position: relative;left: 9px;">
                    <ul>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png">
                            <p class="time"><span>Distance:</span> approx. 46 Km</p>
                        </li>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png">
                            <p class="time"><span>Journey time:</span> approx. 60 minutes</p>
                        </li>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png">
                            <p class="time"><span>Fare:</span> approx. RMB 145</p>
                        </li>
                    </ul>
          		</div>
                <p style="line-height:32px; margin-top:-10px; color:#60063a;">From<br>Siemens Beijing Center</p>
                <div class="list">
                    <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
line_1.png" class="leftline" style="height:130px; width:1px;position: relative;left: 9px;">
                    <ul>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png">
                            <p class="time"><span>Distance:</span> approx. 57 Km</p>
                        </li>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png">
                            <p class="time"><span>Journey time:</span> approx. 70 minutes</p>
                        </li>
                        <li>
                            <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png">
                            <p class="time"><span>Fare:</span> approx. RMB 180</p>
                        </li>
                    </ul>
          		</div>
                
            </div>
        </div>
        <p class="line"></p>
        <div class="question1" id="yc11">
        	<div class="qtitle" id="yc2" style="line-height:42px;"><span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_1.png" /><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_2.png" style="display:none;" /></span>Shuttle: Beijing Capital International &nbsp;&nbsp;&nbsp;&nbsp;Airport - Hotel</div>
            <p class="line"></p>
            <div class="list1 list2">
            	<p><span>T3</span> Arrival Hall (Int’l Arrivals Exit/ B),
    &nbsp;&nbsp;&nbsp;&nbsp; staff with signage</p>
                <div class="k1">
                	<div class="sel1"><span>Please select</span> <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
new_xia.png" /></div>
                	<ul class="sel" style="display:none;">
                    	<li class="t11">Please select <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
shang.png" /></li>
                        <li>1Shuttle A1: 11:00</li>
                        <li>Shuttle A1: 11:00</li>
                    </ul>
                </div>
            </div>
            <div class="list1 list2">
            	<p><span>T3</span> Arrival Hall (Int’l Arrivals Exit/ B),
    &nbsp;&nbsp;&nbsp;&nbsp; staff with signage</p>
                <div class="k1">
                	<div class="sel1"><span>Please select</span> <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
new_xia.png" /></div>
                	<ul class="sel" style="display:none;">
                    	<li class="t11">Please select <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
shang.png" /></li>
                        <li>2Shuttle A1: 11:00</li>
                        <li>Shuttle A1: 11:00</li>
                    </ul>
                </div>
            </div>
            
             <div class="list1 list2">
            	<p><span>T3</span> Arrival Hall (Int’l Arrivals Exit/ B),
    &nbsp;&nbsp;&nbsp;&nbsp; staff with signage</p>
                <div class="k1">
                	<div class="sel1"><span>Please select</span> <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
new_xia.png" /></div>
                	<ul class="sel" style="display:none;">
                    	<li class="t11">Please select <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
shang.png" /></li>
                        <li>3Shuttle A1: 11:00</li>
                        <li>Shuttle A1: 11:00</li>
                    </ul>
                </div>
            </div>
            <i class="xie">*Terminal shuttle service is subject to<br>&nbsp;&nbsp;  confirmed selection.</i>
        </div>
        <p class="line"></p>
        <div class="question1">
        	<div class="qtitle" style="line-height:42px;" id="yc3"><span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_1.png" /><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_2.png" style="display:none;" /></span>Shuttle: Siemens Beijing Center - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hotel</div>
            <p class="line"></p>
            <div class="list1">
            	<p style=" font-size:28px;">Shuttle S1, 12:30 (Meeting point: Gate 2)</p>
            </div>
        </div>
        <p class="t1">Departure on Oct. 31</p>
        <p class="line"></p>
        <div class="question1">
        	<div class="qtitle" id="yc4" ><span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_1.png" /><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_2.png" style="display:none;" /></span>Self arrangement</div>
        </div>
        <p class="line"></p>
        <div class="question1" >
        	<div class="qtitle"  style="line-height:42px;" id="yc5"><span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_1.png" /><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_2.png" style="display:none;" /></span>Shuttle: Sunrise Kempinski - Beijing &nbsp;&nbsp;&nbsp;&nbsp;Capital International Airport </div>
        </div>
        <p class="line"></p>
        <div class="question1" id="yc12">
        <div class="list1 list2">
            	<p><span>T3</span> Arrival Hall (Int’l Arrivals Exit/ B),
    &nbsp;&nbsp;&nbsp;&nbsp; staff with signage</p>
                <div class="k1">
                	<div class="sel1"><span>Please select</span> <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
new_xia.png" /></div>
                	<ul class="sel" style="display:none;">
                    	<li class="t11">Please select <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
shang.png" /></li>
                        <li>Shuttle A1: 11:00</li>
                        <li>Shuttle A1: 11:00</li>
                    </ul>
                </div>
         </div>
         <div class="list1 list2">
            	<p><span>T3</span> Arrival Hall (Int’l Arrivals Exit/ B),
    &nbsp;&nbsp;&nbsp;&nbsp; staff with signage</p>
                <div class="k1">
                	<div class="sel1"><span>Please select</span> <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
new_xia.png" /></div>
                	<ul class="sel" style="display:none;">
                    	<li class="t11">Please select <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
shang.png" /></li>
                        <li>Shuttle A1: 11:00</li>
                        <li>Shuttle A1: 11:00</li>
                    </ul>
                </div>
         </div>
         <div class="list1 list2">
            	<p><span>T3</span> Arrival Hall (Int’l Arrivals Exit/ B),
    &nbsp;&nbsp;&nbsp;&nbsp; staff with signage</p>
                <div class="k1">
                	<div class="sel1"><span>Please select</span> <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
new_xia.png" /></div>
                	<ul class="sel" style="display:none;">
                    	<li class="t11">Please select <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
shang.png" /></li>
                        <li>Shuttle A1: 11:00</li>
                        <li>Shuttle A1: 11:00</li>
                    </ul>
                </div>
         </div>
        <i class="xie">*Terminal shuttle service is subject to<br>&nbsp;&nbsp;  confirmed selection.</i>
        </div>
        <p class="line"></p>
        <div class="question1">
        	<div class="qtitle" id="yc6"  style="line-height:42px;"><span><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_1.png" /><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
yuan_2.png" style="display:none;" /></span>Shuttle: Sunrise Kempinski - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Siemens Beijing Center</div>
        </div>
        <p class="line"></p>
        <div class="question1">
        	<div class="list1">
            	<p style="font-size:28px;">Shuttle S1, 16:30 (est. arrival time: 18:10)</p>
                
            </div>
        </div>
        <p style="font-size:30px; margin-top:20px;"><input type="text" placeholder="Your name:"  id="name"/></p>
        <p style="font-size:30px; margin-top:20px;"><input type="text" placeholder="Your mobile:" id="phone"/></p>
        <p style="font-size:26px; margin:10px 0; color:#7b9aa9;">we’ll contact you if you haven’t shown up.</p>
        <div class="new_btn">Submit</div>
            <p class="t1" style="margin-bottom:10px;">Transfer shuttle between Hotels</p>
            <p>Transfer shuttle between Sunrise Kempinski (event hotel) and Yanqi hotel will be arranged at regular frequencies during the below times:  </p>
            <p style="line-height:32px; margin-top:10px;    color:#60063a;">Sunrise - Yanqi</p>
            <div class="list" style=" padding-top: 26px;">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
line_1.png" class="leftline" style="height:130px; width:1px;position: relative;left: 9px;">
                <ul>
                    <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png">
                        <p class="time time1" >Oct. 30</p>
                        <p class="time time2">every 15 minutes from 12:30 to 14:30,and 21:30 to 23:30</p>
                    </li>
                    <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png">
                        <p class="time time1" >Oct. 31</p>
                        <p class="time time2">16:15, 16:30</p>
                    </li>
                </ul>
            </div>
            <p style="line-height:32px;     margin-top: -20px;   color:#60063a;">Yanqi - Sunrise</p>
            <div class="list" style=" padding-top: 26px;">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
line_1.png" class="leftline" style="height:130px; width:1px;position: relative;left: 9px;">
                <ul>
                    <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png">
                        <p class="time time1" >Oct. 30</p>
                        <p class="time time2">every 15 minutes from 12:30 to 15:00</p>
                    </li>
                    <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png">
                        <p class="time time1" >Oct. 31</p>
                        <p class="time time2">8:15, 8:30</p>
                    </li>
                </ul>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
    </div>
    <div class="text" style="display:-none;">
    	<p class="a1">Event Venue</p>
        <p>Sunrise Kempinski Hotel, Yanqi Lake, Beijing</p>
        <p>Address: 18, Jia, Yanshui Road, Yanqi Lake, Huairou District, Beijing, China</p>
        <p>Telephone:  +86 10 69618888</p>
        <p class="a1">Hotel room reservation</p>
        <ul class="tli">
        	<li><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
heidot.png" class="heidot" />
            	There are two accommodation hotels for participants this year:
            	<p>1. Sunrise Kempinski Hotel Beijing – meeting venue.</p>
                <p>2. Yanqi Hotel – 15 minutes drivedistance to meeting location.</p>
            </li>
            <li><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
heidot.png" class="heidot" />Please chooses staying hotel and room type per own preference. However hotel confirmation will be based on first come first serve policy.</li>
             <li><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
heidot.png" class="heidot" />Beijing colleagues are suggested to arrange your stay in Yanqi Hotel, to make it convenient for other colleagues with travel time pressure.</li>
             <li><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
heidot.png" class="heidot" />All speakers are asked to stay in Sunrise Kempinski Hotel for the convenience of rehearsal.</li>
             <li><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
heidot.png" class="heidot" />Please book your hotel <br>accommodation via hotel reservation helpdesk @ </li>
             <li><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
heidot.png" class="heidot" />reservation.yanqilakebeijing@kempinski.com. Please note:</li>
        </ul>
        <div class="content">
            <div class="list">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
line_1.png" class="leftline" style="height:760px" />
                <ul>
                    <li>
                    	<img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png" />
                        <p class="time">Sunrise Kempinski Hotel Beijing</p>
                        <p class="a1">Room Rate</p>
                        <p class="add">Single Room: CNY 900 per night</p>
                        <p class="add">Twin Room: CNY 900 per night</p>
                        <p class="add">Suite: CNY 1000 per night</p>
                        <p class="a1">Address</p>
                        <p class="add">18, Jia, Yanshui Road, Yanqi Lake,</p>
                        <p class="add">Huairou District, Beijing, China</p>
                    </li>
                    <li>
                    	<img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dot.png" />
                        <p class="time">Yanqi Hotel</p>
                        <p class="a1">Room Rate</p>
                        <p class="add">Single Room: CNY 1000 per night</p>
                        <p class="add">Twin Room: CNY 1000 per night</p>
                        <p class="add">Suite: n/a</p>
                        <p class="a1">Address</p>
                        <p class="add">Yanqi Hotel, Yanqi Island, Huairou</p>
                        <p class="add">District, Beijing, China</p>
                    </li>
                </ul>
            </div>
    </div>
    </div>
</div> 
<div class="tanc">
	<div class="kuang">
    	<div class="ts1">Submitted successfully !</div>
        <div class="ts2" style=" padding:0;padding-left: 30px; line-height:290px;">Please complete all requests !</div>
        <div class="ts2">Sorry,You have already submitted!</div>
    </div>
</div>
<script>
var b=1;
var mystate='<?php echo $_smarty_tpl->getVariable('list')->value["id"];?>
';
	$(document).ready(function(){
		
		
		$('.li1').eq(0).find('li').click(function(){
			$('.li1').eq(0).find('li').removeClass('hover');
			$('.li1').eq(0).find('li').find('img').hide();	
			$(this).find('img').show();	
			$(this).addClass('hover');
		})
		$('.li1').eq(1).find('li').click(function(){
			$('.li1').eq(1).find('li').removeClass('hover');
			$('.li1').eq(1).find('li').find('img').hide();	
			$(this).find('img').show();	
			$(this).addClass('hover');
		})
		$('.listtitle div').eq(0).click(function(){
				$('.listtitle div').removeClass('hover');
				$('.listtitle div').eq(0).addClass('hover');
				$('.text').show();
				$('.textover').hide();
				$('.wrap4 .listtitle img.icon').removeClass('hover');
		})
		$('.listtitle div').eq(2).click(function(){
				$('.listtitle div').removeClass('hover');
				$('.listtitle div').eq(2).addClass('hover');
				$('.text').hide();
				$('.textover').show();
				$('.wrap4 .listtitle .icon').addClass('hover');
				if(mystate>0){
					$('.ts1').hide();
					$('.ts2').eq(1).show();;
					$('.tanc').show();
				}
		})
		$('.tanc').click(function(){
			$('.tanc').hide();
			$('.ts2').hide();
			//$('.listtitle div').eq(0).click();
		})
		$('.btn').click(function(){
			if(mystate>0){
					$('.ts1').hide();
					$('.ts2').eq(1).show();;
					$('.tanc').show();
					return false;
			}
			var x1=$('.li1').eq(0).find('ul').find('.hover').length;
			var x2=$('.li1').eq(1).find('ul').find('.hover').length;
			
			if(x2<=0 || x1 <=0){
				//alert(111);
				$('.tanc').show();
				$('.ts2').eq(0).show();
				return false;
			}
			x1=$('.li1').eq(0).find('ul').find('.hover').find('span').html();
			x2=$('.li1').eq(1).find('ul').find('.hover').find('span').html();
			if(b!=1){
				return false;
			}
			b=0;
			$.ajax({
				   type: "POST",
				   url: "index.php?m=event&a=cunshuttle",
				   data: "x1="+x1+"&x2="+x2,
				   async: false,
				   success: function(msg){
					   $('.tanc,.ts2').hide();
					   $('.tanc,.ts1').show();
					   mystate=222;
				   }
			});
	
		})
		
	});
	var a=0;
	$('#yc1').click(function(){
		$('#yc1 span').find('img').hide().eq(1).show();
		$('#yc2 span').find('img').hide().eq(0).show();
		$('#yc3 span').find('img').hide().eq(0).show();
		$('#yc1,#yc2,#yc3').removeClass('hover');
		$(this).addClass('hover');
		a=0;
	})
	$('#yc2').click(function(){
		$('#yc1 span').find('img').hide().eq(0).show();
		$('#yc2 span').find('img').hide().eq(1).show();
		$('#yc3 span').find('img').hide().eq(0).show();
		a=1;
		$('#yc1,#yc2,#yc3').removeClass('hover');
		$(this).addClass('hover');
	})
	$('#yc3').click(function(){
		$('#yc1 span').find('img').hide().eq(0).show();
		$('#yc2 span').find('img').hide().eq(0).show();
		$('#yc3 span').find('img').hide().eq(1).show();
		a=0;
		$('#yc1,#yc2,#yc3').removeClass('hover');
		$(this).addClass('hover');
	})
	$('#yc11 .sel1').click(function(){
		if(a==1){
			$(this).parent().find('.sel').show();
		}else{
			return false;	
		}
	})
	$('.sel li').click(function(){
		var a=$(this).index();	
		if(a>0){
			if($(this).parent().parent().parent().parent().find('.hover').hasClass('qtitle')){
				$(this).parent().parent().parent().parent().find('.hover').eq(1).find('span').html('Please select');
				$(this).parent().parent().parent().parent().find('.hover').eq(1).removeClass('hover');
			}else{
				$(this).parent().parent().parent().parent().find('.hover').find('span').html('Please select');
				$(this).parent().parent().parent().parent().find('.hover').removeClass('hover');
			}
			$(this).parent().parent().find('.sel1').find('span').html($(this).html());
			$(this).parent().parent().find('.sel1').addClass('hover');	
			$(this).parent().hide();
			
		}
	})
	
	var aaa=0;
	$('#yc4').click(function(){
		$('#yc4 span').find('img').hide().eq(1).show();
		$('#yc5 span').find('img').hide().eq(0).show();
		$('#yc6 span').find('img').hide().eq(0).show();
		$('#yc4,#yc5,#yc6').removeClass('hover');
		$(this).addClass('hover');
		aaa=0;
	})
	$('#yc5').click(function(){
		$('#yc4 span').find('img').hide().eq(0).show();
		$('#yc5 span').find('img').hide().eq(1).show();
		$('#yc6 span').find('img').hide().eq(0).show();
		aaa=1;
		$('#yc4,#yc5,#yc6').removeClass('hover');
		$(this).addClass('hover');
	})
	$('#yc6').click(function(){
		$('#yc4 span').find('img').hide().eq(0).show();
		$('#yc5 span').find('img').hide().eq(0).show();
		$('#yc6 span').find('img').hide().eq(1).show();
		aaa=0;
		$('#yc4,#yc5,#yc6').removeClass('hover');
		$(this).addClass('hover');
	})
	$('#yc12 .sel1').click(function(){
		if(aaa==1){
			$(this).parent().find('.sel').show();
		}else{
			return false;	
		}
	})
	$('.new_btn').click(function(){
		var x1,x2,x3,x4,x,y,z,w;
		var x11='';var x12='';var x13='';var x21='';var x22='';var x23='';
		if($('#yc1').hasClass('hover')){
			var x1='Self arrangement';
			var w=1;
		}else if($('#yc2').hasClass('hover')){
			var x1='Shuttle: Beijing Capital International Airport - Hotel';
			x=1;
		}else if($('#yc3').hasClass('hover')){
			var x1='Shuttle: Siemens Beijing Center - Hotel';
		}else{
			alert('请选择');
			return false;	
		}
		if($('#yc4').hasClass('hover')){
			var x2='Self arrangement';
			var z=1;
		}else if($('#yc5').hasClass('hover')){
			var x2='Shuttle: Sunrise Kempinski - Beijing Capital International Airport ';
			y=1;
		}else if($('#yc6').hasClass('hover')){
			var x2='Shuttle: Sunrise Kempinski - Siemens Beijing Center';
		}else{
			alert('请选择1');
			return false;	
		}
		
		//return false;
		if(x==1){
			var lic=$('#yc11').find('.hover').length;
			if(lic<2){
				alert('请选择');	
				return false;
			}else{
				var x11=$('#yc11').find('.hover').eq(1).find('span').html();
			}
			//alert(x11);alert(x12);alert(x13);
		}
		if(y==1){
			var lid=$('#yc12').find('.hover').length;
			
			if(lid<1){
				alert('请选择');	
				return false;
			}else{
				var x21=$('#yc12').find('.hover').eq(0).find('span').html();
			}
			//alert(x21);alert(x22);alert(x23);
		}
		var name=$('#name').val();
		var phone=$('#phone').val();
		var reg = /^0?1[3|4|5|7|8][0-9]\d{8}$/;
		if(w!=1 && z!=1){
			if(!name || !phone){
			  alert("请输入姓名~");
			  return false;
			}
			if (!reg.test(phone)) {
			  alert("请输入正确手机号码~");
			  return false;
			}
		}
		
		
		$.ajax({
				   type: "POST",
				   url: "index.php?m=event&a=cunnewshuttle",
				   data: "x1="+x1+"&x2="+x2+"&x11="+x11+"&x12="+x12+"&x13="+x13+"&x21="+x21+"&x22="+x22+"&x23="+x23+"&name="+name+"&phone="+phone,
				   async: false,
				   success: function(msg){
					  alert(name);alert(phone);return false;
				   }
			});
		
	})	
	
</script>  
</body>
</html>
