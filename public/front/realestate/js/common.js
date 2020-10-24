isIE1 = /MSIE 9/i.test(navigator.userAgent);
isIE2 = /MSIE 10/i.test(navigator.userAgent);
isIE3 = /rv:11.0/i.test(navigator.userAgent);



//alert(isIE1 + " : " + isIE2 + " : " + isIE3);




var deviceAgent = navigator.userAgent.toLowerCase();

var isTouchDevice = Modernizr.touch ||
    (deviceAgent.match(/(iphone|ipod|ipad)/) ||
        deviceAgent.match(/(android)/) ||
        deviceAgent.match(/(iemobile)/) ||
        deviceAgent.match(/iphone/i) ||
        deviceAgent.match(/ipad/i) ||
        deviceAgent.match(/ipod/i) ||
        deviceAgent.match(/blackberry/i) ||
        deviceAgent.match(/bada/i));

if (isTouchDevice) {
    $("#scrollBar").hide();
    $("#scrollBut").hide();
    $(".touchcontrol").show();
} else {
    //Can't touch this
}


$(document).ready(function() {
    $(".agree-popup").click(function() {
        $(".popup-overlay").slideUp("slow");
    });
});




function mobileBg() {

    if (window.orientation == -90) {
        //alert(window.orientation);
        $(".mbbg img").css({
            'height': 'auto',
            'width': '100%'
        })
    } else {
        $(".mbbg img").css({
            'height': '100%',
            'width': 'auto'
        })
    }
    mbbgWidth = $(".mbbg img").width();
    $(".mbbg img").css({
        'marginLeft': -(mbbgWidth / 2)
    });
    $(".mbbg img").show();
}

$(".mbbg img").load(function() {
    mobileBg();
})

$(window).on("orientationchange", function() {
    mobileBg();
});

$(window).load(function() {
    mobileBg();
});

$(window).resize(function() {
    mobileBg();
});

mobileBg();





openSub = false;
$(".smallnav").click(function() {
    sidelinksHeight = $(".mbsidelinks a").length;
    //			alert(sidelinksHeight);
    if (openSub) {
        openSub = false;
        $(".mbsidelinks").stop(true, true).animate({
            'height': 0
        }, 500, function() {
            $(".smallnav").css({
                '-webkit-border-radius': '6px',
                '-moz-border-radius': '6px',
                'border-radius': '6px'
            });
        });
    } else {
        openSub = true;
        $(".smallnav").css({
            '-webkit-border-radius': '6px 6px 0px 0px',
            '-moz-border-radius': '6px 6px 0px 0px',
            'border-radius': '6px 6px 0px 0px'
        });
        $(".mbsidelinks").stop(true, true).animate({
            'height': 28 * (sidelinksHeight + 1)
        }, 500);
    }
});



function openMobilePage(prmPageName) {
    $(".ctcontent").hide();
    $("." + prmPageName).fadeIn(500);

    if (windowWidth < 500) {
        openSub = false;
        $(".mbsidelinks").stop(true, true).animate({
            'height': 0
        }, 300);
        $(".smallnav").css({
            '-webkit-border-radius': '6px',
            '-moz-border-radius': '6px',
            'border-radius': '6px'
        });
    }
}


menuOpen = false;
$(".navcont").click(function() {
    if (menuOpen) {
        menuOpen = false;
        $(".sidelinks").stop(true, true).animate({
            'left': -160
        }, 500, 'easeOutExpo');
    } else {
        menuOpen = true;
        $(".sidelinks").stop(true, true).animate({
            'left': 0
        }, 500, 'easeOutExpo');
    }
});


function minimizeAll() {
    $(".fptab").stop(true).animate({
        'height': 43
    }, 500, 'easeOutExpo');
    if (windowWidth > 900) {
        $(".fptab").css({
            'backgroundColor': '#ffffff'
        });
    } else {
        $(".fptab").css({
            'backgroundColor': '#e2e2e2'
        });
    }
    $(".fptab").css({
        'backgroundImage': 'url(/svg/plus.png)'
    });
    $(".fptab").stop(true).animate({
        'height': 43
    }, 500, 'easeOutExpo');
    $(".fptab .fptx1").css({
        'color': '#000000'
    });
    $(".fptab .fptx2").stop(true, true).fadeIn(500);
}



$(".fptabtxt").live('click', function() {
    if (windowWidth > 900) {
        minimizeAll();
        getTabHeight = $(this).parent().height();
        //				alert(getTabHeight);
        if (getTabHeight < 50) {
            $(this).parent().css({
                'backgroundColor': '#e45825'
            });
            $(this).parent().css({
                'backgroundImage': 'url(/svg/minus.png)'
            });
            $(this).parent().stop(true).animate({
                'height': 480
            }, 500, 'easeOutExpo');
            $(this).find(".fptx1").css({
                'color': '#ffffff'
            });
            $(this).find(".fptx2").stop(true, true).fadeOut(500);
        }
    }
});


$(".firstFp").parent().css({
    'backgroundColor': '#e45825',
    'backgroundImage': 'url(/svg/minus.png)',
    'height': 480
});
$(".firstFp").find(".fptx1").css({
    'color': '#ffffff'
});
$(".firstFp").find(".fptx2").hide();






$(".fptabtxt_fluid").live('click', function() {
    if (windowWidth > 900) {
        minimizeAll();
        getTabHeight = $(this).parent().height();
        getContentHeight = ($(this).parent().find('.awesome').height()) + 80;
        //alert(getContentHeight);
        if (getTabHeight < 50) {
            $(this).parent().css({
                'backgroundColor': '#e45825'
            });
            $(this).parent().css({
                'backgroundImage': 'url(/svg/minus.png)'
            });
            $(this).parent().stop(true).animate({
                'height': getContentHeight
            }, 500, 'easeOutExpo');
            $(this).find(".fptx1").css({
                'color': '#ffffff'
            });
            $(this).find(".fptx2").stop(true, true).fadeOut(500);
        }
    }
});




function fpHideAll() {
    for (i = 1; i <= 10; i++) {
        $(".fpset" + i).hide();
        $(".fpsub" + i).removeClass("astatic");
    }
}

function fpShowSet(prmID) {
    fpHideAll();
    $(".fpset" + prmID).show();
    $(".fpsub" + prmID).addClass("astatic");
}

$(".fpsub1").live('click', function() {
    fpShowSet(1);
});
$(".fpsub2").live('click', function() {
    fpShowSet(2);
});
$(".fpsub3").live('click', function() {
    fpShowSet(3);
});
$(".fpsub4").live('click', function() {
    fpShowSet(4);
});
$(".fpsub5").live('click', function() {
    fpShowSet(5);
});
$(".fpsub6").live('click', function() {
    fpShowSet(6);
});
$(".fpsub7").live('click', function() {
    fpShowSet(7);
});
$(".fpsub8").live('click', function() {
    fpShowSet(8);
});
$(".fpsub9").live('click', function() {
    fpShowSet(9);
});
$(".fpsub10").live('click', function() {
    fpShowSet(10);
});



function plHideAll() {
    for (i = 1; i <= 10; i++) {
        $(".plset" + i).hide();
        $(".plsub" + i).removeClass("astatic");
    }
}


function plShowSet(prmID) {
    plHideAll();
    $(".plset" + prmID).show();
    $(".plsub" + prmID).addClass("astatic");
}

$(".plsub1").live('click', function() {
    plShowSet(1);
});
$(".plsub2").live('click', function() {
    plShowSet(2);
});
$(".plsub3").live('click', function() {
    plShowSet(3);
});
$(".plsub4").live('click', function() {
    plShowSet(4);
});
$(".plsub5").live('click', function() {
    plShowSet(5);
});
$(".plsub6").live('click', function() {
    plShowSet(6);
});
$(".plsub7").live('click', function() {
    plShowSet(7);
});
$(".plsub8").live('click', function() {
    plShowSet(8);
});
$(".plsub9").live('click', function() {
    plShowSet(9);
});
$(".plsub10").live('click', function() {
    plShowSet(10);
});




function ppHideAll() {
    for (i = 1; i <= 10; i++) {
        $(".ppset" + i).hide();
        $(".ppsub" + i).removeClass("astatic");
    }
}


function ppShowSet(prmID) {
    ppHideAll();
    $(".ppset" + prmID).show();
    $(".ppsub" + prmID).addClass("astatic");
}

$(".ppsub1").live('click', function() {
    ppShowSet(1);
});
$(".ppsub2").live('click', function() {
    ppShowSet(2);
});
$(".ppsub3").live('click', function() {
    ppShowSet(3);
});
$(".ppsub4").live('click', function() {
    ppShowSet(4);
});
$(".ppsub5").live('click', function() {
    ppShowSet(5);
});
$(".ppsub6").live('click', function() {
    ppShowSet(6);
});
$(".ppsub7").live('click', function() {
    ppShowSet(7);
});
$(".ppsub8").live('click', function() {
    ppShowSet(8);
});
$(".ppsub9").live('click', function() {
    ppShowSet(9);
});
$(".ppsub10").live('click', function() {
    ppShowSet(10);
});



function spHideAll() {
    for (i = 1; i <= 10; i++) {
        $(".spset" + i).hide();
        $(".spsub" + i).removeClass("astatic");
    }
}


function spShowSet(prmID) {
    spHideAll();
    $(".spset" + prmID).show();
    $(".spsub" + prmID).addClass("astatic");
}

$(".spsub1").live('click', function() {
    spShowSet(1);
});
$(".spsub2").live('click', function() {
    spShowSet(2);
});
$(".spsub3").live('click', function() {
    spShowSet(3);
});
$(".spsub4").live('click', function() {
    spShowSet(4);
});
$(".spsub5").live('click', function() {
    spShowSet(5);
});
$(".spsub6").live('click', function() {
    spShowSet(6);
});
$(".spsub7").live('click', function() {
    spShowSet(7);
});
$(".spsub8").live('click', function() {
    spShowSet(8);
});
$(".spsub9").live('click', function() {
    spShowSet(9);
});
$(".spsub10").live('click', function() {
    spShowSet(10);
});


function psHideAll() {
    for (i = 1; i <= 10; i++) {
        $(".psset" + i).hide();
        $(".pssub" + i).removeClass("astatic");
    }
}


function psShowSet(prmID) {
    psHideAll();
    $(".psset" + prmID).show();
    $(".pssub" + prmID).addClass("astatic");
}

$(".pssub1").live('click', function() {
    psShowSet(1);
});
$(".pssub2").live('click', function() {
    psShowSet(2);
});
$(".pssub3").live('click', function() {
    psShowSet(3);
});
$(".pssub4").live('click', function() {
    psShowSet(4);
});
$(".pssub5").live('click', function() {
    psShowSet(5);
});
$(".pssub6").live('click', function() {
    psShowSet(6);
});
$(".pssub7").live('click', function() {
    psShowSet(7);
});
$(".pssub8").live('click', function() {
    psShowSet(8);
});
$(".pssub9").live('click', function() {
    psShowSet(9);
});
$(".pssub10").live('click', function() {
    psShowSet(10);
});












galleryCtr = 0;
galleryDivs = [];

function addGallery(fdname, imgArr, showCaption, maxCount) {

    galleryDiv = $("<div id='sc" + galleryCtr + "' class='row-fluid divPad' ><div class='span6 offset3' style='border:1px solid #666; padding:5px'><div class='ratioHolder'><div id='g" + galleryCtr + "' class='sliderHolder'><div class='slider' data-elem='slider'><div class='sliderBg lightGrayBg'></div><div class='slides' data-elem='slides' data-options='preloaderUrl:assets/preloader.gif; loop:true;' ></div><div class='captionHolder' data-elem='captionHolder'><div class='caption blackBgAlpha60' data-elem='caption' data-options='initShow:" + showCaption + "; setHolderHeight:true;' data-show='top:0%; display:block; autoAlpha:1;' data-hide='top:-60px; display:none; autoAlpha:0; ease:Power4.easeIn'> </div></div><div class='controlHolder'><div class='autoPlayIcon controlPos1' data-elem='autoPlay' data-on='background-position:-25px 0px;' data-off='background-position:0px 0px;'> </div><div class='prevIcon controlPos2' data-elem='prev' data-on='autoAlpha:1; cursor: pointer;' data-off='autoAlpha:0.5; cursor:default'> </div><div class='nextIcon controlPos3' data-elem='next' data-on='autoAlpha:1; cursor: pointer;' data-off='autoAlpha:0.5; cursor:default'> </div><div class='zoomOutIcon controlPos4' data-elem='zoomOut' data-on='autoAlpha:1; cursor: pointer;' data-off='autoAlpha:0.5; cursor:default'> </div><div class='zoomInIcon controlPos5' data-elem='zoomIn' data-on='autoAlpha:1; cursor: pointer;' data-off='autoAlpha:0.5; cursor:default'> </div><div class='captionOnIcon controlPos6' data-elem='captionToggle' data-on='background-position:-150px 0px;' data-off='background-position:-175px 0px;'></div><div class='closeIcon controlPos7' id='removeGallery" + galleryCtr + "' data-elem='close'></div></div><ul id='ul" + galleryCtr + "' data-elem='items'></ul></div></div></div></div></div>");

    $("#galleryContainer").append(galleryDiv);

    //		imgArr = Utils.shuffleArray(imgArr);

    //		maxCount = (maxCount > 6) ? 6 : maxCount;
    for (var i = 0; i < maxCount; i++) {
        //add images to ul
        $("#ul" + galleryCtr).append("<li><a href='" + fdname + imgArr[i] + "'></a><div data-elem='imgCaption'><div class='superCaption'>" + showCaption[i] + "</div></div></li>");
    }

    $("#removeGallery" + galleryCtr).hammer().on("tap", {
        ctr: galleryCtr
    }, removeGallery);

    // add created div
    galleryDivs.push(galleryDiv);

    //process the created div and convert it to an image gallery
    TouchNSwipe.init();

    galleryCtr++;
}

function removeGallery(e) {
    var ctr = e.data.ctr;
    TouchNSwipe.remove("g" + ctr);
    $("#sc" + ctr).remove();
}

function removeAll() {
    TouchNSwipe.removeAll();

    for (var i = 0; i < galleryDivs.length; i++) {
        galleryDivs[i].remove();
    }
}














locDisable = true;
$(".enabledisable").html("Click Here to Enable Map");

$(".enabledisable").live('click', function() {
    if (locDisable) {
        locDisable = false;
        $(".locdisableback").hide();
        $(this).addClass("enabledisable_enable");
        $(this).html("Click Here to Disable Map");
    } else {
        locDisable = true;
        $(".locdisableback").show();
        $(this).removeClass("enabledisable_enable");
        $(this).html("Click Here to Enable Map");
    }
});






enqOpen = false;
$(".but_enquiry, .enqBoxClos").live('click', function() {
    if (enqOpen) {
        enqOpen = false;
        $(".enqBox").stop(true).animate({
            'right': -480
        }, 500, 'easeOutExpo');
    } else {
        enqOpen = true;
        $(".enqBox").stop(true).animate({
            'right': 0
        }, 500, 'easeOutExpo');
    }
});



$(".ig .fs").live('click', function() {
    relAttr = parseInt($(this).attr("rel"));
    vtRel = arrImgGallery[relAttr] + "/index.html";
    $(".ig li").removeClass("li_static");
    $(".myth" + relAttr).parent("li").addClass("li_static");
    $(".vtPopup").stop(true).fadeIn(500, function() {

        $("#vtFrame").attr("src", vtRel);
    });
});


$(".mark a").live('click', function() {
    vtPath = $(".landmarks").attr("data-folder");
    vtRel = $(this).attr("rel");
    $(".vtPopup").stop(true).fadeIn(500, function() {

        $("#vtFrame").attr("src", vtPath + vtRel);
    });
});


$(".vtBg, .vtClose").live('click', function() {
    $("#vtFrame").attr("src", "");
    $(".vtPopup").stop(true).fadeOut(500);
});








$('.miscboxescontainer a').live('click', function() {
    $.address.value('/');
    $.address.parameter('a', $(this).attr('rel').replace(/^#/, ''), true);
    $.address.update();
    return false;
});









scTop = 0;

currScreen = 0;

function highlighting() {

    $('.sidelinks a').removeClass('slstatic');

    if (scTop < varScPos1 - 50) {
        currScreen = 0;
    } else if (scTop >= varScPos1 - 50 && scTop < varScPos2 - 50) {
        $('.sidelinks .sl1').addClass('slstatic');
        currScreen = 1;
    } else if (scTop >= varScPos2 - 50 && scTop < varScPos3 - 50) {
        $('.sidelinks .sl2').addClass('slstatic');
        currScreen = 2;
    } else if (scTop >= varScPos3 - 50 && scTop < varScPos4 - 50) {
        $('.sidelinks .sl3').addClass('slstatic');
        currScreen = 3;
    } else if (scTop >= varScPos4 - 50 && scTop < varScPos5 - 50) {
        $('.sidelinks .sl4').addClass('slstatic');
        currScreen = 4;
    } else if (scTop >= varScPos5 - 50 && scTop < varScPos6 - 50) {
        $('.sidelinks .sl5').addClass('slstatic');
        currScreen = 5;
    } else if (scTop >= varScPos6 - 50 && scTop < varScPos7 - 50) {
        $('.sidelinks .sl6').addClass('slstatic');
        currScreen = 6;
    } else if (scTop >= varScPos7 - 50 && scTop < varScPos8 - 50) {
        $('.sidelinks .sl7').addClass('slstatic');
        currScreen = 7;
    } else if (scTop >= varScPos8 - 50 && scTop < varScPos9 - 50) {
        $('.sidelinks .sl8').addClass('slstatic');
        currScreen = 8;
    } else if (scTop >= varScPos9 - 50 && scTop < varScPos10 - 50) {
        $('.sidelinks .sl9').addClass('slstatic');
        currScreen = 9;
    } else if (scTop >= varScPos10 - 50) {
        $('.sidelinks .sl10').addClass('slstatic');
        currScreen = 10;
    }
}