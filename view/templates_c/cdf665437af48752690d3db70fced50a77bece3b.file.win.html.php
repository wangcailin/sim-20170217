<?php /* Smarty version Smarty-3.0.6, created on 2016-12-13 11:32:44
         compiled from "/www/web/weixin_siemens/external/sim_katong/view/templates/win.html" */ ?>
<?php /*%%SmartyHeaderCode:1889444967584f6bdceccc95-48951723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdf665437af48752690d3db70fced50a77bece3b' => 
    array (
      0 => '/www/web/weixin_siemens/external/sim_katong/view/templates/win.html',
      1 => 1481599930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1889444967584f6bdceccc95-48951723',
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
<div class="win"  style="display:-none;" >
    <div class="logo"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
logo_1.jpg" /></div>
    <div class="dati"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
dati.png" /></div>
    <div class="ren"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
wenti<?php echo $_smarty_tpl->getVariable('type')->value;?>
.png" /></div>
    <div class="question">
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questionlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    	<div class="list">
        	<p class="qa" index="<?php echo $_smarty_tpl->tpl_vars['item']->value['real'];?>
" idnub="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Q<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
. <span><?php echo $_smarty_tpl->tpl_vars['item']->value['question'];?>
</span></p>
            <ul class="answer" >
            	<li index="A"><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
a.png" /></div><?php echo $_smarty_tpl->tpl_vars['item']->value['A'];?>
</li>
                <li index="B"><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
b.png" /></div><?php echo $_smarty_tpl->tpl_vars['item']->value['B'];?>
</li>
                <li index="C"><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
c.png" /></div><?php echo $_smarty_tpl->tpl_vars['item']->value['C'];?>
</li>
                <li index="D"><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
d.png" /></div><?php echo $_smarty_tpl->tpl_vars['item']->value['D'];?>
</li>
            </ul>
            <div class="line"></div>
        </div>
        <?php }} ?>
       <!--div class="list">
        	<p class="qa">Q1. 西门子企业品牌宣言是什么？</p>
            <ul class="answer">
            	<li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
a.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
b.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
c.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
d.png" /></div>alkdsflkasdf</li>
            </ul>
            <div class="line"></div>
        </div>
        <div class="list">
        	<p class="qa">Q1. 西门子企业品牌宣言是什么？</p>
            <ul class="answer">
            	<li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
a.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
b.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
c.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
d.png" /></div>alkdsflkasdf</li>
            </ul>
            <div class="line"></div>
        </div>
        <div class="list">
        	<p class="qa">Q1. 西门子企业品牌宣言是什么？</p>
            <ul class="answer">
            	<li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
a.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
b.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
c.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
d.png" /></div>alkdsflkasdf</li>
            </ul>
            <div class="line"></div>
        </div>
        <div class="list">
        	<p class="qa">Q1. 西门子企业品牌宣言是什么？</p>
            <ul class="answer">
            	<li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
a.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
b.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
c.png" /></div>alkdsflkasdf</li>
                <li><div class="shuhao"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
d.png" /></div>alkdsflkasdf</li>
            </ul>
            <div class="line"></div>
        </div-->
        <div class="btn"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
tijiao.png" class="tijiao" /></div>
    </div>
    
    <div class="win_tanc" style="display:none;">
    	<div class="tanbg" style="height:975px;">
        	<div class="state_win" style=" display:none;"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
chengong.png" /></div>
            <div class="state_over" style="padding-top:200px;"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
2ci.png" /></div>
            <div class="state_over" style="padding-top:200px; "><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
1ci.png" /></div>
            <div class="state_over" style="padding-top:200px;"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
3ci.png" /></div>
            
            <div id="yc21" style="position: absolute;top: 470px; width:750px; height:380px; overflow:hidden;">
                <ul style=""  class="errorlist">
                    
                </ul>
            </div>
            <div class="btnlist">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
lingjiang.png" class="guize lingqu"  style="display:none;" />
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
chuangguan.png" class="start chuangguan" style="display:none;" onClick="window.location='index.php?m=event&a=index'" />
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
jixu.png" class="start jixu"   style="display:none;" />
     	    </div>
            
        </div>
    </div>
    
    <div class="win_tanc" style="display:none; z-index:11;">
    	<div class="tanbg" style="">
        	<div class=" qingdaan" style=" display: block;padding-top: 220px;"><img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
qingdaan.png" /></div>
            <div class="btnlist" style="bottom:0; width:796px;">
                <img src="<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
close_btn.png" class="guanbiwin" />
     	    </div>
    </div>
    
</div>
</div>
<?php $_template = new Smarty_Internal_Template("share1.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script>
	var type='<?php echo $_smarty_tpl->getVariable('type')->value;?>
';
	var mywin="<?php echo $_smarty_tpl->getVariable('mywin')->value['id'];?>
";
	var lilist='';
	$('.answer li').click(function(){
		$(this).parent().find('.hover').removeClass('hover');
		$(this).addClass('hover');	
	})
	$('.jixu').click(function(){
		window.location='index.php?m=event&a=question&type='+type+'&sui='+Math.random();
	})
	$('.guanbiwin').click(function(){
			$('.win_tanc').hide();
			$('.state_win').hide();	
	})
	$('.tijiao').click(function(){
		var nub=$('.question').find('.hover').length;
		
		if(nub<5){
			$('.win_tanc').eq(1).show();
			$('.qingdaan').eq(0).show();
			return false;
		}
		var x1=$('.question').find('.qa').eq(0).attr('idnub');
			x1+= ','+$('.question').find('.hover').eq(0).attr('index');
		var x2=$('.question').find('.qa').eq(1).attr('idnub');
			x2+= ','+$('.question').find('.hover').eq(1).attr('index');
		var x3=$('.question').find('.qa').eq(2).attr('idnub');
			x3+= ','+$('.question').find('.hover').eq(2).attr('index');
		var x4=$('.question').find('.qa').eq(3).attr('idnub');
			x4+= ','+$('.question').find('.hover').eq(3).attr('index');
		var x5=$('.question').find('.qa').eq(4).attr('idnub');
			x5+= ','+$('.question').find('.hover').eq(4).attr('index');	
		$.ajax({
		   type: "POST",
		   url: "index.php?m=event&a=cunquestion",
		   data: "x1="+x1+"&x2="+x2+"&x3="+x3+"&x4="+x4+"&x5="+x5+"&type="+type,
		   dataType: "json",
		   async: false,
		   success: function(msg){
			   $('.win_tanc').eq(0).show();
			   if(msg[0]==200){
				    $('.state_win').show();
					$('.lingqu').show();
					$('.chuangguan').show();
					 $('.tanbg').eq(0).css('height','626px');	
					 $('.tanbg').eq(0).css('background','url(<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
tancbg.png)');
					return false;   
			   }else{
				   if(mywin){
						$('.lingqu').show();
				   }else{
						$('.btnlist img').css('right','310px');   
				   }
				    $('.tanbg').eq(0).css('margin-top','185px');
					$('.tanbg').eq(0).css('height','975px');		
					$('.tanbg').eq(0).css('background','url(<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
tancbg1.png)');
					var a2=1;
					for(var a1=2;a1<7;a1++){
						if(msg[a1]==1){
							var title=$('.qa').eq(a1-2).find('span').html();
							lilist=lilist+"<li>"+a2+". "+title+"</li>";
							a2++;	
						}	
						
					}
					$('.errorlist').html(lilist);
					var	 myScroll = new iScroll('yc21');
					setTimeout(function () {
					 myScroll.refresh();
					}, 100);
					if(msg[1]==1){
						$('.state_over').eq(0).show();	
						$('.jixu').show();
					}else if(msg[1]==2){
						$('.state_over').eq(1).show();
						$('.jixu').show();	
					}else{
						$('.chuangguan').show();
						$('.state_over').eq(2).show();	
					}   
			   }
		   }
		});
		//$('.win_tanc').show();	
	})
	$('.guize').click(function(){
		window.location='index.php?m=event&a=winover';	
	})
	$(document).ready(function(){
					
	     $('.tanbg').eq(0).css('background','url(<?php echo $_smarty_tpl->getVariable('imageSite')->value;?>
tancbg1.png)');
	});
</script>
</body>
</html>
