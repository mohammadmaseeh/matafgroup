(function($) {
    "use strict";

    $(document).ready(function() {
        /**-----------------------------
         *  Tooltip
         * ---------------------------*/
        $('[data-toggle="tooltip"]').tooltip();
        $(function() {
            $('[data-toggle="popover"]').popover();
        });
        /**-----------------------------
         *  form validation
         * ---------------------------*/
        $(function() {
            var formValidate = $("form[name='registration']");
            if (formValidate.length) {
                formValidate.validate({
                    rules: {
                        firstname: "required",
                        name: "required",
                        lastname: "required",
                        message: "required",
                        number: "required",
                        phone: "required",
                        nameAlt: "required",
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true,
                            minlength: 5
                        }
                    },
                    messages: {
                        name: "Please enter your name",
                        nameAlt: "Please enter your name",
                        firstname: "Please enter your firstname",
                        lastname: "Please enter your lastname",
                        message: "Please enter your message",
                        number: "Please enter your number",
                        phone: "Please use a valid phone number",
                        password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long"
                        },
                        email: "Please enter a valid email address"
                    }
                });
            }
        });
        $(function() {
            var formValidate = $("form[name='registrationAlt']");
            if (formValidate.length) {
                formValidate.validate({
                    rules: {
                        firstname: "required",
                        name: "required",
                        lastname: "required",
                        message: "required",
                        number: "required",
                        phone: "required",
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true,
                            minlength: 5
                        }
                    },
                    messages: {
                        name: "Please enter your name",
                        firstname: "Please enter your firstname",
                        lastname: "Please enter your lastname",
                        message: "Please enter your message",
                        number: "Please enter your number",
                        phone: "Please use a valid phone number",
                        password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long"
                        },
                        email: "Please enter a valid email address"
                    }
                });
            }
        });

        /**-----------------------------
         *  Alert UI Dismiss
         * ---------------------------*/
        $(".basicAlert").on("click", function() {
            $(this)
                .parent()
                .addClass("t-close");
        });

        /**-----------------------------
         *  Popup
         * ---------------------------*/
        $(".info-popup").on("click", function() {
            $(this).removeClass("active");
            $(".info-popup-content").removeClass("active");
        });
        $(".location-popup").on("click", function() {
            $(this).removeClass("active");
            $(".location-popup-content").removeClass("active");
        });
        $(".message-popup").on("click", function() {
            $(this).removeClass("active");
            $(".message-popup-content").removeClass("active");
        });

        $(".floating-icon-info").on("click", function() {
            $(".info-popup").toggleClass("active");
            $(".info-popup-content").toggleClass("active");
            $(".location-popup-content").removeClass("active");
            $(".message-popup-content").removeClass("active");
            $(".location-popup").removeClass("active");
            $(".message-popup").removeClass("active");
        });
        $(".info-popup-content_close").on("click", function() {
            $(this)
                .parent()
                .removeClass("active");
            $(".info-popup").removeClass("active");
        });

        $(".floating-icon-location").on("click", function() {
            $(".location-popup").toggleClass("active");
            $(".location-popup-content").toggleClass("active");
            $(".info-popup-content").removeClass("active");
            $(".message-popup-content").removeClass("active");
            $(".message-popup").removeClass("active");
            $(".info-popup").removeClass("active");
        });
        $(".location-popup-content_close").on("click", function() {
            $(this)
                .parent()
                .removeClass("active");
            $(".location-popup").removeClass("active");
        });

        $(".floating-icon-message").on("click", function() {
            $(".message-popup").toggleClass("active");
            $(".message-popup-content").toggleClass("active");
            $(".location-popup-content").removeClass("active");
            $(".info-popup-content").removeClass("active");
            $(".info-popup").removeClass("active");
            $(".location-popup").removeClass("active");
        });
        $(".message-popup-content_close").on("click", function() {
            $(this)
                .parent()
                .removeClass("active");
            $(".message-popup").removeClass("active");
        });

        /**-----------------------------
         *  Input text count
         * ---------------------------*/
        // progress bar

        $(".html").rProgressbar({
            percentage: 80,
            height: 3,
            fillBackgroundColor: "#2979FF",
            ShowProgressCount: false
        });
        $(".css").rProgressbar({
            percentage: 90,
            height: 3,
            fillBackgroundColor: "#2979FF",
            ShowProgressCount: false
        });

        $(".php").rProgressbar({
            percentage: 75,
            height: 3,
            fillBackgroundColor: "#2979FF",
            ShowProgressCount: false
        });

        $(".javascript").rProgressbar({
            percentage: 65,
            height: 3,
            fillBackgroundColor: "#2979FF",
            ShowProgressCount: false
        });

        $(".jquery").rProgressbar({
            percentage: 95,
            height: 3,
            fillBackgroundColor: "#2979FF",
            ShowProgressCount: false
        });
        /**-----------------------------
         *  Input text count
         * ---------------------------*/

        var maxLength = 120;
        $(".maxText").keyup(function() {
            var textlen = maxLength - $(this).val().length;
            $(".maxTextCount").text(textlen);
        });

        /**-----------------------------
         *  Navbar fix
         * ---------------------------*/

        $(document).on("click", ".navbar-area .navbar-nav li.menu-item-has-children>a", function(
            e
        ) {
            e.preventDefault();
        });

        /*------------------------------------
            Banner Slider
        ------------------------------------*/
        var bannerSlider = $(".banner-slider");
        if (bannerSlider.length) {
            bannerSlider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                arrows: false,
                pauseOnFocus: true,
                pauseOnHover: false,
                pauseOnDotsHover: true,
                dots: true,
                autoplaySpeed: 15000,

                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            dots: false,
                            autoplaySpeed: 7000
                        }
                    }
                ]
            });
        }
        /*------------------------------------
            Banner 2 Slider
        ------------------------------------*/
        var bannerSlider2 = $(".banner-2-slider");
        if (bannerSlider2.length) {
            bannerSlider2.slick({
                slidesToShow: 1,
                autoplay: true,
                arrows: false,
                pauseOnFocus: true,
                pauseOnHover: false,
                pauseOnDotsHover: true,
                dots: true,
                autoplaySpeed: 15000,
                responsive: [
                    {
                        breakpoint: 576,
                        settings: {
                            dots: false
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            autoplaySpeed: 7000,
                            dots: false
                        }
                    }
                ]
            });
        }
        /*------------------------------------
            Banner 5 Slider
        ------------------------------------*/
        var bannerSlider5 = $(".slider-5");
        if (bannerSlider5.length) {
            bannerSlider5.slick({
                slidesToShow: 1,
                autoplay: true,
                arrows: false,
                pauseOnFocus: true,
                pauseOnHover: false,
                pauseOnDotsHover: true,
                dots: true,
                autoplaySpeed: 15000,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            autoplaySpeed: 7000,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            dots: false
                        }
                    }
                ]
            });
        }
        /*------------------------------------
            Banner 3 Slider
        ------------------------------------*/
        var bannerSlider3 = $(".banner-3-slider");
        if (bannerSlider3.length) {
            bannerSlider3.slick({
                slidesToShow: 1,
                autoplay: true,
                pauseOnFocus: true,
                pauseOnHover: false,
                pauseOnDotsHover: true,
                dots: false,
                autoplaySpeed: 15000,
                arrows: false,
                prevArrow:
                    '<button type="button" class="banner-slider-btn banner-slider-btn--prev"><span class="ti-angle-left"></span></button>',
                nextArrow:
                    '<button type="button" class="banner-slider-btn banner-slider-btn--next"><span class="ti-angle-right"></span></button>',
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            autoplaySpeed: 7000,
                            arrows: false
                        }
                    }
                ]
            });
        }
        $(".banner-3-slider").on("beforeChange", function(event, slick, currentSlide, nextSlide) {
            var firstNumber = check_number(++nextSlide);
            $(".slider-controls__first").text(firstNumber);
            resetProgressWidth($(".slider-controls__progress-width"));
        });
        $(".banner-3-slider").on("afterChange", function(event, slick, currentSlide, nextSlide) {
            startProgressWidth($(".slider-controls__progress-width"));
        });
        startProgressWidth($(".slider-controls__progress-width"));
        //progressbar js
        function startProgressWidth(selector) {
            selector.css({
                height: "100%",
                transition: "all 15000ms"
            });
        }
        function resetProgressWidth(selector) {
            selector.css({
                height: "0%",
                transition: "all 0ms"
            });
        }
        var banSlider3 = $(".banner-3-slider").slick("getSlick");
        var banSlider3Count = banSlider3.slideCount;
        $(".slider-controls__last").text(check_num(banSlider3Count));
        function check_num(num) {
            var IsInt = /^[0-9]+$/.test(num);
            return IsInt ? "0 " + num : null;
        }

        /*------------------------------------
            Banner Slider Small with progress bar
        ------------------------------------*/
        var smSldier = $(".sm-slider__is");
        if (smSldier.length) {
            smSldier.slick({
                slidesToShow: 1,
                arrows: false,
                pauseOnFocus: true,
                pauseOnHover: true,
                pauseOnDotsHover: true,
                dots: false,
                arrows: true,
                prevArrow:
                    '<button type="button" class="sm-slider-btn sm-slider-btn--prev"><span class="ti-angle-left"></span></button>',
                nextArrow:
                    '<button type="button" class="sm-slider-btn sm-slider-btn--next"><span class="ti-angle-right"></span></button>',
                autoplay: true,
                autoplaySpeed: 10000,
                speed: 500
            });
        }
        $(".sm-slider__is").on("beforeChange", function(event, slick, currentSlide, nextSlide) {
            var firstNumber = check_number(++nextSlide);
            $(".sm-slider-controls .slider-extra .text .first").text(firstNumber);
            resetProgressbar(
                $(".sm-slider-controls .slider-extra .slider-progress .progress-width")
            );
        });
        $(".sm-slider__is").on("afterChange", function(event, slick, currentSlide, nextSlide) {
            startProgressbar(
                $(".sm-slider-controls .slider-extra .slider-progress .progress-width")
            );
        });
        startProgressbar($(".sm-slider-controls .slider-extra .slider-progress .progress-width"));
        //progressbar js
        function startProgressbar(selector) {
            selector.css({
                width: "100%",
                transition: "all 10000ms"
            });
        }
        function resetProgressbar(selector) {
            selector.css({
                width: "0%",
                transition: "all 0ms"
            });
        }
        var smSlider = $(".sm-slider__is").slick("getSlick");
        var smSliderCount = smSlider.slideCount;
        $(".sm-slider-controls .slider-extra .text .last").text(check_number(smSliderCount));
        function check_number(num) {
            var IsInteger = /^[0-9]+$/.test(num);
            return IsInteger ? "0" + num : null;
        }

        /*------------------------------------
            Testimonial Slider
        ------------------------------------*/
        var testSlider = $(".testimonial-slider");
        if (testSlider.length) {
            testSlider.slick({
                slidesToShow: 3,
                autoplay: true,
                arrows: false,
                pauseOnFocus: true,
                pauseOnHover: false,
                pauseOnDotsHover: true,
                dots: true,
                autoplaySpeed: 5000,
                centerMode: true,
                centerPadding: "0px",
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            centerPadding: "10px"
                        }
                    }
                ]
            });
        }
        /*------------------------------------
            Blog Slider
        ------------------------------------*/
        var blogSlider = $(".qry-blog-slider");
        if (blogSlider.length) {
            blogSlider.slick({
                slidesToShow: 3,
                // centerMode: true,
                // centerPadding: "0px",
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: true,
                prevArrow:
                    '<button type="button" class="arrow-btn arrow-btn--prev"><span class="ti-angle-left"></span></button>',
                nextArrow:
                    '<button type="button" class="arrow-btn arrow-btn--next"><span class="ti-angle-right"></span></button>',
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }

        blogSlider.on("beforeChange", function(event, slick, currentSlide, nextSlide) {
            var currentsliderIndex = nextSlide;
            ++currentsliderIndex;
            sliderProgressStep(
                slick.slideCount,
                currentsliderIndex,
                $(".qry-blog-slider__progress .qry-blog-slider__progress-is")
            );
        });

        /*------------------------------------
            Project Slider
        ------------------------------------*/
        var projecSlider = $(".project-slider");
        if (projecSlider.length) {
            projecSlider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                autoplay: true
            });
        }

        /*------------------------------------
            Nice Select
        ------------------------------------*/

        $("select").niceSelect();

        /*------------------------------------
            Project filter by Filterizr
        ------------------------------------*/
        var filterizd = $(".filtr-container");
        if (filterizd.length) {
            filterizd.filterizr({
                //options object
                layout: "sameWidth",
                gutterPixels: 20
            });
        }

        $(".navs__link--filter").on("click", function() {
            $(this).removeAttr("href");
        });
        $(".navs--filter .navs__item--filter").on("click", function() {
            $(this)
                .toggleClass("active")
                .siblings()
                .removeClass("active");
        });

        /*------------------------------------
            Product Details Slider
        ------------------------------------*/
        var productDetailSlider = $(".single-thumbnail-slider");
        var pThumbanilSlider = $(".product-thumbnail-carousel");

        if (productDetailSlider.length) {
            productDetailSlider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: ".product-thumbnail-carousel"
            });
        }
        if (pThumbanilSlider.length) {
            pThumbanilSlider.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: ".single-thumbnail-slider",
                dots: false,
                centerMode: false,
                focusOnSelect: true,
                vertical: true,
                arrows: false,
                prevArrow: '<div class="slick-prev"><i class="fa fa-angle-double-up"></i></div>',
                nextArrow: '<div class="slick-next"><i class="fa fa-angle-double-down"></i></div>',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            centerMode: true,
                            vertical: false
                        }
                    },
                    {
                        breakpoint: 300,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            centerMode: false,
                            vertical: false
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        }

        /*--------------------
            Counter UP
        ---------------------*/
        $(".project-counter__is").counterUp({
            delay: 10,
            time: 1000
        });

        /*--------------------
            wow js init
        ---------------------*/
        new WOW().init();

        /*-------------------------
            magnific popup activation
        -------------------------*/
        $(".video-play-btn,.video-popup,.small-vide-play-btn").magnificPopup({
            type: "video"
        });
        $(".magnificMe").magnificPopup({
            type: "image"
        });

        $(".button-video").magnificPopup({
            items: {
                src: "https://www.youtube.com/watch?v=kshIWIc15yg"
            },
            type: "iframe",
            iframe: {
                markup:
                    '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    "</div>",
                patterns: {
                    youtube: {
                        index: "youtube.com/",
                        id: "v=",
                        src: "//www.youtube.com/embed/kshIWIc15yg"
                    }
                },
                srcAction: "iframe_src"
            }
        });
        $(".qry-about__play").magnificPopup({
            items: {
                src: "https://www.youtube.com/watch?v=kshIWIc15yg"
            },
            type: "iframe",
            iframe: {
                markup:
                    '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    "</div>",
                patterns: {
                    youtube: {
                        index: "youtube.com/",
                        id: "v=",
                        src: "//www.youtube.com/embed/kshIWIc15yg"
                    }
                },
                srcAction: "iframe_src"
            }
        });
        $(".about__play").magnificPopup({
            items: {
                src: "https://www.youtube.com/watch?v=kshIWIc15yg"
            },
            type: "iframe",
            iframe: {
                markup:
                    '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    "</div>",
                patterns: {
                    youtube: {
                        index: "youtube.com/",
                        id: "v=",
                        src: "//www.youtube.com/embed/kshIWIc15yg"
                    }
                },
                srcAction: "iframe_src"
            }
        });

        /*------------------
            back to top
        ------------------*/
        $(document).on("click", ".back-to-top", function() {
            $("html,body").animate(
                {
                    scrollTop: 0
                },
                2000
            );
        });
        /*------------------------------
            counter section activation
        -------------------------------*/
        var counternumber = $(".count-num");
        counternumber.counterUp({
            delay: 20,
            time: 3000
        });

        /*-------------------------------
            Portfolio filter 
        ---------------------------------*/
        var $Container = $(".portfolio-masonry");
        if ($Container.length > 0) {
            $(".portfolio-masonry").imagesLoaded(function() {
                var festivarMasonry = $Container.isotope({
                    itemSelector: ".masonry-item", // use a separate class for itemSelector, other than .col-
                    masonry: {
                        gutter: 0
                    }
                });
                $(document).on("click", ".portfolio-menu li", function() {
                    var filterValue = $(this).attr("data-filter");
                    festivarMasonry.isotope({
                        filter: filterValue
                    });
                });
            });
            $(document).on("click", ".portfolio-menu li", function() {
                $(this)
                    .siblings()
                    .removeClass("active");
                $(this).addClass("active");
            });
        }

        /*---------------------------
            Testimonial carousel
        ---------------------------*/
        var $testimonialCarousel = $(".testimonial-carousel");
        if ($testimonialCarousel.length > 0) {
            $testimonialCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: false,
                animateOut: "fadeOut",
                animateIn: "fadeIn",
                responsive: {
                    0: {
                        items: 1
                    },
                    460: {
                        items: 1
                    },
                    599: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    960: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1920: {
                        items: 1
                    }
                }
            });
        }

        /*---------------------------
            Our Work carousel
        ---------------------------*/
        var $OurWorkCarousel = $(".our-work-carousel");
        if ($OurWorkCarousel.length > 0) {
            $OurWorkCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: true,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                smartSpeed: 2000,
                responsive: {
                    0: {
                        items: 1
                    },
                    460: {
                        items: 1
                    },
                    599: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    960: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    },
                    1920: {
                        items: 3
                    }
                }
            });
        }
        /*---------------------------
            Our Work carousel
        ---------------------------*/
        var $OurWorkCarousel = $(".our-work-carousel");
        if ($OurWorkCarousel.length > 0) {
            $OurWorkCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: true,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                smartSpeed: 2000,
                responsive: {
                    0: {
                        items: 1
                    },
                    460: {
                        items: 1
                    },
                    599: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    960: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    },
                    1920: {
                        items: 3
                    }
                }
            });
        }
        /*---------------------------
            Brand carousel
        ---------------------------*/
        var $BrandCarousel = $(".brand-carousel");
        if ($BrandCarousel.length > 0) {
            $BrandCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: false,
                smartSpeed: 2000,
                responsive: {
                    0: {
                        items: 1
                    },
                    360: {
                        items: 1
                    },
                    460: {
                        items: 2
                    },
                    599: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    960: {
                        items: 4
                    },
                    1200: {
                        items: 5
                    },
                    1920: {
                        items: 5
                    }
                }
            });
        }
        /*---------------------------
           Team carousel
        ---------------------------*/
        var $teamCarousel = $(".team-carousel");
        if ($teamCarousel.length > 0) {
            $teamCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: false,
                smartSpeed: 2000,
                responsive: {
                    0: {
                        items: 1
                    },
                    460: {
                        items: 1
                    },
                    599: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    960: {
                        items: 2
                    },
                    1200: {
                        items: 4
                    },
                    1920: {
                        items: 4
                    }
                }
            });
        }

        /*---------------------------
           Testimonial Two carousel
        ---------------------------*/
        var $testimonialTwoCarousel = $(".testimonial-carousel-two");
        if ($testimonialTwoCarousel.length > 0) {
            $testimonialTwoCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: false,
                smartSpeed: 2000,
                responsive: {
                    0: {
                        items: 1
                    },
                    460: {
                        items: 1
                    },
                    599: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    960: {
                        items: 2
                    },
                    1200: {
                        items: 2
                    },
                    1920: {
                        items: 3
                    }
                }
            });
        }
        /*----------------------
            Search Popup
        -----------------------*/
        var bodyOvrelay = $("#body-overlay");
        var searchPopup = $("#search-popup");

        $(document).on("click", "#body-overlay", function(e) {
            e.preventDefault();
            bodyOvrelay.removeClass("active");
            searchPopup.removeClass("active");
        });
        $(document).on("click", ".search", function(e) {
            e.preventDefault();
            searchPopup.addClass("active");
            bodyOvrelay.addClass("active");
        });
    });

    function isModalOpened() {
        return $(".modal.show").length > 0 ? true : false;
    }

    var lastScrollTop = "";
    var floatingIcon = $("#service_info_item");
    $(window).on("scroll", function() {
        /*---------------------------------------
        sticky menu activation && Sticky Icon Bar
        -----------------------------------------*/
        var st = $(this).scrollTop();
        var mainMenuTop = $(".navbar-area");
        if ($(window).scrollTop() > 1000) {
            if (st > lastScrollTop) {
                // hide sticky menu on scrolldown
                mainMenuTop.removeClass("nav-fixed");
            } else {
                // active sticky menu on scrollup
                mainMenuTop.addClass("nav-fixed");
            }
        } else {
            mainMenuTop.removeClass("nav-fixed ");
        }

        if ($(window).width() < 992) {
            if (st > lastScrollTop) {
                // hide sticky menu on scrolldown
                showFloatingIcon();
            } else {
                // active sticky menu on scrollup
                hideFloatingIcon();
            }
        } else {
            floatingIcon.css({ display: "inline-block" });
        }
        lastScrollTop = st;

        var ScrollTop = $(".back-to-top");
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
    });

    $(window).on("load", function() {
        /*-----------------
            preloader
        ------------------*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(1000);

        /*-----------------
            back to top
        ------------------*/
        var backtoTop = $(".back-to-top");
        backtoTop.fadeOut();

        /*---------------------
            Cancel Preloader
        ----------------------*/
        $(document).on("click", ".cancel-preloader a", function(e) {
            e.preventDefault();
            $("#preloader").fadeOut(0);
        });

        if ($(".qry-blog-slider").length > 0) {
            sliderProgressStep(
                $(".qry-blog-slider").slick("getSlick").slideCount,
                1,
                $(".qry-blog-slider__progress .qry-blog-slider__progress-is")
            );
        }

        //floatingIcon
        if ($(window).width() < 992) {
            hideFloatingIcon();
        } else {
            showFloatingIcon();
        }
    });

    $(window).on("resize", function(e) {
        e.preventDefault();
        //floatingIcon
        if ($(window).width() < 768) {
            hideFloatingIcon();
        } else {
            showFloatingIcon();
        }
    });

    function hideFloatingIcon() {
        //floatingIcon
        floatingIcon.hide();
    }

    function showFloatingIcon() {
        //floatingIcon
        floatingIcon.show();
    }

    function sliderProgressStep(totalSlider, currentsliderIndex, selector) {
        var progressWidth = 100 / totalSlider;
        var progressStep = progressWidth * currentsliderIndex;
        selector.css({ width: progressStep + "%" });
    }
    /**-----------------------------
     *  Scroll Down
     * ---------------------------*/
    $(".scroll-down").on("click", function(e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: $(this).offset().top + 160 }, 500, "linear");
    });
    /**-----------------------------
     *  Scroll Down
     * ---------------------------*/
    $(".scroll-down--alt").on("click", function(e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: $(this).offset().top + 170 }, 500, "linear");
    });
})(jQuery);
