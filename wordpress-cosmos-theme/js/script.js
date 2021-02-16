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
        $('.e-loadholder').addClass('loadingNone');
        $('.m-loader').addClass('loadingNone');
        $('#particleCanvas-Blue').addClass('loadingNone');
        $('#particleCanvas-White').addClass('loadingNone');
        $('.loadingBg').addClass('loadingNone');
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

    // スクロールヒント
    new ScrollHint('.js-scrollable', {
        suggestiveShadow: true,
        i18n: {
            scrollable: 'スクロールできます'
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
    const $textarea = $('#detail');
    const $placeholderText = $('.placeholder-text')
    $textarea.on('keyup change', function() {
        let $letterLength = $textarea.val().length;
        if ($letterLength !== 0) {
            $placeholderText.css('display', 'none');
        } else {
            $placeholderText.css('display', 'block');
        }
    });

    // 送信確認
    $submitConfirm.on('click', function (event){
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
    $submitAction.on('submit', function (event) {
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
    AOS.init({
        easing: 'ease-in-out',
        once: true,
    });

    // particles.js
    particlesJS("particleCanvas-Blue", {
        particles: {
            number: {
                value: 100,
                density: {
                    enable: true,
                    value_area: 800
                }
            },
            color: {
                value: "#1B5F70"
            },
            shape: {
                type: "circle",
                stroke: {
                    width: 0,
                    color: "#000000"
                },
                polygon: {
                    nb_sides: 3
                },
                image: {
                    src: "img/github.svg",
                    width: 100,
                    height: 100
                }
            },
            opacity: {
                value: 0.5,
                random: false,
                anim: {
                    enable: true,
                    speed: 1,
                    opacity_min: 0.1,
                    sync: false
                }
            },
            size: {
                value: 10,
                random: true,
                anim: {
                    enable: false,
                    speed: 10,
                    size_min: 0.1,
                    sync: false
                }
            },
            line_linked: {
                enable: false,
                distance: 150,
                color: "#ffffff",
                opacity: 0.4,
                width: 1
            },
            move: {
                enable: true,
                speed: 0.5,
                direction: "none",
                random: true,
                straight: false,
                out_mode: "bounce",
                bounce: false,
                attract: {
                    enable: false,
                    rotateX: 394.57382081613633,
                    rotateY: 157.82952832645452
                }
            }
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: {
                    enable: true,
                    mode: "grab"
                },
                onclick: {
                    enable: false,
                    mode: "push"
                },
                resize: true
            },
            modes: {
                grab: {
                    distance: 200,
                    line_linked: {
                    opacity: 0.2
                    }
                },
                bubble: {
                    distance: 1500,
                    size: 40,
                    duration: 7.272727272727273,
                    opacity: 0.3676323676323676,
                    speed: 3
                },
                repulse: {
                    distance: 50,
                    duration: 0.4
                },
                push: {
                    particles_nb: 4
                },
                remove: {
                    particles_nb: 2
                }
            }
        },
        retina_detect: true
    });

    particlesJS("particleCanvas-White", {
        particles: {
            number: {
                value: 250,
                density: {
                    enable: true,
                    value_area: 800
                }
            },
            color: {
                value: "#ffffff"
            },
            shape: {
                type: "circle",
                stroke: {
                    width: 0,
                    color: "#000000"
                },
                polygon: {
                    nb_sides: 3
                },
                image: {
                    src: "img/github.svg",
                    width: 100,
                    height: 100
                }
            },
            opacity: {
                value: 0.5,
                random: true,
                anim: {
                    enable: false,
                    speed: 0.2,
                    opacity_min: 0,
                    sync: false
                }
            },
            size: {
                value: 15,
                random: true,
                anim: {
                    enable: true,
                    speed: 10,
                    size_min: 0.1,
                    sync: false
                }
            },
            line_linked: {
                enable: false,
                distance: 150,
                color: "#ffffff",
                opacity: 0.4,
                width: 1
            },
            move: {
                enable: true,
                speed: 0.5,
                direction: "none",
                random: true,
                straight: false,
                out_mode: "bounce",
                bounce: false,
                attract: {
                    enable: true,
                    rotateX: 3945.7382081613637,
                    rotateY: 157.82952832645452
                }
            }
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: {
                    enable: false,
                    mode: "grab"
                },
                onclick: {
                    enable: false,
                    mode: "push"
                },
                resize: true
            },
            modes: {
                grab: {
                    distance: 200,
                    line_linked: {
                        opacity: 0.2
                    }
                },
                bubble: {
                    distance: 1500,
                    size: 40,
                    duration: 7.272727272727273,
                    opacity: 0.3676323676323676,
                    speed: 3
                },
                repulse: {
                    distance: 50,
                    duration: 0.4
                },
                push: {
                    particles_nb: 4
                },
                remove: {
                    particles_nb: 2
                }
            }
        },
        retina_detect: true
    });

    Resources
});
