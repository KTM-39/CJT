$(function() {
    const $navItem = $('.main-nav__item')
    const $burgerBtn = $('.burger-btn');
    const $burgerBars = $('.burger-btn__bars')
    const $burgerMenu = $('.burger-menu');
    const $accordionBtn = $('.accordion__btn');
    const $submitAction = $('#form');
    const $topScrollBtn = $('#scroll-top');
    const $changeVideo = $('.end__visual');
    const $submitBtn = $('#submit');


    $topScrollBtn.hide();

    $('dt button:not(.accordion__btn--active)').parent().next().css('display', 'none');

    $navItem.click(function() {
        var id = $(this).children().attr('href');
        var position = $(id).offset().top - 80;
        $('html, body').animate({
            'scrollTop': position
        },500)
    });

    $burgerBtn.click(function() {
        $($burgerBars).toggleClass('burger-btn__bars--active');
        $($burgerMenu).fadeToggle();
    });

    $accordionBtn.click(function() {
        var $accordionBody = $(this).parent().next();
        $(this).toggleClass('accordion__btn--active');
        $accordionBody.slideToggle();
    })

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

    $submitAction.submit(function(){
        $('.thanks-message').slideToggle().delay(3000).slideToggle();
        return false
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 800) {
            $topScrollBtn.fadeIn();
        } else {
            $topScrollBtn.fadeOut();
        }
    });

    $(window).scroll(function(){
        var $videoWrapper = $('.change-video-wrapper').innerHeight();

        if ($(this).scrollTop() > $videoWrapper) {
            $changeVideo.css('z-index', '-10');
        } else {
            $changeVideo.css('z-index', '-30');
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

    cosha();

    cosha({
        className: "light-shadow",
        blur: "8px",
        y: "20px",
        x: "10px"
    });

    AOS.init();
});
