$(document).on("scroll", function() {

    //sacamos el desplazamiento actual de la página
    var desplazamientoActual = $(document).scrollTop();

    //compruebo si debo mostrar el botón
    if (desplazamientoActual > 5) {
        $('.header').css('box-shadow', '0px 0px 1px 0px rgba(0, 0, 0, 0.8)');
        $('.header').attr('data-scroll', 'true');
        $('.header-home').css('background', '#fff');
        $('.header .navbar-light .navbar-nav .nav-link').css('color', '#212121');
        if (window.width > 992) {
            $('.header-home .logo-header').css({
                'width': '190px',
                'margin-right': '30px'
            });
        }
        $('.header-home .logo-header').attr('src', '../public/img/frame.png');
        $('.header .navbar').css('padding', '.5rem 1rem');
        $('.navbar-light .navbar-toggler').css('color', '#10312B');
    }

    if (desplazamientoActual < 10) {
        $('.header').attr('data-scroll', 'false');
        $('.header').css('box-shadow', '0px 0px 0px 0px rgba(0, 0, 0, 0)');
        $('.header-home').css('background', '');
        $('.header .navbar-light .navbar-nav .nav-link').css('color', '');
        $('.header-home  .logo-header').css({
            'width': '',
            'margin-right': ''
        });
        $('.header-home .logo-header').attr('src', '../public/img/frame-1.png');
        $('.navbar-light .navbar-toggler').css('color', '');
        $('.header .navbar').css('padding', '.5rem 1rem');
    }

});

$(function() {
    $('#menuToggle').on('click', function() {
        let desplazamiento = $('html').scrollTop();
        if (desplazamiento == 0) {
            if (!$('#navbarNav').hasClass('show')) {
                $('.header-home').css({
                    'background': '#fff',
                    'box-shadow': '0px 0px 1px 0px rgba(0, 0, 0, 0.3)'
                });
                $('.header .navbar-light .navbar-nav .nav-link').css('color', '#212121');
                $('.header-home .img-red-header').css('filter', 'invert(1)');
                $('.navbar-light .navbar-toggler').css('color', '#10312B');
            } else {
                $('.header-home').css({
                    'background': '',
                    'box-shadow': '0px 0px 0px 0px rgba(0, 0, 0, 0)'
                });
                $('.header .navbar-light .navbar-nav .nav-link').css('color', '');
                $('.header-home .img-red-header').css('filter', 'none');
                $('.navbar-light .navbar-toggler').css('color', '');
            }
        }
    });
});

/****** MENÚ MOVIL **************/
$(function() {
    //MENU
    $('#btn-open-menu').on('click', function() {
        $('.menu-rp').css('width', '100%');
        $('.menu-rp').css('height', '100%');
        $('.menu-rp').css('overflow', 'visible');
    });
    $('#btn-close-menu').on('click', function() {
        $('.menu-rp').css('width', '0%');
        $('.menu-rp').css('height', '0%');
        $('.menu-rp').css('overflow', 'hidden');
    });


});

/************************************/

$(document).on("scroll", function() {

    //sacamos el desplazamiento actual de la página
    var desplazamientoActual = $(document).scrollTop();

    //compruebo si debo mostrar el botón
    if (desplazamientoActual > 10) {
        // #0047bbd1
        $('.header').css({
            'background': '#fff',
            'box-shadow': '0px 0px 1px 0px rgba(0, 0, 0, 0.3)'
        });
        $('.h-active .h-bordebajo').css("border-bottom", "solid 2px rgb(8, 81, 64)");
        $('.h-opcs').css('color', '#0d6e44');
        $('.sec-logo').css('width', '30%');
        $('.sec-menu').css('width', '70%');
        $('.logo-menu').css('width', '145px');

    }

    if (desplazamientoActual < 10) {
        $('.header').css({
            'background': '',
            'box-shadow': '0px 0px 0px 0px rgba(0, 0, 0, 0)'
        });
        $('.h-opcs').css('color', 'white');
        $('.h-slash').css('color', 'white');
        $('.h-hover-idioma').css('color', 'white');
        $('.h-back1').css('box-shadow', 'none');


        $('.h-active .h-bordebajo').css("border-bottom", "solid 2px white");


        $('.sec-logo').css('width', '');
        $('.sec-menu').css('width', '');
        $('.logo-menu').css('width', '');


    }

});