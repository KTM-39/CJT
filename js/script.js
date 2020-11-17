$(function() {
    const $navItem = $('.main-nav__item');
    const $hoverMenuItem = $('.hover-menu__item');
    const $burgerBtn = $('.burger-btn');
    const $burgerBars = $('.burger-btn__bars');
    const $burgerMenu = $('.burger-menu');
    const $burgerMenuItem = $('.burger-menu__item')
    const $accordionBtn = $('.accordion__btn');
    const $submitAction = $('#form');
    const $topScrollBtn = $('#scroll-top');
    const $changeVideo = $('.end__visual');
    const $submitBtn = $('#submit');

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
        return false;
    });

//    バーガーボタン
    $burgerBtn.click(function() {
        $burgerBars.toggleClass('burger-btn__bars--active');
        $burgerMenu.fadeToggle();

    });

//    アコーディオンボタン
    $('dt button:not(.accordion__btn--active)').parent().next().css('display', 'none');
    $accordionBtn.click(function() {
        var $accordionBody = $(this).parent().next();
        $(this).toggleClass('accordion__btn--active');
        $accordionBody.slideToggle();
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
            "duration": 500,
            "easing": "linear"
        });
        return false;
    });

//    パララックスビデオチェンジ
    $(window).scroll(function(){
        var $changeVideoWrapper = $('.change-video-wrapper').innerHeight();
        if ($(this).scrollTop() > $changeVideoWrapper) {
            $changeVideo.css('z-index', '-10');
        } else {
            $changeVideo.css('z-index', '-30');
        }
    });

//    コーシャ
    cosha();
    cosha({
        className: "light-shadow",
        blur: "5px",
        y: "5px",
        x: "5px"
    });

//    スクロールアニメーション
    AOS.init();
});
