$(function() {
    var $burgerBtn = $('.burger-btn');
    var $burgerBars = $('.burger-btn__bars')
    var $burgerMenu = $('.burger-menu');
    var $accordionBtn = $('.accordion__btn');
    var $submitAction = $('#form');
    var $topScrollBtn = $('#scroll-top');
    var $changeVideo = $('.end__visual');
    const $submitBtn = $('#submit');


    $topScrollBtn.hide();

    $('dt button:not(.accordion__btn--active)').parent().next().css('display', 'none');


    $burgerBtn.click(function() {
        $($burgerBars).toggleClass('burger-btn__bars--active');
        $($burgerMenu).fadeToggle();
    });

    $accordionBtn.click(function() {
        var $accordionBody = $(this).parent().next();
        $(this).toggleClass('accordion__btn--active');
        $accordionBody.slideToggle();
    })

    $('#form input, #form textarea').on('change', function () {
        if (
            $('#form #name').val() !== "" &&
            $('#form #email').val() !== "" &&
            $('#form #tel').val() !== "" &&
            $('#form #detail').val() !== ""
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
        var $top = $('.top').height();
        var $about = $('.about').innerHeight();
        var $employment = $('.employment').outerHeight(true);
        var $news = $('.news').innerHeight();
        var $blog = $('.blog').outerHeight(true);
        var $recruitment = $('.recruitment').innerHeight();
        var $faq = $('.faq').outerHeight(true);
        var $contentHeights = $top + $about + $employment + $news + $blog + $recruitment + $faq;

        if ($(this).scrollTop() > $contentHeights) {
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


    AOS.init();
});
