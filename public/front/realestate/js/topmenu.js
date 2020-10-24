$(document).ready(function(){

		$('.scroll-pane-menu').jScrollPane({autoReinitialise: true});
	
		function showMenu(prmBut,prmMenu,prmHeight){
			$(prmBut).hover(function(){
				//$(prmMenu).stop(true, true).fadeIn(500);
				$(prmMenu).show().css({'height':0});
				$(prmMenu).stop(true, true).animate({'height':prmHeight}, 500, 'easeOutExpo');
				$(this).addClass("active");
				//$(".scroll").niceScroll().resize();
				//alert("AA");
				if (prmMenu == "#m2"){
					resetSubMenu(420);
					$('.menuContRes').stop(true, true).fadeIn(500);
					$('.menuRes').addClass("hdrlinksactive");
				}
			}, function(){
				//$(prmMenu).stop(true,true).delay(100).fadeOut();
				$(prmMenu).stop(true).animate({'height':0}, 500, 'easeOutExpo');
				$(this).removeClass("active");
			});
			$(prmMenu).hover(function(){
				//$(this).stop(true,true).show();
				$(this).stop(true).animate({'height':prmHeight}, 500, 'easeOutExpo');
				$(prmBut).addClass("active");
			}, function(){
				//$(this).hide();
				$(this).stop(true).animate({'height':0}, 500, 'easeOutExpo');
				$(prmBut).removeClass("active");
			});
		}
		showMenu(".hdl1","#m1",290);
		showMenu(".hdl2","#m2",420);
		showMenu(".hdl3","#m3",220);
		showMenu(".hdl4","#m4",60);
		showMenu(".hdl5","#m5",120);
		showMenu(".hdl6","#m6",90);
		showMenu(".hdl7","#m7",160);
		showMenu(".hdl8","#m8",120);
			
			
			
		$("#browser").treeview({
			collapsed: true
	//		animated:"normal",
	//		persist: "cookie"
		});
		
		$('.btnmenu').click(function() {
			$('#mobilemenu, .mobileback').show();
			$('#mobilemenu').stop(true, true).animate({'left':0}, 500, 'easeOutExpo');
		});
		 
		$('.mobilemenuclose').click(function() {
			$('#mobilemenu').stop(true, true).animate({'left':-275}, 500, 'easeOutExpo', function(){
				$('#mobilemenu, .mobileback').hide();
			});
		});
		
		
		
		
		function resetSubMenu(prmHeight){
			$(".menuContRes").hide();
			$(".menuContCom").hide();
			$(".menuContTown").hide();
			$(".menuContVillas").hide();
			$(".menuContHosp").hide();
			$(".menuContIt").hide();
			$(".menuContComp").hide();
			$(".menuRes").removeClass("hdrlinksactive");
			$(".menuCom").removeClass("hdrlinksactive");
			$(".menuTown").removeClass("hdrlinksactive");
			$(".menuVillas").removeClass("hdrlinksactive");
			$(".menuHosp").removeClass("hdrlinksactive");
			$(".menuIt").removeClass("hdrlinksactive");
			$(".menuComp").removeClass("hdrlinksactive");
			$("#m2").stop(true).animate({'height':prmHeight}, 500, 'easeOutExpo');
		}
		
		resetSubMenu();
		$('.menuRes').hover(function() {
			resetSubMenu(420);
			$('.menuContRes').stop(true, true).fadeIn(500);
			$(this).addClass("hdrlinksactive");
		}, function(){		
		});
		
		
		$('.menuCom').hover(function() {
			resetSubMenu(380);
			$('.menuContCom').stop(true, true).fadeIn(500);
			$(this).addClass("hdrlinksactive");
		}, function(){		
		});
		
		
		$('.menuTown').hover(function() {
			resetSubMenu(280);
			$('.menuContTown').stop(true, true).fadeIn(500);
			$(this).addClass("hdrlinksactive");
		}, function(){		
		});
		
		$('.menuVillas').hover(function() {
			resetSubMenu(280);
			$('.menuContVillas').stop(true, true).fadeIn(500);
			$(this).addClass("hdrlinksactive");
		}, function(){		
		});
		
		
		$('.menuHosp').hover(function() {
			resetSubMenu(280);
			$('.menuContHosp').stop(true, true).fadeIn(500);
			$(this).addClass("hdrlinksactive");
		}, function(){		
		});
		
		
		$('.menuIt').hover(function() {
			resetSubMenu(280);
			$('.menuContIt').stop(true, true).fadeIn(500);
			$(this).addClass("hdrlinksactive");
		}, function(){		
		});
		
		
		$('.menuComp').hover(function() {
			resetSubMenu(420);
			$('.menuContComp').stop(true, true).fadeIn(500);
			$(this).addClass("hdrlinksactive");
		}, function(){		
		});
		
		


	$(".ftlProject").hover(function(){
		$(".ftlpopdiv").stop(true, true).fadeIn(500);
		$(this).addClass("ftlProject_active");
	}, function(){
		$(".ftlpopdiv").stop(true,true).delay(100).fadeOut();
		$(this).removeClass("ftlProject_active");
	});
	
	$(".ftlpopdiv").hover(function(){
		$(this).stop(true,true).show();
		$(".ftlProject").addClass("ftlProject_active");
	}, function(){
		$(this).hide();
		$(".ftlProject").removeClass("ftlProject_active");
	});
			

	
	function hideftdiv(){
		$(".divApartments").hide();
		$(".divFlats").hide();
		$(".divLuxury").hide();
		$(".divProperties").hide();
		$(".divTownships").hide();
		$(".divVillas").hide();
		$(".divReal").hide();
		$(".divDev").hide();
		$(".divBuilders").hide();
		$(".ftlcat a").removeClass("ftactive");
	}
	
	hideftdiv();
	$(".divApartments").show();
	$(".ftlcat a").first().addClass("ftactive");
	
	$(".ftlcat a").live('click', function(){
		hideftdiv();
		ftRel = $(this).attr("rel");
		$("."+ftRel).fadeIn();
		$(this).addClass("ftactive");
	});
	
	
	
	
	
	searchOpen = false;
	$("#openSearch1, #searchClose1").live('click', function(){
		myWindowWidth = $(window).width();
		if (searchOpen){
			searchOpen = false;
			$(".footer").stop(true).animate({'bottom':-170}, 500, 'easeOutExpo');
		} else {
			searchOpen = true;
			if (myWindowWidth > 670 && myWindowWidth < 980){
				targFooterTop = 64;
			} else if (myWindowWidth > 0 && myWindowWidth < 670){
				targFooterTop = 174;
			} else {
				targFooterTop = 32;
			}
			$(".footer").stop(true).animate({'bottom':targFooterTop}, 500, 'easeOutExpo');
		}
	});
	
	$("#openSearch2, #searchClose2").live('click', function(){
		myWindowWidth = $(window).width();
		if (searchOpen){
			searchOpen = false;
			$(".footer_inner").stop(true).animate({'bottom':-184}, 500, 'easeOutExpo');
		} else {
			searchOpen = true;
			if (myWindowWidth > 670 && myWindowWidth < 980){
				targFooterTop = 40;
			} else if (myWindowWidth > 0 && myWindowWidth < 670){
				targFooterTop = 160;
			} else {
				targFooterTop = 18;
			}
			$(".footer_inner").stop(true).animate({'bottom':targFooterTop}, 500, 'easeOutExpo');
		}
	});


	myWindowWidth = $(window).width();

	
});