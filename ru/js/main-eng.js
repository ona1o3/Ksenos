jQuery(function ($) {

    // ===================================================== Fix fixed bg's jump

    /MSIE [6-8]|Mac/i.test(navigator.userAgent) || $("header, article, footer").each(function () {
        if ("fixed" == $(this).css("backgroundAttachment")) {
            var i = $(this), a = /WebKit/i.test(navigator.userAgent) ? 9 : 8;
            i.addClass("froid-fixed-bg").data({
                bgX: i.css("backgroundPosition").slice(0, i.css("backgroundPosition").indexOf(" ")),
                bgY: i.css("backgroundPosition").slice(i.css("backgroundPosition").indexOf(" ")),
                margin: a
            })
        }
    }), $(window).bind("SIModals.modalsOpen", function () {
        $(".froid-fixed-bg").each(function () {
            var i = $(this);
            i.css("backgroundPosition", "calc(" + i.data("bgX") + " - " + i.data("margin") + "px) " + i.data("bgY"))
        })
    }), $(window).bind("SIModals.modalsClose", function () {
        $(".froid-fixed-bg").each(function () {
            var i = $(this);
            i.css("backgroundPosition", i.data("bgX") + " " + i.data("bgY"))
        })
    });

    // ===================================================== Mobile full-width && disable animation

    if (is_mobile()) {

        // Fix mobile fixed bg's
        $("header, section, article, footer, .section-bg-block::before").each(function () {
            if ("fixed" == $(this).css("backgroundAttachment")) $(this).css('backgroundAttachment', 'scroll');
        });

        // Remove animation
        function removeAnimation(block, className) {
            block.css({
                'transform': 'none',
                '-webkit-transform': 'none',
                '-moz-transform': 'none',
                '-ms-transform': 'none',
                '-o-transform': 'none',
                'transition': 'none',
                '-webkit-transition': 'none',
                'opacity': 1
            }).removeClass(className);
        }

        function removeTransform(block, className) {
            block.css({
                'transform': 'none',
                '-webkit-transform': 'none',
                '-moz-transform': 'none',
                '-ms-transform': 'none',
                '-o-transform': 'none'
            }).removeClass(className);
        }

        removeAnimation($('.cre-animate'), 'cre-animate');
        removeTransform($('.si-floating'), 'si-floating');
        removeTransform($('.si-floating2'), 'si-floating2');
        removeTransform($('.si-floating3'), 'si-floating3');
        removeTransform($('.si-floating4'), 'si-floating4');

        // Mobile stretch
        $('html, body').css('min-width', '1280px').addClass('mobile');
        $('html').css('width', window.innerWidth + 'px');

        //$('html').css('width', window.innerWidth + 'px');
        //$(window).resize(function () {
        //    $('html').css('width', window.innerWidth + 'px');
        //});
        //$(window).bind('scroll', function () {
        //    $('html').css('width', window.innerWidth + 'px');
        //});

        // ===================================================== All sound load
        $.ionSound({
            sounds: ["bip-1", "bip-2", "wuf-1", "wuf-2", "wuf-3", "wuf-4"],
            path: template_url + "/sounds/",
            volume: 0
        });
    }
    else {

        // ===================================================== All sound load
        $.ionSound({
            sounds: ["bip-1", "bip-2", "wuf-1", "wuf-2", "wuf-3", "wuf-4"],
            path: template_url + "/sounds/",
            volume: 0.3
        });

        // ===================================================== Sounds
        $(document).on('mouseenter',
            '.btn, ' +
            '.si-close, ' +
            '.phone-link, ' +
            '.si-jump, ' +
            '.swiper-button-prev, ' +
            '.swiper-button-next, ' +
            '.swiper-pagination-bullet, ' +
            '.tab-link', function () {
                $.ionSound.play('bip-2');
            });
        SIModals.beforeOpen = function () {
            $.ionSound.play('wuf-4');
        };
        SIModals.beforeClose = function () {
            $.ionSound.play('wuf-3');
        };

        // ===================================================== smooth scrolling
        if (!navigator.userAgent.match(/Trident\/7\./)) { // if not IE
            SmoothScroll({stepSize: 100});
        } else {
            document.body.addEventListener("mousewheel", function () {
                event.preventDefault();
                var wd = event.wheelDelta;
                var csp = window.pageYOffset;
                window.scrollTo(0, csp - wd);
            });
        }
    }

    if (is_OSX()) {
        $('html, body').addClass('osx');
    }


    // ===================================================== Init all plugins and scripts
    $.fn.SIInit = function () {

        //Modal photos
        $("[data-fancybox]").fancybox({
            loop: true,
            thumbs: {
                autoStart: true
            },
            youtube: {},
            vimeo: {}
        });

        //Forms
        $('.send-form').SIForms({
            'validateFields': {
                'client_name': 'Enter your name',
                'client_phone': 'Enter your phone number',
                'client_mail': 'Specify your e-mail'
            },
            'checkExtra': function (form) {
                if (!$(form).find('.form-agree-check').hasClass('checked')) {
                    SIPageMessages.show('To send a form, you must agree to the processing of personal data.');
                    return false;
                }
            },
            'sendSuccess': function (res) {
                //grecaptcha.reset(recaptcha);
                //yaCounter.reachGoal('target' + res.id);
                //ga('send', 'event', res.gcode, res.gcode);
            }
        });

        //Jump links
        $('.si-jump').SIJump();

        //Page messages
        SIPageMessages.init();
    };

    $.fn.SIInit();


    // ===================================================== Modals
    $.fn.SIModalInit = function () {
        SIModals.init();

        // Init modals
        SIModals.attachModal('.open-phone-modal', '.phone-modal', {'.send-extra': 'extra'});
        SIModals.attachModal('.open-text-modal', '.text-modal', false, function () {
            return '.text-modal-' + $(this).data('id');
        });

        SIModals.attachModal('.open-plan-modal', '.plan-modal', false, function () {
            return '.plan-modal-' + $(this).data('id');
        });

        SIModals.attachModal('.open-info-modal', '.info-modal', false, function () {
            return '.info-modal-' + $(this).data('id');
        });

        // Modal controls
        SIModals.attachClose('.si-close');
    };

    $.fn.SIModalInit();

    //SIModals.afterOpen = function () {
    //grecaptcha.reset(recaptcha);
    //};

    // ===================================================== Styler
    $('input[type=file], input[type=radio], input[type=checkbox], select').styler();
    $('input[type=radio]').change(function () {
        var label = $(this).closest('label'),
            name = $(this).attr('name');
        $('input[name=' + name + ']').closest('label').removeClass('checked');
        if ($(this).is(':checked'))
            label.addClass('checked');
    });
    $('input[type=checkbox]').change(function () {
        var label = $(this).closest('label');
        if ($(this).is(':checked'))
            label.addClass('checked');
        else
            label.removeClass('checked');
    });

    // ===================================================== swiper
    if($('html').find('.wrapper-slider-overview')){
        var overviewSlider = new Swiper('.overview-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: '.overview-pagination',
            nextButton: '.overview-next',
            prevButton: '.overview-prev',
            paginationClickable: true,
            loop: true,
            autoplayDisableOnInteraction: false,
            onSlideChangeStart: function (swiper) {
                $.ionSound.play('wuf-1');
            }
        });
    }

    if($('html').find('.wrapper-slider-overview')){
        var overviewSliderMob = new Swiper('.overview-slider-mob', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: '.overview-pagination-mob',
            nextButton: '.overview-next-mob',
            prevButton: '.overview-prev-mob',
            paginationClickable: true,
            loop: true,
            autoplayDisableOnInteraction: false,
            onSlideChangeStart: function (swiper) {
                $.ionSound.play('wuf-1');
            }
        });
    }

    if($('html').find('.section-panorama')){
        var panoramaSlider = new Swiper('.panorama-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: '.panorama-pagination',
            nextButton: '.panorama-next',
            prevButton: '.panorama-prev',
            paginationClickable: true,
            loop: true,
            onSlideChangeStart: function (swiper) {
                $.ionSound.play('wuf-1');
            }
        });
    }

    if($('html').find('.section-company')){
        var logoSlider = new Swiper('.logo-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: '.logo-pagination',
            nextButton: '.logo-next',
            prevButton: '.logo-prev',
            paginationClickable: true,
            loop: true,
            onSlideChangeStart: function (swiper) {
                $.ionSound.play('wuf-1');
            }
        });
    }

    if($('html').find('.wrapper-partner-slider')){
        var partnerSlider = new Swiper('.partner-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: '.partner-pagination',
            nextButton: '.partner-next',
            prevButton: '.partner-prev',
            paginationClickable: true,
            loop: true,
            onSlideChangeStart: function (swiper) {
                $.ionSound.play('wuf-1');
            }
        });
    }

    if($('html').find('.wrapper-partner-slider')){
        var partnerSliderMob = new Swiper('.partner-slider-mob', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: '.partner-pagination-mob',
            nextButton: '.partner-next-mob',
            prevButton: '.partner-prev-mob',
            paginationClickable: true,
            loop: true,
            onSlideChangeStart: function (swiper) {
                $.ionSound.play('wuf-1');
            }
        });
    }

    if($('html').find('.plan-level-image')){
        var sliderPageSlider = new Swiper('.section-slider-page', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: '.section-pagination',
            paginationType: 'fraction',
            nextButton: '.section-next',
            prevButton: '.section-prev',
            paginationClickable: true,
            loop: true,
            onSlideChangeStart: function (swiper) {
                $.ionSound.play('wuf-1');
            }
        });
    }

    if($('html').find('.plan-level-image')){
        var levelPageSlider = new Swiper('.level-slider-page', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: '.level-page-pagination',
            paginationType: 'fraction',
            nextButton: '.level-page-next',
            prevButton: '.level-page-prev',
            paginationClickable: true,
            loop: true,
            onSlideChangeStart: function (swiper) {
                $.ionSound.play('wuf-1');
            }
        });
    }

    // ===================================================== custom scripts
    //menu
    function headerBehaviour() {
        if ($(window).scrollTop() > 1000) {
            $('.show-menu').addClass('fixed');
        }
        else {
            $('.show-menu').removeClass('fixed');
        }
    }

    headerBehaviour();
    $(window).resize(function () {
        headerBehaviour();
    });
    $(window).bind('scroll', function () {
        headerBehaviour();
    });

    //equal height
    function setEqualHeight(block) {
        var maxHeight = 0;

        block.each(function () {
            var height = $(this).innerHeight();

            if (height > maxHeight) {
                maxHeight = height;
            }
        });

        return block.css('height', maxHeight);
    }

    setEqualHeight($('.item-advantages-sect .wrapper-svg'));

    // ===================================================== maps
    var circularMotion = {
        circle: {
            center: {lat: 34.707055, lng: 33.060783},
            population: 0.15
        }
    };

    function initMap() {

        $.getJSON("../js/map-style.json", function(data) {
            map.setOptions({styles: data});
        });

        var uluru = {lat: 34.704782, lng: 33.059905};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });

        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: '../images/map-pin-main.png'
        });

        var marker2 = new google.maps.Marker({
            position: {lat: 34.704770, lng: 33.061565},
            map: map,
            icon: '../images/map-pin-min.png'
        });

        var marker3 = new google.maps.Marker({
            position: {lat: 34.703047, lng: 33.060271},
            map: map,
            icon: '../images/map-pin-min.png'
        });

        var marker4 = new google.maps.Marker({
            position: {lat: 34.702781, lng: 33.062377},
            map: map,
            icon: '../images/map-pin-min.png'
        });

        //var marker5 = new google.maps.Marker({
        //    position: {lat: 34.706886, lng: 33.0608},
        //    map: map,
        //    icon: '../images/circle.png'
        //});

        var marker6 = new google.maps.Marker({
            position: {lat: 34.70702992, lng: 33.06085258},
            map: map,
            icon: '../images/transparent-icon.png'
        });


        for (var k in circularMotion) {
            // Add the circle for this city to the map.
            var cityCircle = new google.maps.Circle({
                strokeColor: '#3b5067',
                strokeOpacity: 1,
                strokeWeight: 18,
                fillColor: '#fff',
                fillOpacity: 1,
                map: map,
                center: circularMotion[k].center,
                radius: Math.sqrt(circularMotion[k].population) * 100
            });
        }

        var contentCircle = '<div id="content-map">'+
            '<p>Linopetra Roundabout </p>' +
            '</div>';

        var infowindowCircle = new google.maps.InfoWindow({
            content: contentCircle
        });

        cityCircle.addListener('click', function() {
            infowindowCircle.open(map, marker6);
        });

        var marker4Content = '<div id="content-map">'+
            '<p>Akis Express</p>' +
            '</div>';

        var infowindowMarker4 = new google.maps.InfoWindow({
            content: marker4Content
        });

        marker4.addListener('click', function() {
            infowindowMarker4.open(map, marker4);
        });

        var marker3Content = '<div id="content-map">'+
            '<p>IQ option Europe</p>' +
            '</div>';

        var infowindowMarker3 = new google.maps.InfoWindow({
            content: marker3Content
        });

        marker3.addListener('click', function() {
            infowindowMarker3.open(map, marker3);
        });

        var marker2Content = '<div id="content-map">'+
            '<p>Iron FX Group</p>' +
            '</div>';

        var infowindowMarker2 = new google.maps.InfoWindow({
            content: marker2Content
        });

        marker2.addListener('click', function() {
            infowindowMarker2.open(map, marker2);
        });
    }

    initMap();

    //lang
    let langSelect = $('.language-change li');
    langSelect.click(function() {
        langSelect.removeClass('active');
        $(this).addClass('active');
    });

    //menu
    function closeGlobalNav(timeout) {
        var globalNavigation = $('.nav'),
            showMenu = $('.show-menu');

        $('html').removeClass('si-lock2');
        showMenu.removeClass('opened');
        globalNavigation.removeClass('active');
        setTimeout(function () {
            globalNavigation.removeClass('visible');
        }, timeout);
    }

    //show menu button
    $('.show-menu').click(function () {
        var globalNavigation = $('.nav');

        if ($(this).hasClass('opened')) {
            closeGlobalNav(600);
        }
        else {
            $('html').addClass('si-lock2');
            $(this).addClass('opened');
            globalNavigation.addClass('visible').addClass('active');
        }
    });

    //navigation overlay click
    $('.nav-overlay').click(function () {
        closeGlobalNav(600);
    });

    //close button click
    $('.nav-close').click(function () {
        closeGlobalNav(600);
    });

    //global link click
    $(".nav").click(function (e) {
        closeGlobalNav(1200);
    });

    $(".nav a").click(function (e) {
        closeGlobalNav(1200);
    });

    var tomorrow = new Date();
    tomorrow = new Date(2020, 12-11, 9);
    $('.block-time').countdown({
        until: tomorrow,
        regional: 'en',
        format: 'od',
        layout: '<div class="title-block">Before the end of construction<br> left:</div>' +
        '<div class="count mount">{on}<br><span class="mount-text">{ol}</span></div>' +
        '<div class="count day">{dn}<br><span class="day-text">{dl}</span></div>'
    });

    // ===================================================== loader
    setTimeout(function () {
        $('html').removeClass('loading');
        setTimeout(function () {
            $('.loader').hide();
        }, 500);
    }, 1000);
});