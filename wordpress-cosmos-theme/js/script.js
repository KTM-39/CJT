jQuery(function($) {
    const $navItem = $('.main-nav__item');
    const $hoverMenuItem = $('.hover-menu__item');
    const $burgerBtn = $('.burger-btn');
    const $burgerBars = $('.burger-btn__bars');
    const $bar = $('.bar');
    const $burgerMenu = $('.burger-menu');
    const $burgerMenuItem = $('.burger-menu__item')
    const $accordionBtn = $('.accordion__btn');
    const $submitConfirm = $('.confirm-btn');
    const $submitBtn = $('input[type="submit"]');
    const $submitAction = $('form');
    const $topScrollBtn = $('#scroll-top');
    const $switchingVideo = $('.end__visual');
    const $video1 = $('.video1');
    const $video2 = $('.video2');

    // ローディングアニメーション
    function lodingStop() {
        setTimeout(function () {
            $('#loadingWrap').addClass('loadingNone');
        }, 2000);
    };
    $(window).on('load',function () {
        lodingStop();
    });

    // スムーススクロール
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

    // バーガーメニュー
    $burgerBtn.click(function() {
        $burgerBars.toggleClass('burger-btn__bars--active');
        $burgerMenu.fadeToggle();
        if($burgerBars.hasClass('burger-btn__bars--active')) {
            $bar.css('background', '#333333')
        } else {
            $bar.css('background', '#ffffff')
        }
    });

    // アコーディオン
    $('dt button:not(.accordion__btn--active)').parent().next().css('display', 'none');
    $accordionBtn.click(function() {
        var $accordionBody = $(this).parent().next();
        $(this).toggleClass('accordion__btn--active');
        $accordionBody.slideToggle(300);
    });

    // 入力制御
    $submitConfirm.prop('disabled', true);
    $submitBtn.prop('disabled', true);
    $('form input[name="tel[data][0]"]').prop('placeholder', '0157');
    $('form input[name="tel[data][1]"]').prop('placeholder', 'XXX');
    $('form input[name="tel[data][2]"]').prop('placeholder', 'XXX');
    $('form input, form select').on('change', function () {
        if (
            $('form #name').val() !== "" &&
            $('form #email').val() !== "" &&
            $('form input[name="tel[data][0]"]').val() !== "" &&
            $('form input[name="tel[data][1]"]').val() !== "" &&
            $('form input[name="tel[data][2]"]').val() !== "" &&
            $('form option:selected').val() !== "選択してください"
        ) {
            $submitConfirm.prop('disabled', false);
            $submitBtn.prop('disabled', false);
        } else {
            $submitConfirm.prop('disabled', true);
            $submitBtn.prop('disabled', true);
        }
    });

    // 送信確認
    $submitConfirm.on('click', function (){
        event.preventDefault();
        let $nameValue = $('#name').val();
        let $emailValue = $('#email').val();
        let $numberValue1 = $('input[name="tel[data][0]"]').val();
        let $numberValue2 = $('input[name="tel[data][1]"]').val();
        let $numberValue3 = $('input[name="tel[data][2]"]').val();
        let $summaryValue = $('#summary').val();
        let $detailValue = $('#detail').val();
        $('.confirm-name').text($nameValue);
        $('.confirm-email').text($emailValue);
        $('.confirm-number1').text($numberValue1);
        $('.confirm-number2').text($numberValue2);
        $('.confirm-number3').text($numberValue3);
        $('.confirm-summary').text($summaryValue);
        $('.confirm-detail').text($detailValue);
        $('#modalConfirm').toggleClass('is-show');
    });
    $('#closeModal').on('click', function () {
        $('#modalConfirm').toggleClass('is-show');
    });
    $('#modalBg').on('click', function () {
        $('#modalConfirm').toggleClass('is-show');
    });

    // 送信遷移
    $submitAction.on('submit', function () {
        event.preventDefault();
        $('#modalConfirm').toggleClass('is-show');
        $('#modalSubmit').toggleClass('is-show');
        setTimeout(function () {
            window.location.href = '/';
        }, 2000);
    });

    // スクロールボタン
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

    // スィッチングビデオ
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

    // スクロールアニメーション
    AOS.init();
});
