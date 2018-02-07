$(function(){
	// 添加滑动部分内容
	var imgUrl = '/external/sim-20180217/view/templates/images/';
	var textObj = [
		{
			text:'好好读书',
			img:'study_01',
			target:'学业旺',
			hier:1,
			level:1
		},
		{
			text:'不挂科',
			img:'study_02',
			target:'学业旺',
			hier:1,
			level:2
		},
		{
			text:'升职加薪奖金翻一番',
			img:'work_01',
			target:'事业旺',
			hier:2,
			level:1
		},
		{
			text:'客户爸爸心情好',
			img:'work_02',
			target:'事业旺',
			hier:2,
			level:2
		},
		{
			text:'戒除拖延症',
			img:'work_03',
			target:'事业旺',
			hier:2,
			level:3
		},
		{
			text:'大吉大利有钱有你',
			img:'money_01',
			target:'财运旺',
			hier:3,
			level:1
		},
		{
			text:'一夜暴富',
			img:'money_02',
			target:'财运旺',
			hier:3,
			level:2
		},
		{
			text:'不乱花钱',
			img:'money_03',
			target:'财运旺',
			hier:3,
			level:3
		},
		{
			text:'一行两人三餐四季',
			img:'flower_01',
			target:'桃花旺',
			hier:4,
			level:1
		},
		{
			text:'陪我过生日李泽言',
			img:'flower_02',
			target:'桃花旺',
			hier:4,
			level:2
		},
		{
			text:'多吃不胖',
			img:'heart_01',
			target:'身体旺',
			hier:5,
			level:1
		},
		{
			text:'练出来人鱼马甲',
			img:'heart_02',
			target:'身体旺',
			hier:5,
			level:2
		},
		{
			text:'坚持健身',
			img:'heart_03',
			target:'身体旺',
			hier:5,
			level:3
		},
		{
			text:'不熬夜不加班',
			img:'life_01',
			target:'生活旺',
			hier:6,
			level:1
		},
		{
			text:'出门不堵车',
			img:'life_02',
			target:'生活旺',
			hier:6,
			level:2
		},
		{
			text:'背景下雪',
			img:'life_03',
			target:'生活旺',
			hier:6,
			level:3
		},
		{
			text:'吃鸡没有挂',
			img:'life_04',
			target:'生活旺',
			hier:6,
			level:4
		},
		{
			text:'吸猫吸狗养青蛙',
			img:'life_05',
			target:'生活旺',
			hier:6,
			level:5
		},
		{
			text:'不掉段王者荣耀',
			img:'life_06',
			target:'生活旺',
			hier:6,
			level:6
		},
		{
			text:'和去年一样',
			img:'life_07',
			target:'生活旺',
			hier:6,
			level:7
		},
		{
			text:'佛系生活',
			img:'life_08',
			target:'生活旺',
			hier:6,
			level:8
		},
		{
			text:'多陪家人少出差',
			img:'life_09',
			target:'生活旺',
			hier:6,
			level:9
		},
	];
	var Hierarchy = [
		{
			text:'学业旺',
			img:'study_bootom'
		},
		{
			text:'事业旺',
			img:'work_bootom'
		},
		{
			text:'财运旺',
			img:'money_bootom'
		},
		{
			text:'桃花旺',
			img:'flower_bootom'
		},
		{
			text:'身体旺',
			img:'heart_bootom'
		},
		{
			text:'生活旺',
			img:'life_bootom'
		}
	];
	if ($('.content').attr('data-url') === 'index') {
		// 首页
		// 随机排列数组
		var randomArr = [];
		var colneArr = textObj.slice(0);
		var length = textObj.length;
		for(var i=0; i<length; i++){
			var random = Math.floor(Math.random()*colneArr.length);
			randomArr.push(colneArr[random]);
			colneArr.splice(random, 1);
		}
		// 渲染dom
		for(var i=0; i < randomArr.length; i++){
			$('.swiper-wrapper').append('<div class="swiper-slide"><img src="'+imgUrl+randomArr[i].img+'.png" /></div>')
		}
		var mySwiper = new Swiper('.swiper-container',{
			direction: 'vertical',
			loop: true
		})
		$('.footer-click a').on('touchstart',function(){
			$.post('',{},function(date){
				// 传入选择的文字
			})
			$(this).attr('href','/' + '#id=' + randomArr[mySwiper.activeIndex-1].hier + '/' + randomArr[mySwiper.activeIndex-1].level)
		})
		$('.arrowBottom').click(function(){
			mySwiper.slideNext();
		})
	}
	// 生成图片
	var pictuFun = function() {
		var data_num = window.location.href.indexOf('#id=');
		var url_data = window.location.href.slice(data_num+4,data_num+7);
		var data_hier = parseInt(url_data.slice(0,1));
		var data_level = parseInt(url_data.slice(2,3));
		// 筛选当前文字
		$('.wang').text(Hierarchy[data_hier-1].text);
		$('.footerBack').attr('src',imgUrl + Hierarchy[data_hier-1].img +'.png');
		for(var i in textObj){
			if (textObj[i].hier === data_hier && textObj[i].level === data_level) {
				$('.pictureTxt .pictureImg').attr('src',imgUrl + textObj[i].img +'.png');
			}
		}
		// 生成图片页面
		var canvasSet = setTimeout(function(){
			var Img = document.getElementById('generate');
		    var canvas = document.querySelector("canvas");
		    canvas.height = $('body').height();
		    html2canvas(document.querySelector(".canvasBox"), {canvas: canvas}).then(function(canvas) {
		        Img.src = canvas.toDataURL("image/jpg");
		        $('.canvasBox').remove();
		    });
		    clearTimeout(canvasSet)
		},300)
	}
	// loading
	var loadNum = true;
	var loading = setInterval(function(){
		if (loadNum) {
			$('.loadingleft').hide();
			$('.loadingright').show();
			loadNum = !loadNum;
		} else {
			$('.loadingleft').show();
			$('.loadingright').hide();
			loadNum = !loadNum;
		}
	},300);
	$(window).load(function(){
		if ($('.canvasBox').attr('data-url') === 'picture') {
			pictuFun();
		}
		setInterval(loading);
		var loadOn = setTimeout(function(){
			clearTimeout(loadOn);
			$('.loading').hide().remove();
		},1000)
	})
})