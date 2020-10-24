varScPos1 = 450;
varScPos2 = 915;
varScPos3 = 1350;
varScPos4 = 1810;
varScPos5 = 2260;
varScPos6 = 2700;
varScPos7 = 3250;
varScPos8 = 3700;
varScPos9 = 4150;
varScPos10 = 4600;

varScPos11 = 10000;
varScPos12 = 10000;
varScPos13 = 10000;
varScPos14 = 10000;
varScPos15 = 10000;


totalPageHeight = 4600 - topBarHeight;

windowWidthIni = $(window).width();
if (windowWidthIni < 900) {
    runOnce = true;
} else {
    runOnce = false;
}

if (windowWidthIni < 900) {
    shortTitle = window.location.hash;
    shortText = jQuery.trim(shortTitle).substring(5).trim(this);
    $(".mb_" + shortText).fadeIn(500);
}




var myFunction = (function() {

    var settings = {},
        defaults = {
            startAt: 0, // start experience at
            sectionCheckInterval: 1000, // check section interval
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


    maxScroll = totalPageHeight;


    var animation = [


        {
            selector: '#verticalScrollArea',
            startAt: 0,
            endAt: totalPageHeight,
            onEndAnimate: function(anim) {},
            keyframes: [{
                    position: 0,
                    properties: {
                        top: 0
                    }

                },
                {
                    position: 1,
                    ease: TWEEN.Easing.Linear.EaseNone,
                    onInit: function(anim) {
                        this.properties['top'] = -(totalPageHeight * 2) + Math.max(((wHeight - 900) / 2), 0);

                    },
                    properties: {
                        //top: -4030
                    }
                }
            ]
        },








        {
            selector: '.but_up, .but_down',
            startAt: 350,
            endAt: 400,
            onEndAnimate: function(anim) {},
            keyframes: [{
                    position: 0,
                    properties: {
                        "right": -50
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
            selector: '.but_top',
            startAt: 350,
            endAt: 400,
            onEndAnimate: function(anim) {},
            keyframes: [{
                    position: 0,
                    properties: {
                        "left": -160
                    }

                },
                {
                    position: 1,
                    properties: {
                        "left": 10
                    }
                }
            ]
        },


        {
            selector: '.but_down',
            startAt: totalPageHeight - 450,
            endAt: totalPageHeight - 350,
            onEndAnimate: function(anim) {},
            keyframes: [{
                    position: 0,
                    properties: {
                        "right": 30
                    }

                },
                {
                    position: 1,
                    properties: {
                        "right": -50
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















    ];


    //$(".prlogo").click(function(){	scrollAnimate.scrollTo(0); 	});

    myVar_toppart = $(".content_toppart").html();
    myVar_overview = $(".content_overview").html();
    myVar_features = $(".content_features").html();
    myVar_image = $(".content_image").html();
    myVar_location = $(".content_location").html();
    myVar_site = $(".content_site").html();
    myVar_floor = $(".content_floor").html();
    myVar_specifications = $(".content_specifications").html();
    myVar_price = $(".content_price").html();
    myVar_payment = $(".content_payment").html();
    myVar_progress = $(".content_progress").html();
    myVar_enquiry = $(".content_enquiry").html();

    $('.content_toppart').html("");
    $('.content_overview').html("");
    $('.content_features').html("");
    $('.content_image').html("");
    $('.content_location').html("");
    $('.content_site').html("");
    $('.content_floor').html("");
    $('.content_specifications').html("");
    $('.content_price').html("");
    $('.content_payment').html("");
    $('.content_progress').html("");
    $('.content_enquiry').html("");


    function initalizeNavigation() {

        navClicked = "";
        $("#butUp").mousedown(function() {
            scrollAnimate.autoScrollStop();
            scrollAnimate.autoScrollStart('up');
            $(this).addClass('butUp_roll');
            navClicked = "butUp";
        }).mouseup(function() {
            scrollAnimate.autoScrollStop();
            $(this).removeClass('butUp_roll');
            navClicked = "";
        });

        $("#butDown").mousedown(function() {
            scrollAnimate.autoScrollStop();
            scrollAnimate.autoScrollStart('down');
            $(this).addClass('butDown_roll');
            navClicked = "butDown";
        }).mouseup(function() {
            scrollAnimate.autoScrollStop();
            $(this).removeClass('butDown_roll');
            navClicked = "";
        });

        $(document).mouseup(function() {
            scrollAnimate.autoScrollStop();
            $("#butUp").removeClass('butUp_roll');
            $("#butDown").removeClass('butDown_roll');
        });




    }

    // ---------------------------------------------
    // ScrollBar
    // ---------------------------------------------

    function activateScrollBar(thumbHeight) {
        scrollThumbHeight = thumbHeight + 50;
        scrollThumbPosition = 0;
        scrollPercent = 0;
        isScrolling = false;
        $scrollBar = $('#scrollBar');
        $scrollBar.show();
        $scrollThumb = $('#scrollBar .thumb');
        $scrollThumb.css('height', scrollThumbHeight + "px");
        $scrollThumb.bind('mousedown', startScroll);
    }

    function resizeScrollBar() {
        scrollBarHeight = wHeight - 29;
        $scrollBar.css('height', scrollBarHeight + "px");
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

        scrollThumbPosition = event.pageY + thumbDelta;

        scrollThumbPosition = Math.max(0, Math.min(scrollBarHeight - scrollThumbHeight, scrollThumbPosition));

        scrollPercent = scrollThumbPosition / (scrollBarHeight - scrollThumbHeight);
        scrollPercent = Math.max(0, Math.min(1, scrollPercent));
        //Removed to improve drag scrolling
        //$scrollThumb.css('top',scrollThumbPosition);

        scrollAnimate.scrollTo(maxScroll * scrollPercent);
        return false;
    }

    function setScrollBarPosition(percent) {
        scrollThumbPosition = (scrollBarHeight - scrollThumbHeight) * percent;
        $scrollThumb.css('top', scrollThumbPosition);
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

    function track(a, b, c) {
        if (settings.tracking == true) {}
        //console.log("Track: "+(a?a:"-")+":"+(b?b:"-")+":"+(c?c:"-"));
    }




    var init = function(opts) {
        settings = $.extend(defaults, opts);


        $('.sidelinks a, .mbsidelinks a, .but_top').click(function() {
            $.address.value('/');
            $.address.parameter('a', $(this).attr('rel').replace(/^#/, ''), true);
            $.address.update();
            return false;
        });


        function navDetail(prmSec) {
            if (prmSec == "main") {
                scrollAnimate.scrollTo(0);
            } else if (prmSec == "overview") {
                scrollAnimate.scrollTo(varScPos1 - topBarHeight + 1);
            } else if (prmSec == "features") {
                scrollAnimate.scrollTo(varScPos2 - topBarHeight + 1);
            } else if (prmSec == "image") {
                scrollAnimate.scrollTo(varScPos3 - topBarHeight + 1);
            } else if (prmSec == "location") {
                scrollAnimate.scrollTo(varScPos4 - topBarHeight + 1);
            } else if (prmSec == "site") {
                scrollAnimate.scrollTo(varScPos5 - topBarHeight + 1);
            } else if (prmSec == "floor") {
                scrollAnimate.scrollTo(varScPos6 - topBarHeight + 1);
            } else if (prmSec == "specifications") {
                scrollAnimate.scrollTo(varScPos7 - topBarHeight + 1);
            } else if (prmSec == "price") {
                scrollAnimate.scrollTo(varScPos8 - topBarHeight + 1);
            } else if (prmSec == "payment") {
                scrollAnimate.scrollTo(varScPos9 - topBarHeight + 1);
            } else if (prmSec == "progress") {
                scrollAnimate.scrollTo(varScPos10 - topBarHeight + 1);
            }

        }

        function urlHandler(prmRel) {
            if ($(window).width() < 900) {
                openMobilePage("mb_" + prmRel);
                $(".mbsidelinks a").removeClass('slstatic');
                $('.mbsidelinks a[rel="' + prmRel + '"]').addClass('slstatic');
            } else {
                navDetail(prmRel);
            }
            $(".gallery a[rel^='prettyPhoto']").prettyPhoto({
                animation_speed: 'normal',
                theme: 'light_square',
                slideshow: 3000,
                autoplay_slideshow: false
            });
        }

        $.address.autoUpdate(false).change(function(event) {
            params = event.parameters['a'];
            urlHandler(params);
        });


        $('.but_up').click(function() {
            if (currScreen != 0) {
                $.address.value('/');
                $.address.parameter('a', secArray[currScreen - 1], true);
                $.address.update();
                return false;
            }
        });


        $('.but_down').click(function() {
            if (currScreen != 11) {
                $.address.value('/');
                $.address.parameter('a', secArray[currScreen + 1], true);
                $.address.update();
                return false;
            }
        });

        $('.scrolldown').click(function() {
            $.address.value('/');
            $.address.parameter('a', 'overview', true);
            $.address.update();
            return false;
        });



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
            maxScroll: maxScroll, // max scroll
            useRAF: false, // set requestAnimationFrame
            tickSpeed: 40, // set interval (ms) if not using RAF
            scrollSpeed: 20,
            debug: false, // turn on debug
            tweenSpeed: 0.2, // scrollTop tween speed
            startAt: settings.startAt, // scrollTop where the experience starts
            container: $('#main'), // main container
            touchcontrol: $('.touchcontrol'), // main container
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

                if (windowWidth < 1800) {
                    $(".scback img").css({
                        'marginLeft': -900
                    });
                    $(".scback img").css({
                        'top': 0
                    });
                } else {
                    $(".scback img").css({
                        'marginLeft': '-50%'
                    });
                    $(".scback img").css({
                        'top': -((windowWidth / 2) - 900) / 2
                    });
                    //alert("AA");
                }

                if (windowWidth < 1260 && windowWidth > 900) {
                    $(".sidelinks").css({
                        'left': -160
                    });
                    $(".navcont").show();
                    menuOpen = false;
                }

                if (windowWidth > 1260) {
                    $(".sidelinks").css({
                        'left': 0
                    });
                    $(".navcont").hide();
                }


                if (windowWidth < 500) {
                    if (openSub) {
                        $(".mbsidelinks").stop(true, true).animate({
                            'height': 28 * (sidelinksHeight + 1)
                        }, 1);
                    } else {
                        $(".mbsidelinks").stop(true, true).animate({
                            'height': 0
                        }, 1);
                    }
                } else {
                    $(".mbsidelinks").css({
                        'height': 'auto'
                    });
                }


                if (windowHeight > 900) {
                    $(".scbackfirst").css({
                        'height': 900
                    });
                } else {
                    $(".scbackfirst").css({
                        'height': windowHeight - 35
                    });
                }
                $(".scbackfirst img").css({
                    'height': '100%'
                });
                imgbackheight = $(".scbackfirst img").height();
                $(".scbackfirst img").css({
                    'width': imgbackheight * 2.2
                });
                imgbackwidth = $(".scbackfirst img").width();
                $(".scbackfirst img").css({
                    'marginLeft': -(imgbackwidth / 2)
                });

                //				collapseAll();

                //				alert(myVar_overview);
                if (windowWidth < 900) {
                    if (runOnce == true) {
                        runOnce = false;
                        $(".sidelinks").hide();

                        $('.toppart').html("");
                        $('.overview').html("");
                        $('.features').html("");
                        $('.image').html("");
                        $('.location').html("");
                        $('.site').html("");
                        $('.floor').html("");
                        $('.specifications').html("");
                        $('.price').html("");
                        $('.payment').html("");
                        $('.progress').html("");
                        $('.enquiry').html("");


                        $('.mb_toppart').html(myVar_toppart);
                        $('.mb_overview').html(myVar_overview);
                        $('.mb_features').html(myVar_features);
                        $('.mb_image').html(myVar_image);
                        $('.mb_location').html(myVar_location);
                        $('.mb_site').html(myVar_site);
                        $('.mb_floor').html(myVar_floor);
                        $('.mb_specifications').html(myVar_specifications);
                        $('.mb_price').html(myVar_price);
                        $('.mb_payment').html(myVar_payment);
                        $('.mb_progress').html(myVar_progress);
                        $('.mb_enquiry').html(myVar_enquiry);


                        shortTitle = window.location.hash;
                        shortText = jQuery.trim(shortTitle).substring(5).trim(this);
                        urlHandler(shortText);

                        $(".fptab").css({
                            'background': 'none',
                            'height': 'auto',
                            'overflow': 'visible'
                        });

                        $(".sc1backpic img").attr("src", "../../svg/spacer.gif");


                        //picGalleryHandler();

                        $('#yourImageID').hide();


                    }
                    $('.scroll-pane').destroy();
                    $('.scroll-pane-2').destroy();
                    $('.scroll-pane-features').destroy();
                    $('.scroll-pane-less').destroy();
                } else {
                    if (runOnce == false) {
                        runOnce = true;
                        $(".sidelinks").show();
                        $('.mb_toppart').html("");
                        $('.mb_overview').html("");
                        $('.mb_features').html("");
                        $('.mb_image').html("");
                        $('.mb_location').html("");
                        $('.mb_site').html("");
                        $('.mb_floor').html("");
                        $('.mb_specifications').html("");
                        $('.mb_price').html("");
                        $('.mb_payment').html("");
                        $('.mb_progress').html("");
                        $('.mb_enquiry').html("");

                        $('.toppart').html(myVar_toppart);
                        $('.overview').html(myVar_overview);
                        $('.features').html(myVar_features);
                        $('.image').html(myVar_image);
                        if (isIE1 == true || isIE2 == true || isIE3 == true) {

                        } else {
                            $('.location').html(myVar_location);
                        }
                        $('.site').html(myVar_site);
                        $('.floor').html(myVar_floor);
                        $('.specifications').html(myVar_specifications);
                        $('.price').html(myVar_price);
                        $('.payment').html(myVar_payment);
                        $('.progress').html(myVar_progress);
                        $('.enquiry').html(myVar_enquiry);

                        shortTitle = window.location.hash;
                        shortText = jQuery.trim(shortTitle).substring(5).trim(this);
                        urlHandler(shortText);

                        $(".sc1backpic img").attr("src", "svg/northeye-pic2.jpg");


                        //picGalleryHandler();



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

                        $("#site_container").hide();

                        $('.jqzoom').jqzoom({
                            zoomType: 'standard',
                            lens: true,
                            preloadImages: false,
                            alwaysOn: true
                        });


                    }
                    /*$('.scroll-pane').css({'height':windowHeight-130});
                    $('.scroll-pane-2').css({'height':windowHeight-200});
                    $('.scroll-pane-features').css({'height':windowHeight-200});*/
                }


                $('.scroll-pane').jScrollPane({
                    autoReinitialise: true
                });
                $('.scroll-pane-2').jScrollPane({
                    autoReinitialise: true
                });
                $('.scroll-pane-features').jScrollPane({
                    autoReinitialise: true
                });
                $('.scroll-pane-less').jScrollPane({
                    autoReinitialise: true
                });








                if ($scrollBar)
                    resizeScrollBar();



            },

            onUpdate: function(scrollTop) {
                if ($scrollBar)
                    setScrollBarPosition(scrollTop / maxScroll);
            }
        });



        //Keyboard Controls
        $(window).keydown(function(e) {
            if (e.keyCode == 40 || e.keyCode == 39) {
                var currentScroll = scrollAnimate.getScrollTop();
                var targetScroll = currentScroll + 25;
                if (targetScroll > scrollAnimate.getMaxScroll() + ratio) {
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
        setInterval(checkSection, settings.sectionCheckInterval);

        return scrollAnimate;
    }

    return {
        init: init,
        scrollAnimate: scrollAnimate
    }
})();


$(document).ready(function() {
    window.siteAnimator = myFunction.init();
});

$(document).bind('touchmove', function(e) {
    if (windowWidth > 900) {
        e.preventDefault();
    }
});