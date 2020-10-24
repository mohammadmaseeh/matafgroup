fdname = "images/";


function picGalleryHandler(){
		
	function firstShowThisImage(prmIndex){
		for (i=1;i<=(prmIndex-1);i++){
			imgArr.push(imgArr.shift());
			showCaption.push(showCaption.shift());
		}
		addGallery(fdname, imgArr, showCaption, maxCount);
	}
	
	function picGalleryContent(prmID){
		
		if (prmID == 1){
			maxCount = 1;
			imgArr = ["zoomFullScreen.jpg"];
			showCaption = ["Site Plan"];
			
			
		} else if (prmID == 2){
			maxCount = 11;
			imgArr = ["fp_big1.jpg", "fp_big2.jpg", "fp_big3.jpg", "fp_big4.jpg", "fp_big5.jpg", "fp_big6.jpg", "fp_big7.jpg", "fp_big1.jpg", "fp_big2.jpg", "fp_big3.jpg", "fp_big4.jpg"];
			showCaption = ["1","2","3","4","5","6","7","8","9","10","11"];
			
		} else if (prmID == 3){
			maxCount = 33;
			imgArr = [];
			showCaption = [];
			for(i=0;i<=(maxCount-1);i++){
				imgArr[i] = "34pav-imgbig" + (i+1) + ".jpg";
				showCaption[i] = "";
			}


			
		} else if (prmID == 4){
			maxCount = 11;
			imgArr = [];
			showCaption = [];
			for(i=0;i<=(maxCount-1);i++){
				imgArr[i] = "pavilion-june-13-big" + (i+1) + ".jpg";
				showCaption[i] = "";
			}
			
					
		}
	}
	
	$(".gal_site").click(function(){		picGalleryContent(1);		firstShowThisImage(1);	});
	$(".gal_fp1").click(function(){			picGalleryContent(2);		firstShowThisImage(1);	});
	$(".gal_fp2").click(function(){			picGalleryContent(2);		firstShowThisImage(2);	});
	$(".gal_fp3").click(function(){			picGalleryContent(2);		firstShowThisImage(3);	});
	$(".gal_fp4").click(function(){			picGalleryContent(2);		firstShowThisImage(4);	});
	$(".gal_fp5").click(function(){			picGalleryContent(2);		firstShowThisImage(5);	});
	$(".gal_fp6").click(function(){			picGalleryContent(2);		firstShowThisImage(6);	});
	$(".gal_fp7").click(function(){			picGalleryContent(2);		firstShowThisImage(7);	});
	$(".gal_fp8").click(function(){			picGalleryContent(2);		firstShowThisImage(8);	});
	$(".gal_fp9").click(function(){			picGalleryContent(2);		firstShowThisImage(9);	});
	$(".gal_fp10").click(function(){		picGalleryContent(2);		firstShowThisImage(10);	});
	$(".gal_fp11").click(function(){		picGalleryContent(2);		firstShowThisImage(11);	});
	$(".gal_mg1").click(function(){			picGalleryContent(3);		firstShowThisImage(1);	});
	$(".gal_mg2").click(function(){			picGalleryContent(4);		firstShowThisImage(1);	});
		
}


		
		
		
	function mgHandler(){
		
		varInitials = "34pav-imgbig";
		varInitialsTh = "34pav-imgth";
		mgCounter = 1;
		varTotalImages = 33;
		arrCap = new Array("AA","BB","CC","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","JJ");

		
		generateGallery();
		
		function generateGallery(prmVirtual){
			varVirtual = false;
			$(".ig").html( "" );
			
			arrImgGallery = new Array();
			
			for (i=1;i<=varTotalImages;i++){
				arrImgGallery[i] = varInitials+i;
				if (i == 6 || i == 12 || i == 18 || i == 24 || i == 30 || i == 36 || i == 42){
					$(".ig").append( "<li class='norightmargin'><a href='javascript:;' rel='" +i+ "' class='myth" +i+ "' ><div><img src='" + fdname + varInitialsTh + i + ".jpg' /></div><div class='mgRoll'></div></a></li>" );
				} else {
					$(".ig").append( "<li><a href='javascript:;' rel='" +i+ "' class='myth" +i+ "' ><div><img src='" + fdname + varInitialsTh + i + ".jpg' /></div><div class='mgRoll'></div></a></li>" );
				}
			}
			$(".ig").append( "<div class='clear'></div>" );
			
//			alert(arrImgGallery[30]);
			
			$(".ig a").hover(function(){
				$(this).find(".mgRoll").stop(true).animate({'top':0}, 500);
			}, function(){
				myRel = parseInt($(this).attr("rel"));
				if (mgCounter != myRel){
					$(this).find(".mgRoll").stop(true).animate({'top':-30}, 500);
				}
			});
		
		
			$(".ig a").click(function(){
				myRel = parseInt($(this).attr("rel"));
				if (prmVirtual == 'virtual'){
					mgLoadVirtual(myRel);
				} else {
					mgLoadImage(myRel);
				}	
			});
			
			if (prmVirtual == 'virtual'){
				mgLoadVirtual(mgCounter);
				varVirtual = true;
			} else {
				mgLoadImage(mgCounter);
			}
			
			$(".arr_mg_next").show();
			$(".arr_mg_pre").show();
			
			if (varTotalImages == 1){
				$(".arr_mg_next").hide();
				$(".arr_mg_pre").hide();
			}
		
		}
		

		$(".arr_mg_next").click(function(){
			mgCounter++;
			if (mgCounter > varTotalImages){
				mgCounter = 1;
			}
			if (varVirtual){
				mgLoadVirtual(mgCounter)
			} else {
				mgLoadImage(mgCounter);
			}
		});
		
		$(".arr_mg_pre").click(function(){
			mgCounter--;
			if (mgCounter < 1){
				mgCounter = varTotalImages;
			}
			if (varVirtual){
				mgLoadVirtual(mgCounter)
			} else {
				mgLoadImage(mgCounter);
			}
		});
		
		
		
		function mgLoadImage(prmImage){
			$("#mgIframe").attr("src","");
			$("#mgIframe").hide();
			$("#mgLoader").fadeIn(500);
			$("#mgContainerFront").html("<img src='" + fdname + arrImgGallery[prmImage]+".jpg" + "' width='910' height='540' style='display:none;' class='mgPic'/>");
			$( "#mgContainerFront .mgPic" ).load(function() {
				$("#mgCapBox").html(arrCap[prmImage-1]);
				$("#mgLoader").stop(true).fadeOut(500);
				$(this).fadeIn(500, function(){
					$("#mgContainer").html("<img src='" + fdname + arrImgGallery[prmImage]+".jpg" + "' width='910' height='540'/>");
				});
			});
			
			for (i=1;i<=varTotalImages;i++){
				$(".myth" + i).find(".mgRoll").stop(true).animate({'top':-30}, 500);
			}
			
			$(".myth" + prmImage).find(".mgRoll").stop(true).animate({'top':0}, 500);
			
			mgCounter = prmImage;
		}
		
		
		
		function mgLoadVirtual(prmVirtual){
			$("#mgLoader").fadeIn(500);

			$("#mgIframe").attr("src",arrImgGallery[prmVirtual]+"/index.html");
			$( "#mgIframe" ).load(function() {
				$("#mgCapBox").html(arrCap[prmVirtual-1]);
				$("#mgLoader").stop(true).fadeOut(500);
				$("#mgIframe").show();
			});
			
			for (i=1;i<=varTotalImages;i++){
				$(".myth" + i).find(".mgRoll").stop(true).animate({'top':-30}, 500);
			}
			
			$(".myth" + prmVirtual).find(".mgRoll").stop(true).animate({'top':0}, 500);
			
			mgCounter = prmVirtual;
		}
		

		function mgActiveClass(prmClass){
			$(".mg_tabs a").removeClass("mg_tabs_highlight");
			$(prmClass).addClass("mg_tabs_highlight");
		}

		mgActiveClass(".mg_tab1");

		$(".mg_tab1").click(function(){
			mgActiveClass(this);
			varInitials = "34pav-imgbig";
			varInitialsTh = "34pav-imgth";
			mgCounter = 1;
			varTotalImages = 33;
			arrCap = new Array("AA","BB","CC","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","JJ");
			generateGallery();
		});
		
		$(".mg_tab2").click(function(){
			mgActiveClass(this);
			varInitials = "pavilion-june-13-big";
			varInitialsTh = "pavilion-june-13-th";
			mgCounter = 1;
			varTotalImages = 11;
			arrCap = new Array("2AA","2BB","2CC","","","","","","","","2JJ");
			generateGallery();
		});
		
		$(".mg_tab3").click(function(){
			mgActiveClass(this);
			varInitials = "virtual-tour/vt";
			varInitialsTh = "34pav-vt";
			mgCounter = 1;
			varTotalImages = 2;
			arrCap = new Array("VT","");
			generateGallery('virtual');
		});	
		
		$(".mg_tab4").click(function(){
			mgActiveClass(this);
			varInitials = "virtual-tour/bro";
			varInitialsTh = "34pav-vt";
			mgCounter = 1;
			varTotalImages = 1;
			arrCap = new Array("");
			generateGallery('virtual');
		});	
	}
		
		
		
		
		
		
scTop = 0;

function highlighting(){
	
	$('.sidelinks a').removeClass('slstatic');
	
	if (scTop >= 400 && scTop < 850){
		$('.sidelinks .sl1').addClass('slstatic');
	} else if(scTop >= 850 && scTop < 1300){
		$('.sidelinks .sl2').addClass('slstatic');
	} else if(scTop >= 1300 && scTop < 1750){
		$('.sidelinks .sl3').addClass('slstatic');
	} else if(scTop >= 1750 && scTop < 2088){
		$('.sidelinks .sl4').addClass('slstatic');
	} else if(scTop >= 2088 && scTop < 2537){
		$('.sidelinks .sl5').addClass('slstatic');
	} else if(scTop >= 2537 && scTop < 2987){
		$('.sidelinks .sl6').addClass('slstatic');
	} else if(scTop >= 2987 && scTop < 3437){
		$('.sidelinks .sl7').addClass('slstatic');
	} else if(scTop >= 3437 && scTop < 3887){
		$('.sidelinks .sl8').addClass('slstatic');
	} else if(scTop >= 3887 && scTop < 4562){
		$('.sidelinks .sl9').addClass('slstatic');
	} else if(scTop >= 4562){
		$('.sidelinks .sl10').addClass('slstatic');
	}
								
}