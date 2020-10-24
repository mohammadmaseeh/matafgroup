fdname = "../../images/northeye/";
picGalleryHandler();

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
			imgArr = ["siteplan.jpg"];
			showCaption = ["Site Plan"];
			
			 
		} else if (prmID == 2){
			maxCount = 26;
			imgArr = ["fp-a-bg1.jpg", "fp-a-bg2.jpg", "fp-a-bg3.jpg", "fp-a-bg4.jpg", "fp-a-bg5.jpg", "fp-a-bg6.jpg", "fp-a-bg7.jpg", "fp-a-bg8.jpg", "fp-b-bg1.jpg", "fp-b-bg2.jpg", "fp-b-bg3.jpg", "fp-c-bg1.jpg", "fp-c-bg2.jpg", "fp-c-bg3.jpg","fp-d-bg1.jpg", "fp-d-bg2.jpg", "fp-d-bg3.jpg", "fp-d-bg4.jpg", "fp-d-bg5.jpg","fp-d-bg6.jpg", "fp-d-bg7.jpg", "fp-d-bg8.jpg", "fp-d-bg9.jpg", "fp-d-bg10.jpg", "fp-d-big11.jpg", "fp-c-bg4.jpg"];
			showCaption = ["A","B", "C","D","E","A","B", "C","A","B", "C","3-34 A","3-34 B", "35 - 45 B","35-45 A","35-45 C", "47-64 A","47-64 B","47-64 C", "47-64 D", "47-64 E","","","", "Lower ground floor","Lower ground floor"];
					
		} else if (prmID == 3){
			maxCount = 30;
			imgArr = [];
			showCaption = [];
			for(i=0;i<=(maxCount-1);i++){
				imgArr[i] = "img-big" + (i+1) + ".jpg";
			}
			showCaption = ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""];


			
		} else if (prmID == 4){
			maxCount = 7;
			imgArr = [];
			showCaption = [];
			for(i=0;i<=(maxCount-1);i++){
				imgArr[i] = "pp-big" + (i+1) + ".jpg";
			}
			showCaption = ["", "", "", "", "", "", ""];
			
					
		}
	}
	
	$(".gal_site").live('click', function(){		picGalleryContent(1);		firstShowThisImage(1);	});
	
	$(".gal_fp1").live('click', function(){			picGalleryContent(2);		firstShowThisImage(1);	});
	$(".gal_fp2").live('click', function(){			picGalleryContent(2);		firstShowThisImage(2);	});
	$(".gal_fp3").live('click', function(){			picGalleryContent(2);		firstShowThisImage(3);	});
	$(".gal_fp4").live('click', function(){			picGalleryContent(2);		firstShowThisImage(4);	});
	$(".gal_fp5").live('click', function(){			picGalleryContent(2);		firstShowThisImage(5);	});
	$(".gal_fp6").live('click', function(){			picGalleryContent(2);		firstShowThisImage(6);	});
	$(".gal_fp7").live('click', function(){			picGalleryContent(2);		firstShowThisImage(7);	});
	$(".gal_fp8").live('click', function(){			picGalleryContent(2);		firstShowThisImage(8);	});
	$(".gal_fp9").live('click', function(){			picGalleryContent(2);		firstShowThisImage(9);	});
	$(".gal_fp10").live('click', function(){		picGalleryContent(2);		firstShowThisImage(10);	});
	$(".gal_fp11").live('click', function(){		picGalleryContent(2);		firstShowThisImage(11);	});
	$(".gal_fp12").live('click', function(){		picGalleryContent(2);		firstShowThisImage(12);	});
	$(".gal_fp13").live('click', function(){		picGalleryContent(2);		firstShowThisImage(13);	});
	$(".gal_fp14").live('click', function(){		picGalleryContent(2);		firstShowThisImage(14);	});
	$(".gal_fp15").live('click', function(){		picGalleryContent(2);		firstShowThisImage(15);	});
	$(".gal_fp16").live('click', function(){		picGalleryContent(2);		firstShowThisImage(16);	});
	$(".gal_fp17").live('click', function(){		picGalleryContent(2);		firstShowThisImage(17);	});
	$(".gal_fp18").live('click', function(){		picGalleryContent(2);		firstShowThisImage(18);	});
	$(".gal_fp19").live('click', function(){		picGalleryContent(2);		firstShowThisImage(19);	});
	$(".gal_fp20").live('click', function(){		picGalleryContent(2);		firstShowThisImage(20);	});
	$(".gal_fp21").live('click', function(){		picGalleryContent(2);		firstShowThisImage(21);	});
	$(".gal_fp22").live('click', function(){		picGalleryContent(2);		firstShowThisImage(22);	});
	$(".gal_fp23").live('click', function(){		picGalleryContent(2);		firstShowThisImage(23);	});
	$(".gal_fp24").live('click', function(){		picGalleryContent(2);		firstShowThisImage(24);	});
	$(".gal_fp25").live('click', function(){		picGalleryContent(2);		firstShowThisImage(25);	});
	$(".gal_fp26").live('click', function(){		picGalleryContent(2);		firstShowThisImage(26);	});
	
	$(".gal_mg1").live('click', function(){			picGalleryContent(3);		firstShowThisImage(1);	});
	$(".gal_mg2").live('click', function(){			picGalleryContent(4);		firstShowThisImage(1);	});
	
	
	
	
	galleryID = 3;
	$(".mgPic").live('click', function(){
		myRelBig = parseInt($(this).attr("rel"));
		picGalleryContent(galleryID);
		firstShowThisImage(myRelBig);
	});
	
	galleryID = 4;
	$(".mgPic").live('click', function(){
		myRelBig = parseInt($(this).attr("rel"));
		picGalleryContent(galleryID);
		firstShowThisImage(myRelBig);
	});
	

		
}


		
		
		
	function mgHandler(){
		
		varInitials = "pp-big";
		varInitialsTh = "pp-th";
		mgCounter = 1;
		varTotalImages = 7;
		arrCap = new Array("", "", "", "", "", "", "");
		
		generateGallery();
		
		function generateGallery(prmVirtual){
			varVirtual = false;
			$(".ig").html( "" );
			
			$("#site_container").hide();
			
			arrImgGallery = new Array();
			
			for (i=1;i<=varTotalImages;i++){
				arrImgGallery[i] = varInitials+i;
				if (arrCap[i-1] == ""){
					capText = arrCap[i-1];
				} else {
					capText = "<div class='captextpad'>"+arrCap[i-1]+"</div>";
				}
				if (i == 6 || i == 12 || i == 18 || i == 24 || i == 30 || i == 36 || i == 42 || i == 48 || i == 54){
					$(".ig").append( "<li class='norightmargin'><a href='javascript:;' rel='" +i+ "' class='myth" +i+ "' ><div><img class='capleft' src='" + fdname + varInitialsTh + i + ".jpg' /></div><div class='mgRoll'></div><div class='mgCap'>" + capText + "</div></a></li><div class='clear'></div>" );
				} else {
					$(".ig").append( "<li><a href='javascript:;' rel='" +i+ "' class='myth" +i+ "' ><div><img class='capleft' src='" + fdname + varInitialsTh + i + ".jpg' /></div><div class='mgRoll'></div><div class='mgCap'>" + capText + "</div></a></li>" );
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
			
			$("#site_container").hide();
			
				myRel = parseInt($(this).attr("rel"));
				$.address.value('/');
				$.address.parameter('a', 'image', true);
				$.address.update();
				if (prmVirtual == 'virtual'){
					mgLoadVirtual(myRel);
					if (myRel == 1){
						if (varTheta == true){
							
							$("#site_container").show();
						}
					}
				} else {
					mgLoadImage(myRel);
				}	
			});
			
			if (prmVirtual == 'virtual'){
				mgLoadVirtual(mgCounter);
				varVirtual = true;
				if (mgCounter == 1){
					if (varTheta == true){
						$("#site_container").show();
					}
				}
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
		$("#site_container").hide();
			mgCounter++;
			if (mgCounter > varTotalImages){
				mgCounter = 1;
			}
			if (varVirtual){
				mgLoadVirtual(mgCounter);
				if (mgCounter == 1){
					if (varTheta == true){
						$("#site_container").show();
					}
				}
			} else {
				mgLoadImage(mgCounter);
			}
		});
		
		$(".arr_mg_pre").click(function(){
		$("#site_container").hide();		
			mgCounter--;
			if (mgCounter < 1){
				mgCounter = varTotalImages;
			}
			if (varVirtual){
				mgLoadVirtual(mgCounter);
				if (mgCounter == 1){
					if (varTheta == true){
						$("#site_container").show();
					}
				}
			} else {
				mgLoadImage(mgCounter);
			}
		});
		
		
		
		function mgLoadImage(prmImage){
			//$("#mgIframe").attr("src","");
			$("#mgIframe").hide();
			$("#mgLoader").fadeIn(500);
			$("#mgContainerFront").html("<img src='" + fdname + arrImgGallery[prmImage]+".jpg" + "' rel='" + prmImage+ "' style='display:none;' class='mgPic'/>");
			$( "#mgContainerFront .mgPic" ).load(function() {
				$("#mgCapBox").html(arrCap[prmImage-1]);
				$("#mgLoader").stop(true).fadeOut(500);
				$(this).fadeIn(500, function(){
					$("#mgContainer").html("<img src='" + fdname + arrImgGallery[prmImage]+".jpg" + "' />");
				});
			});
			
			for (i=1;i<=varTotalImages;i++){
				$(".myth" + i).find(".mgRoll").stop(true).animate({'top':-30}, 500);
			}
			
			$(".myth" + prmImage).find(".mgRoll").stop(true).animate({'top':0}, 500);
			
			$(".ig li").removeClass("li_static");
			$(".myth" + prmImage).parent("li").addClass("li_static");
			
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
			
			$(".ig li").removeClass("li_static");
			$(".myth" + prmVirtual).parent("li").addClass("li_static");
			
			mgCounter = prmVirtual;
		}
		

		function mgActiveClass(prmClass){
			$(".mg_tabs a").removeClass("mg_tabs_highlight");
			$(prmClass).addClass("mg_tabs_highlight");
		}

		mgActiveClass(".mg_tab2");
		
		
		$(".mg_tab1").click(function(){
			galleryID = 3;
			mgActiveClass(this);
			varInitials = "img-big";
			varInitialsTh = "img-th";
			mgCounter = 1;
			varTotalImages = 29;
			arrCap = new Array("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
			varTheta = false;
			generateGallery();
			hideAllDD();
		});
		

	
		$(".mg_tab2").click(function(){
			galleryID = 4;
			mgActiveClass(this);
			varInitials = "pp-big";
			varInitialsTh = "pp-th";
			mgCounter = 1;
			varTotalImages = 7;
			arrCap = new Array("", "", "", "", "", "", "");
			varTheta = false;
			generateGallery();
			hideAllDD();
		});
		
		
		$(".mg_tab3").click(function(){
			mgActiveClass(this);
			varInitials = "media/bro";
			varInitialsTh = "broth";
			mgCounter = 1;	
			varTotalImages = 1;
			arrCap = new Array("<a href='/pdf/northeye-brochure.pdf' target='_blank'>Download E-Brochure in PDF Format</a>");
			varTheta = false;
			generateGallery('virtual');
			/*alert(varInitials)*/
			hideAllDD();
		});	
		
		$(".mg_tab4").click(function(){
			mgActiveClass(this);
			varInitials = "media/sky";
			varInitialsTh = "sky-view";
			mgCounter = 1;
			varTotalImages = 2;
			arrCap = new Array("Sky View 1", "Sky View 2");
			varTheta = false;
			generateGallery('virtual');
			
			hideAllDD();
		});	
		$(".mg_tab5").click(function(){
			mgActiveClass(this);
			varInitials = "media/theta";
			varInitialsTh = "vt-th";
			mgCounter = 1;
			varTotalImages = 2;
			arrCap = new Array("Street View Map","Street View 1");
			varTheta = true;
			generateGallery('virtual');
			
			hideAllDD();
			
		});
		
		$(".mg_tab6").click(function(){
			mgActiveClass(this);
			varInitials = "media/vt";
			varInitialsTh = "wt-th";
			mgCounter = 1;
			varTotalImages = 1;
			arrCap = new Array("");
			varTheta = false;
			generateGallery('virtual');
			
			hideAllDD();
		});	
		
	}
		
		
		
		
		
secArray = new Array("main","overview","features","image","location","site","floor","specifications","price","payment","progress");