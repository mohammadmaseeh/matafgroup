windowWidthIni = $(window).width();
if (windowWidthIni < 900){
	runOnce = true;
} else {
	runOnce = false;
}
	
if (windowWidthIni < 900){
	shortTitle = window.location.hash;
	shortText = jQuery.trim(shortTitle).substring(5).trim(this);
	$(".mb_"+shortText).fadeIn(500);
}



		
var myFunction = (function() {

	var settings = {},
		defaults = {
			startAt: 0,					// start experience at
			sectionCheckInterval: 1000,	// check section interval
			clampWidth: 1442,
			tracking: false
		},
		scrollAnimate,
		currentSection = -1,
		checkSectionLock = 0,
		updateCount = 0,
		loadProgress;
	
	//Animation viewport metrics
	var wHeight, wWidth, wCenter, outroComp, ratio;
	//Scrollbar related stuff
	var $scrollBar, $scrollThumb, isScrolling, scrollBarHeight, scrollThumbHeight, thumbDelta, scrollThumbPosition, scrollPercent;
	//Tooltip stuff
	var tooltipJustOpened = true;
	//Overlay
	var $overlay;
	var player;
	var lastActivity = (new Date()).getTime();
	var pulseReminders = 3;
	var pulseScrollTeaserRunning = false;


	maxScroll = 436;


	var animation = [

					
					{
	         			selector: '#verticalScrollArea',
	         			startAt: 0,
	         			endAt: 436,
	         			onEndAnimate:function( anim ) {
	         			},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						top: 0
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					ease: TWEEN.Easing.Linear.EaseNone,
	         					onInit: function( anim ) {
									this.properties['top'] = -(872) +  Math.max( ((wHeight-900)/2) , 0);

     							},
	         					properties: {
	         						//top: -4030
	         					}
	         				}
	         			]
	         		},
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				
					
					
					
					
					
					
					
					

					
					
					
					{
	         			selector: '.backtotop',
	         			startAt: 300,
	         			endAt: 400,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"right": -150
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"right": 30
	         					}
	         				}
	         			]
	         		},
					
					
					
					{
	         			selector: '.ft_links',
	         			startAt: 300,
	         			endAt: 400,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"marginTop": 170
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"marginTop": 70
	         					}
	         				}
	         			]
	         		},
					
					
					
					
					
					
					
					
					
					
					/*{
	         			selector: '.sc1backpic',
	         			startAt: 0,
	         			endAt: 450,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": 0
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 450
	         					}
	         				}
	         			]
	         		},*/
					
					
					
					
					
					{
	         			selector: '.sc2backpic',
	         			startAt: 0,
	         			endAt: 900,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -450
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 450
	         					}
	         				}
	         			]
	         		},
					
					
					{
	         			selector: '.sidepic2',
	         			startAt: 0,
	         			endAt: 900,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -300
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 300
	         					}
	         				}
	         			]
	         		},
					
					
					
					
					
					
					
					{
	         			selector: '.sc3backpic',
	         			startAt: 175,
	         			endAt: 1000,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -650
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 320
	         					}
	         				}
	         			]
	         		},
					
					
					
					
					
					{
	         			selector: '.sidepic3',
	         			startAt: 175,
	         			endAt: 1000,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -300
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 150
	         					}
	         				}
	         			]
	         		},
					
					
					
					
					{
	         			selector: '.sc4backpic',
	         			startAt: 450,
	         			endAt: 1275,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -650
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 320
	         					}
	         				}
	         			]
	         		},
					{
	         			selector: '.sidepic4',
	         			startAt: 450,
	         			endAt: 1275,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -300
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 150
	         					}
	         				}
	         			]
	         		},
					
					
					
					
					{
	         			selector: '.sc5backpic',
	         			startAt: 725,
	         			endAt: 1550,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -650
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 320
	         					}
	         				}
	         			]
	         		},
					{
	         			selector: '.sidepic5',
	         			startAt: 725,
	         			endAt: 1550,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -300
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 150
	         					}
	         				}
	         			]
	         		},
					
					
					
					{
	         			selector: '.sc6backpic',
	         			startAt: 1000,
	         			endAt: 1825,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -650
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 320
	         					}
	         				}
	         			]
	         		},
					{
	         			selector: '.sidepic6',
	         			startAt: 1000,
	         			endAt: 1825,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -300
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 150
	         					}
	         				}
	         			]
	         		},
					
					
					
					
					{
	         			selector: '.sc7backpic',
	         			startAt: 1275,
	         			endAt: 1825,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -650
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 0
	         					}
	         				}
	         			]
	         		},
					{
	         			selector: '.sidepic7',
	         			startAt: 1275,
	         			endAt: 1825,
	         			onEndAnimate:function( anim ) {},
	         			keyframes: [
	         				{ 
	         					position: 0,
	         					properties: {
	         						"margin-top": -300
	         					}
	         					
	         				},
	         				{
	         					position: 1,
	         					properties: {
	         						"margin-top": 0
	         					}
	         				}
	         			]
	         		},
					
					
					
					
					
					
					
					



    
	         		];


		$(".prlogo").click(function(){	scrollAnimate.scrollTo(0); 	});
		
		myVar_toppart = $(".content_toppart").html();
		myVar_home = $(".content_home").html();
		myVar_subpage = $(".content_subpage").html();
		
		myVar_homepage = $(".content_homepage").html();
		myVar_residential = $(".content_residential").html();
		myVar_commercial = $(".content_commercial").html();
		myVar_hospitality = $(".content_hospitality").html();
		myVar_townships = $(".content_townships").html();
		myVar_itparks = $(".content_itparks").html();
		myVar_completed = $(".content_completed").html();
		

		
		
		
		$('.content_toppart').html("");
		$('.content_home').html("");
		$('.content_subpage').html("");
		
		$('.content_homepage').html("");
		$('.content_residential').html("");
		$('.content_commercial').html("");
		$('.content_hospitality').html("");
		$('.content_townships').html("");
		$('.content_itparks').html("");
		$('.content_completed').html("");
		

		

	function initalizeNavigation() {

		navClicked = "";
		$("#butUp").mousedown(function(){
			scrollAnimate.autoScrollStop();
			scrollAnimate.autoScrollStart('up');
			$(this).addClass('butUp_roll');
			navClicked = "butUp";
    	}).mouseup(function(){
			scrollAnimate.autoScrollStop();
			$(this).removeClass('butUp_roll');
			navClicked = "";
	    });
		
		$("#butDown").mousedown(function(){
			scrollAnimate.autoScrollStop();
			scrollAnimate.autoScrollStart('down');
			$(this).addClass('butDown_roll');
			navClicked = "butDown";
    	}).mouseup(function(){
			scrollAnimate.autoScrollStop();
			$(this).removeClass('butDown_roll');
			navClicked = "";
	    });
		
		$(document).mouseup(function(){
			scrollAnimate.autoScrollStop();
			$("#butUp").removeClass('butUp_roll');
			$("#butDown").removeClass('butDown_roll');
    	});




	}

	// ---------------------------------------------
	// ScrollBar
	// ---------------------------------------------

	function activateScrollBar(thumbHeight) {
		scrollThumbHeight = thumbHeight+50;
		scrollThumbPosition = 0;
		scrollPercent = 0;
		isScrolling = false;
		$scrollBar = $('#scrollBar');
		$scrollBar.show();
		$scrollThumb = $('#scrollBar .thumb');
		$scrollThumb.css('height',scrollThumbHeight+"px");
		$scrollThumb.bind('mousedown', startScroll);
	}

	function resizeScrollBar() {
		scrollBarHeight = wHeight-29;
		$scrollBar.css('height',scrollBarHeight+"px");
		setScrollBarPosition(scrollPercent);
	}

	function startScroll(event) {
		isScrolling = true;
		thumbDelta = scrollThumbPosition - event.pageY;
		$(document).bind('mousemove', scrollUpdate);
		$(document).bind('mouseup', endScroll);
		return false;
		
	}

	function scrollUpdate(event) {

		scrollThumbPosition = event.pageY+thumbDelta;

		scrollThumbPosition = Math.max(0, Math.min(scrollBarHeight-scrollThumbHeight, scrollThumbPosition));

		scrollPercent = scrollThumbPosition/(scrollBarHeight-scrollThumbHeight);
		scrollPercent = Math.max(0, Math.min(1, scrollPercent));
		//Removed to improve drag scrolling
		//$scrollThumb.css('top',scrollThumbPosition);

		scrollAnimate.scrollTo( maxScroll*scrollPercent );
		return false;
	}

	function setScrollBarPosition(percent) {
		scrollThumbPosition = (scrollBarHeight-scrollThumbHeight)*percent;
		$scrollThumb.css('top',scrollThumbPosition);
	}

	function endScroll(event) {
		isScrolling = false;
		$(document).unbind('mousemove', scrollUpdate);
		$(document).unbind('mouseup', endScroll);
		return false;
	}
	




	function isTouch() {
		return 'ontouchstart' in window;
	}

	function track(a,b,c) {
		if (settings.tracking==true) {
		}
		//console.log("Track: "+(a?a:"-")+":"+(b?b:"-")+":"+(c?c:"-"));
	}




	var init = function( opts ) {
		settings = $.extend( defaults, opts );

		
	
	


		initalizeNavigation();
		
		if (!isTouch())
			activateScrollBar(37);
		
		//if (window.location.hash) {

			//Do something
		//};

		//Create scroll animator
		scrollAnimate = ScrollAnimator();
		scrollAnimate.init({
			//Animation data
			animation: animation,
			
			//Default Settings
			maxScroll: maxScroll,		// max scroll
			useRAF : false,				// set requestAnimationFrame
			tickSpeed: 30,				// set interval (ms) if not using RAF
			scrollSpeed: 30,
			debug: false,				// turn on debug
			tweenSpeed: 0.2,				// scrollTop tween speed
			startAt: settings.startAt,	// scrollTop where the experience starts
			container: $('#main'),		// main container
			touchcontrol: $('.touchcontrol'),		// main container
			//Callbacks
			onStart: function() {
				//Fixme this working?
				//scrollAnimate.scrollTo(scrollAnimate.getScrollTop()-3);
			},
			


			//There be dragons here, no touching...
			onResize: function(page) {
				//Nasty page tidy up stuff on resize
				
				
				
				
				wHeight = page.wHeight;
				windowWidth = $(window).width();
				windowHeight = $(window).height();
				
				if (windowWidth < 1800){
					$(".scback img").css({'marginLeft':-900});
					$(".scback img").css({'top':0});
				} else {
					$(".scback img").css({'marginLeft':'-50%'});
					$(".scback img").css({'top':-((windowWidth/2)-900)/2});
					//alert("AA");
				}
				
				if (windowWidth < 1260 && windowWidth > 900){
					$(".sidelinks").css({'left':-160});
					$(".navcont").show();
					menuOpen = false;
				}
				
				if (windowWidth > 1260){
					$(".sidelinks").css({'left':0});
					$(".navcont").hide();
				}
				
				
				if (windowWidth < 500){
					if (openSub){
						$(".mbsidelinks").stop(true, true).animate({'height':28*(sidelinksHeight+1)}, 1);
					} else {
						$(".mbsidelinks").stop(true, true).animate({'height':0}, 1);
					}
				} else {
					$(".mbsidelinks").css({'height':'auto'});
				}
				
				
				
				if (windowHeight > 900){
					$(".scbackfirst").css({'height':900});
				} else {
					$(".scbackfirst").css({'height':windowHeight-35});
				}
				$(".scbackfirst img").css({'height':'100%'});
				imgbackheight = $(".scbackfirst img").height();
				$(".scbackfirst img").css({'width':imgbackheight*2.2});
				imgbackwidth = $(".scbackfirst img").width();
				$(".scbackfirst img").css({'marginLeft':-(imgbackwidth/2)});
				
				
//				collapseAll();
				
//				alert(myVar_overview);
				if (windowWidth < 900){
					if (runOnce == true){
						runOnce = false;
						$(".sidelinks").hide();
						
						$('.toppart').html("");
						$('.home').html("");
						$('.subpage').html("");
						
						$('.homepage').html("");
						$('.residential').html("");
						$('.commercial').html("");
						$('.hospitality').html("");
						$('.townships').html("");
						$('.itparks').html("");
						$('.completed').html("");
						
						

				        $('.mb_toppart').html(myVar_toppart);
						$('.mb_home').html(myVar_home);
						$('.mb_subpage').html(myVar_subpage);
						
						$('.mb_homepage').html(myVar_homepage);
						$('.mb_residential').html(myVar_residential);
						$('.mb_commercial').html(myVar_commercial);
						$('.mb_hospitality').html(myVar_hospitality);
						$('.mb_townships').html(myVar_townships);
						$('.mb_itparks').html(myVar_itparks);
						$('.mb_completed').html(myVar_completed);
						
						
						shortTitle = window.location.hash;
						shortText = jQuery.trim(shortTitle).substring(5).trim(this);					
						urlHandler(shortText);
						
						$(".fptab").css({'background':'none', 'height':'auto', 'overflow':'visible'});
						
						//$(".sc1backpic img").attr("src","images/spacer.gif");
						//$(".sc2backpic img").attr("src","images/spacer.gif");
						//$(".sc3backpic img").attr("src","images/spacer.gif");
						//$(".sc4backpic img").attr("src","images/spacer.gif");
						//$(".sc5backpic img").attr("src","images/spacer.gif");
						//$(".sc6backpic img").attr("src","images/spacer.gif");
						//$(".sc7backpic img").attr("src","images/spacer.gif");
						//$(".sc8backpic img").attr("src","images/spacer.gif");

						
						$('#yourImageID').hide();
						
//						mgHandler();
						
						picGalleryHandler();
						
//						$(".showgal1").click(function(){
//							alert("AA");
//							addGallery(1);
//						});
	
					}
					$('.scroll-pane-home').destroy();

				} else {
					if (runOnce == false){
						runOnce = true;
						$(".sidelinks").show();
						
						$('.mb_toppart').html("");
						$('.mb_home').html("");
						$('.mb_subpage').html("");
						
						$('.mb_homepage').html("");
						$('.mb_residential').html("");
						$('.mb_commercial').html("");
						$('.mb_hospitality').html("");
						$('.mb_townships').html("");
						$('.mb_itparks').html("");
						$('.mb_completed').html("");
						
						
						$('.toppart').html(myVar_toppart);
						$('.home').html(myVar_home);
						$('.subpage').html(myVar_subpage);
						
						$('.homepage').html(myVar_homepage);
						$('.residential').html(myVar_residential);
						$('.commercial').html(myVar_commercial);
						$('.hospitality').html(myVar_hospitality);
						$('.townships').html(myVar_townships);
						$('.itparks').html(myVar_itparks);
						$('.completed').html(myVar_completed);
						
						
		
						shortTitle = window.location.hash;
						shortText = jQuery.trim(shortTitle).substring(5).trim(this);
						urlHandler(shortText);
						
						//$(".sc1backpic img").attr("src","images/screen_hp1.jpg");
						//$(".sc2backpic img").attr("src","images/screen_hp2.jpg");
						//$(".sc3backpic img").attr("src","images/screen_hp3.jpg");
						//$(".sc4backpic img").attr("src","images/screen_hp4.jpg");
						//$(".sc5backpic img").attr("src","images/screen_hp5.jpg");
						//$(".sc6backpic img").attr("src","images/screen_hp6.jpg");
						//$(".sc7backpic img").attr("src","images/screen_hp7.jpg");
						//$(".sc8backpic img").attr("src","images/screen_hp4.jpg");
						
						$('#yourImageID').smoothZoom({
							width: '100%',
							height: '100%',
							button_SIZE: 24,
							button_ALIGN: "bottom center",	
							zoom_MAX: 100,
							responsive: true,
							container: 'site_container'
						});
						
						mgHandler();
						
						picGalleryHandler();
						
						$(".hpbanner").stop(true, true).delay(3000).animate({'left':-440}, 500, function(){
							$(".hpbannerbut").addClass("hpbannerbut_tog");
							openBanner = false;
						});
						
						$('.hpbanner').hover(function(){
							$(".hpbanner").stop(true, true).animate({'left':0}, 500, function(){
								$(".hpbannerbut").removeClass("hpbannerbut_tog");
								openBanner = true;
							});
						}, function(){
							$(".hpbanner").stop(true, true).delay(3000).animate({'left':-440}, 500, function(){
								$(".hpbannerbut").addClass("hpbannerbut_tog");
								openBanner = false;
							});
						});
		
					}
					$('.scroll-pane-home').css({'height':windowHeight-260});
					
				}
				
				$('.scroll-pane-home').jScrollPane({autoReinitialise: true});
				
				
				
				
				
				var imageWidth = 1800;
				var imageHeight = 1000;
				var navWidth = $(window).width();
				var navHeight = $(window).height();
				var navRatio = navWidth / navHeight;
				imageRatio = imageWidth / imageHeight;
				if (navRatio > imageRatio) {
					var newHeight = (navWidth / imageWidth) * imageHeight;
					var newWidth = navWidth;
				} else {
					var newHeight = navHeight;
					var newWidth = (navHeight / imageHeight) * imageWidth;
				}	
				newTop = 0 - ((newHeight - navHeight) / 2);
				newLeft =  0 - ((newWidth - navWidth) / 2);
				$('.hpSubBg img').css({height: newHeight, width: newWidth, top: newTop, left: newLeft});
	
	
	
				
				
//$f("player", "flowplayer.swf", "my-video.flv");
				flowplayer("a.myPlayer", {src: '/video/flowplayer-3.2.12.swf', wmode: 'transparent'}, {

				plugins: {
					controls: null
				},
				
				
			    clip: {
					autoPlay: true,
			        onStart: function() {
						$('#mcTrans').delay(1000).fadeOut(2000);
			        },
			        onBeforeFinish: function() {
//						$('#mcTrans').fadeIn(2000, function(){
//							setInterval(function(){
//								window.location = 'home.asp#/?p=home';
//							},5000);
//						});
//					    this.getPlugin('play').hide();
						return false;
						
			        }

			    }
 

	
				
				});
				
				
				if ($scrollBar) 
					resizeScrollBar();


				
			},

			onUpdate: function(scrollTop) {
				if ($scrollBar) 
					setScrollBarPosition(scrollTop/maxScroll);
			}
			
			
			
			
			
			
			
		});

		
	

	
	
	
	
	
		//Keyboard Controls
		$(window).keydown(function(e) {
			if (e.keyCode == 40 || e.keyCode == 39) {
				var currentScroll = scrollAnimate.getScrollTop();
				var targetScroll = currentScroll + 25;
				if (targetScroll > scrollAnimate.getMaxScroll()+ratio) {
					targetScroll = currentScroll;
				}
				scrollAnimate.scrollTo(targetScroll);
				
			}
			if (e.keyCode == 38 || e.keyCode == 37) {
				var currentScroll = scrollAnimate.getScrollTop();
				var targetScroll = currentScroll - 25;
				if (targetScroll < 0) {
					targetScroll = 0;
				}
				scrollAnimate.scrollTo(targetScroll);
			}
        	
		});
		// section checks
		setInterval( checkSection, settings.sectionCheckInterval );

		return scrollAnimate;
		
	}
	
	
	
	
	
	
	
	
	
	
	$('.hpboxes a, .mbsidelinks a, .backtotop a, .logo_home a, .ft_links a').live('click', function(){
		$.address.value('/');
		$.address.parameter('a', $(this).attr('rel').replace(/^#/, ''), true);
		$.address.update();
		return false;
	});
	
	
	
	
	
	

	function navDetail(prmSec){
		//alert(prmSec)
		if (prmSec == "main"){
			scrollAnimate.scrollTo(0);
			//openSubPage("subPageRes",'ftlk1')
		} else if (prmSec == "residential"){
			scrollAnimate.scrollTo(450 - topBarHeight + 1);
			openSubPage("subPageRes",'ftlk1')
		} else if (prmSec == "commercial"){
			scrollAnimate.scrollTo(450 - topBarHeight + 1);
			openSubPage("subPageCom",'ftlk2')
		} else if (prmSec == "townships"){
			scrollAnimate.scrollTo(450 - topBarHeight + 1);
			openSubPage("subPageTown",'ftlk3')
		} else if (prmSec == "hospitality"){
			scrollAnimate.scrollTo(450 - topBarHeight + 1);
			openSubPage("subPageHosp",'ftlk4')
		} else if (prmSec == "itparks"){
			scrollAnimate.scrollTo(450 - topBarHeight + 1);
			openSubPage("subPageIt",'ftlk5')
		} else if (prmSec == "completed"){
			scrollAnimate.scrollTo(450 - topBarHeight + 1);
			openSubPage("subPageCompleted",'ftlk6')
		} else {
			openSubPage("subPageRes",'ftlk1')
		}
	}
	
	function urlHandler(prmRel){
		if ($(window).width() < 900){
			openMobilePage("mb_"+prmRel);
			$(".mbsidelinks a").removeClass('slstatic');
			$('.mbsidelinks a[rel="'+prmRel+'"]').addClass('slstatic');
		} else {
			navDetail(prmRel);
		}
		$(".gallery a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
	}
	
	$.address.autoUpdate(false).change(function(event) {
		params = event.parameters['a'];
		if (params == undefined){
			params = "home";
		}
		urlHandler(params);
	});
	
	
	
	
	
	
	
	
	function removeAllLogos(prmCondition){
		if (prmCondition == "res"){
			$(".res_gurgaon").hide();
			$(".res_noida").hide();
			$(".res_meerut").hide();
			$(".res_bangalore").hide();
			$(".res_greaternoida").hide();
			$(".res_noidaextn").hide();
			$(".res_yamuna").hide();
			$(".res_ghaziabad").hide();
			$(".res_moradapur").hide();
			$(".res_dehradun").hide();
			$(".res_rudrapur").hide();
			$(".sub_res a").removeClass("sub_links_static");
		} else if (prmCondition == "com"){
			$(".com_noida").hide();
			$(".com_greater_noida").hide();
			$(".com_meerut").hide();
			$(".com_gurgaon").hide();
			$(".com_haridwar").hide();
			$(".com_rudrapur").hide();
			$(".com_dehradun").hide();
			$(".sub_com a").removeClass("sub_links_static");
		} else if (prmCondition == "town"){
			$(".town_noida").hide();
			$(".town_greaternoida").hide();
			$(".town_meerut").hide();
			$(".town_rudrapur").hide();
			$(".sub_town a").removeClass("sub_links_static");
		} else if (prmCondition == "hos"){
			$(".hos_haridwar").hide();
			$(".hos_meerut").hide();
			$(".hos_rudrapur").hide();
			$(".hos_noida").hide();
			$(".sub_hos a").removeClass("sub_links_static");
		} else if (prmCondition == "it"){
			$(".it_greaternoida").hide();
			$(".sub_it a").removeClass("sub_links_static");
		} else if (prmCondition == "comp"){
			$(".comp_res_noida").hide();
			$(".comp_res_noidaextn").hide();
			$(".comp_res_ghaziabad").hide();
			$(".comp_res_meerut").hide();
			$(".comp_com_ghaziabad").hide();
			$(".comp_com_noida").hide();
			$(".comp_greater_noida").hide();
			$(".comp_com_gurgaon").hide();
			$(".sub_comp a").removeClass("sub_links_static");
		}
		
		
	}
	
	
	
	
	
	function showLogos(myPrm){
		$(myPrm).addClass("sub_links_static");
		myAtt = $(myPrm).attr("rel");
		$("."+myAtt).stop(true).fadeIn(500);
		totalPro = $("."+myAtt + " a").length;
		$("."+myAtt + " a .hp_sub_logo_div").css({'width':'1%', 'marginLeft':74, 'marginTop':53})
		$("."+myAtt + " a .hp_sub_logo_div").each(function( index ) {
			$(this).stop(true).delay(index*100).animate({'width':'100%', 'marginLeft':0, 'marginTop':0}, 500, 'easeOutExpo');
		});
	}
	
	$(".res_noida").show();
	$(".com_noida").show();	
	$(".town_noida").show();
	$(".hos_haridwar").show();
	$(".it_greaternoida").show();
	$(".comp_res_noida").show();
	$(".firstlink").addClass("sub_links_static");
	
	$(".sub_res a").live('click', function(){
		removeAllLogos("res");
		showLogos(this);
	});

	
	$(".sub_com a").live('click', function(){
		removeAllLogos("com");
		showLogos(this);
	});
	
	$(".sub_town a").live('click', function(){
		removeAllLogos("town");
		showLogos(this);
	});
	
	$(".sub_hos a").live('click', function(){
		removeAllLogos("hos");
		showLogos(this);
	});
	
	$(".sub_it a").live('click', function(){
		removeAllLogos("it");
		showLogos(this);
	});
	
	$(".sub_comp a").live('click', function(){
		removeAllLogos("comp");
		showLogos(this);
	});
	
	
	
	
	
	
	
	openBanner = true;
	$(".hpbannerbut").live('click', function(){
		if (openBanner){
			$(".hpbanner").stop(true).animate({'left':-440}, 500);
			$(this).addClass("hpbannerbut_tog");
			openBanner = false;
		} else {
			$(".hpbanner").stop(true).animate({'left':0}, 500);
			$(this).removeClass("hpbannerbut_tog");
			openBanner = true;
		}
	});
	
	
	
	
	bnCounter = 1;
	totalBanner =6;
	
	$(".btnBanNext").live('click', function(){
		bnCounter++;
		if (bnCounter > totalBanner){
			$(".hpbannerslider").stop(true, true).css({'marginLeft':0});
			bnCounter = 1;
		}
		$(".hpbannerslider").stop(true).animate({'marginLeft':-(bnCounter*454)}, 500, 'easeOutExpo');
	});
	
	$(".btnBanPre").live('click', function(){
		bnCounter--;
		if (bnCounter < 1){
			$(".hpbannerslider").css({'marginLeft':(-(totalBanner+1)*454)});
			bnCounter = totalBanner;
		}
		$(".hpbannerslider").stop(true).animate({'marginLeft':-(bnCounter*454)}, 500, 'easeOutExpo');
	});
	
	
	
	
	function openSubPage(prm1,prm2){
		
		hideAllSubPage();
			
		$("#"+prm1).fadeIn(500);
		$("."+prm2).addClass("ft_links_static");
		
		
		//alert(prm1);
		
		if (prm1 == "subPageRes"){
			removeAllLogos("res");
			showLogos('.sub_res .firstlink');
		} else if (prm1 == "subPageCom"){
			removeAllLogos("com");
			showLogos('.sub_com .firstlink');
		} else if (prm1 == "subPageTown"){
			removeAllLogos("town");
			showLogos('.sub_town .firstlink');
		} else if (prm1 == "subPageHosp"){
			removeAllLogos("hos");
			showLogos('.sub_hos .firstlink');
		} else if (prm1 == "subPageIt"){
			removeAllLogos("it");
			showLogos('.sub_it .firstlink');
		} else if (prm1 == "subPageCompleted"){
			removeAllLogos("comp");
			showLogos('.sub_comp .firstlink');
		}
		
		
		//showLogos(this);
	
	
	
	}
	
	
	function hideAllSubPage(){
		
		$("#subPageRes").hide();
		$("#subPageCom").hide();
		$("#subPageTown").hide();
		$("#subPageHosp").hide();
		$("#subPageIt").hide();
		$("#subPageCompleted").hide();
		$(".ftlk1").removeClass("ft_links_static");
		$(".ftlk2").removeClass("ft_links_static");
		$(".ftlk3").removeClass("ft_links_static");
		$(".ftlk4").removeClass("ft_links_static");
		$(".ftlk5").removeClass("ft_links_static");
		$(".ftlk6").removeClass("ft_links_static");
		$(".ftlk7").removeClass("ft_links_static");
	}
	
	hideAllSubPage();
	

	return {
		init: init,
		scrollAnimate: scrollAnimate
	}
	
})();


$(document).ready( function() {
	window.siteAnimator = myFunction.init();
});

$(document).bind('touchmove', function(e) {
	if (windowWidth > 900){
		e.preventDefault();
	}
});