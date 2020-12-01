$(function() {
    const $navItem = $('.main-nav__item');
    const $hoverMenuItem = $('.hover-menu__item');
    const $burgerBtn = $('.burger-btn');
    const $burgerBars = $('.burger-btn__bars');
    const $bar = $('.bar');
    const $burgerMenu = $('.burger-menu');
    const $burgerMenuItem = $('.burger-menu__item')
    const $accordionBtn = $('.accordion__btn');
    const $submitAction = $('#form');
    const $topScrollBtn = $('#scroll-top');
    const $submitBtn = $('#submit');
    const $switchingVideo = $('.end__visual');
    const $video1 = $('.video1');
    const $video2 = $('.video2');

//    スムーススクロール
    $burgerMenu.css('display', 'none');
    $navItem.click(function() {
        var id = $(this).children().attr('href');
        var position = $(id).offset().top - 50;
        $('html,body').animate({
            "scrollTop": position
        },{
            "duration": 800,
            "easing": "linear"
        })
        return false;
    });
    $hoverMenuItem.click(function() {
        var id = $(this).children().attr('href');
        var position = $(id).offset().top - 25;
        $('html,body').animate({
            "scrollTop": position
        },{
            "duration": 800,
            "easing": "linear"
        })
        return false;
    });
    $burgerMenuItem.click(function(){
        var id = $(this).children().attr('href');
        var position = $(id).offset().top;
        $('html,body').animate({
            "scrollTop": position
        },{
            "duration": 800,
            "easing": "linear"
        })
        $burgerBars.toggleClass('burger-btn__bars--active');
        $burgerMenu.fadeOut();
        $bar.css('background', '#ffffff');
        return false;
    });

//    バーガーメニュー
    $burgerBtn.click(function() {
        $burgerBars.toggleClass('burger-btn__bars--active');
        $burgerMenu.fadeToggle();
        if($burgerBars.hasClass('burger-btn__bars--active')) {
            $bar.css('background', '#333333')
        } else {
            $bar.css('background', '#ffffff')
        }
    });

//    アコーディオン
    $('dt button:not(.accordion__btn--active)').parent().next().css('display', 'none');
    $accordionBtn.click(function() {
        var $accordionBody = $(this).parent().next();
        $(this).toggleClass('accordion__btn--active');
        $accordionBody.slideToggle(200);
    });

//    入力制御
    $('#form input, #form select').on('change', function () {
        if (
            $('#form #name').val() !== "" &&
            $('#form #email').val() !== "" &&
            $('#form #tel').val() !== "" &&
            $('#form option:selected').val() !== ""
        ) {
            $submitBtn.prop('disabled', false);
        } else {
            $submitBtn.prop('disabled', true);
        }
    });

//    送信挙動
    $submitAction.submit(function(){
        $('.thanks-message').slideToggle().delay(3000).slideToggle();
        return false;
    });

//    スクロールボタン
    $topScrollBtn.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 800) {
            $topScrollBtn.fadeIn();
        } else {
            $topScrollBtn.fadeOut();
        }
    });
    $topScrollBtn.click(function () {
        $('body,html').animate({
            "scrollTop": 0
        }, {
            "duration": 800,
            "easing": "linear"
        });
        return false;
    });

//    パララックスビデオスィッチング
    $video2.get(0).pause();
    $(window).scroll(function(){
        var $switchingVideoWrapper = $('.switching-video-wrapper').innerHeight();
        if ($(this).scrollTop() > $switchingVideoWrapper) {
            $switchingVideo.css('z-index', '-10');
            $video1.get(0).pause();
            $video2.get(0).play();
        } else {
            $switchingVideo.css('z-index', '-30');
            $video1.get(0).play();
            $video2.get(0).pause();
        }
    });

//    スクロールアニメーション
    AOS.init();
});
