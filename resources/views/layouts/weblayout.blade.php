<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('img/home/logo_foot.jpg')}}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover-min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fancybox.css') }}" rel="stylesheet">

    <title>Pasteleria web</title>
</head>

<body>


    <header class="_header_bk">
        <nav class="navbar navbar-expand-lg navbar-light bg-light container_logo_rp_nav np">
            <div class="container-fluid container_logo_rp np">
                <div>
                    <a class="navbar-brand p-0 logo1-rp np nm" href="{{ url('/home') }}">
                        <img src="{{asset('img/home/logo_1.jpg')}}" alt="Coqueteos y antojitos" width="200px" class="img-fluid logo-header">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="logo_caja_desk">
                    <a class="navbar-brand py-2 borde_logo logoweb_1 np" href="{{ url('/home') }}">
                        <img src="{{asset('img/home/logo_1.jpg')}}" width="200px" alt="Coqueteos y antojitos" class="img-fluid logoNavbar">
                    </a>
                </div>
                <div class="collapse navbar-collapse py-3 justify-content-xl-center" id="navbarTogglerDemo02">
                    <ul class="navbar-nav head_nd">

                        <li class="nav-item nav-item-2 ">
                            <a class="nav-link bolder linea {{ (request()->is('home')) ? 'active' :'' }} " aria-current="page" href="{{ url('/home') }}">BIENVENIDO</a>
                        </li>
                        <li class="nav-item nav-item-2 ">
                            <a class="nav-link bolder linea space_nav  {{ (request()->is('nosotros')) ? 'active' :'' }} " href="{{ url('/nosotros') }}">CONÓCENOS</a>
                        </li>
                        <li class="nav-item nav-item-2 ">
                            <a class="nav-link bolder linea space_nav {{ (request()->is('catalogo')) ? 'active' :'' }}" href="{{ url('/catalogo') }}">CATÁLAGO</a>
                        </li>
                        <li class="nav-item  nav-item-2 ">
                            <a class="nav-link bolder linea space_nav {{ (request()->is('servicios')) ? 'active' :'' }}" href="{{ url('/servicios') }}">SERVICIOS</a>
                        </li>
                        <li class="nav-item nav-item-2 ">
                            <a class="nav-link bolder linea space_nav {{ (request()->is('contacto')) ? 'active' :'' }}" href="{{ url('/contacto') }}">ESCRÍBENOS</a>
                        </li>
                        <li class="nav-item pl-3 space_nav d-flex align-items-center justify-content-center">
                            <a class="nav-link pr-1" href="https://m.facebook.com/Coqueteos.antojitos/" target="_blank"><img src="{{asset('img/otros/fb-.png')}}"></a>
                        </li>
                        <li class="nav-item pl-3 space_nav d-flex align-items-center justify-content-center">
                            <a class="nav-link pr-1" href="https://www.instagram.com/invites/contact/?i=9df08aae7lsa&utm_content=1hy3gsx" target="_blank" ><img src="{{asset('img/home/insta.png')}}" width="40px"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>





    @yield('content')

    <footer class=" footer_content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light container_logo_rp_nav np nm">
            <div class="container-fluid container_logo_rp">
                
                <div class="collapse navbar-collapse pb-3 justify-content-center np nm" id="navbarTogglerDemo02">
                    <ul class="navbar-nav">
                        <li class="nav-item nav-item-2 ">
                            <a class="nav-link bolder linea {{ (request()->is('home')) ? 'active' :'' }} " aria-current="page" href="{{ url('/home') }}">BIENVENIDO</a>
                        </li>
                        <li class="nav-item nav-item-2 ">
                            <a class="nav-link bolder linea space_nav  {{ (request()->is('nosotros')) ? 'active' :'' }} " href="{{ url('/nosotros') }}">CONÓCENOS</a>
                        </li>
                        <li class="nav-item nav-item-2 ">
                            <a class="nav-link bolder linea space_nav {{ (request()->is('servicios')) ? 'active' :'' }}" href="{{ url('/catalogo') }}">CATÁLOGO</a>
                        </li>
                        <li class="nav-item  nav-item-2 ">
                            <a class="nav-link bolder linea space_nav {{ (request()->is('productos')) ? 'active' :'' }}" href="{{ url('/servicios') }}">GALERÍA</a>
                        </li>
                        <li class="nav-item nav-item-2 ">
                            <a class="nav-link bolder linea space_nav {{ (request()->is('contacto')) ? 'active' :'' }}" href="{{ url('/contacto') }}">ESCRÍBENOS</a>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>
        <div class="container">
        <div class="row np nm">
            <div class="col-sm-4 footer_mejor">
                <p class="fott_p1 scrollflow -slide-left -opacity">Somos la mejor <br> <span class="fott_p2">Pastelería</span> </p>
              
            </div>
            <div class="col-sm-4 img_logofooter">
                <a class="navbar-brand py-2 borde_logo logoweb_1" href="{{ url('/home') }}">
                    <img src="{{asset('img/home/logo_foot1.jpg')}}" alt="Coqueteos y antojitos" class="img-fluid logoFooter scrollflow -slide-top -opacity">
                </a>
            </div>
            <div class="col-sm-4 telegon_foot">
                <div class="contacto_footer">
                    <p class="foot_p2-ll scrollflow -slide-right -opacity">Llámanos al: <br> <span class="foot_p2-ll2">948 147 369</span></p>
                  
                </div>
            </div>
        </div>
        </div>
        <a href="https://wa.me/+51948147369" target="_blank" class="wsp-icon wsp-display ">
            <img src="{{asset('img/otros/wspdesk3.png')}}" alt="">
        </a>
        <!-- <div id="wws-chat" class="wsp-desk wws-popup-container wws-popup-container--position">
            <div class="wws-gradient wws-gradient--position"></div>
            <div class="wws-popup" data-wws-popup-status="0">
                <div class="wws-popup__header">
                    <div class="wws-popup__close-btn wws--bg-color wws--text-color wws-shadow">
                        <i class="fas fa-times wws-popup__close-icon"></i>
                    </div>
                    <div class="wws-clearfix"></div>
                </div>
                <div class="wws-popup__body">
                    <div class="wws-popup__support-wrapper  wws-shadow">
                        <div class="wws-popup__support">
                            <div class="wws-popup__support-about wws--bg-color wws--text-color"> Nuestro equipo de atención al cliente está aquí para responder a sus preguntas.</div>
                        </div>
                    </div>
                    <div class="wws-clearfix"></div>
                    <div class="wws-popup__support-person-container wws-shadow">
                        <div class="wws-popup__support-person-wrapper">
                            <a class="wws-popup__support-person-link" href="https://wa.me/51986967055?text=" target="_blank" data-wws-pre-msg="" data-ga-analytics-label="Multi Person - Atención">
                                <div class="wws-popup__support-person">
                                    <div class="wws-popup__support-person-img-wrapper">
                                        <img class="wws-popup__support-person-img" src="{{asset('img/otros/worker2.png')}}" alt="WhatsApp" width="54">
                                        <div class="wws-popup__support-person-available"></div>
                                    </div>
                                    <div class="wws-popup__support-person-info-wrapper">
                                        <div class="wws-popup__support-person-title"></div>
                                        <div class="wws-popup__support-person-name">Atención al cliente</div>
                                        <div class="wws-popup__support-person-status">Disponible</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wws-popup__footer">
                <div class="wp-open">
                    <div class="wws-popup__open-btn wws--bg-color wws--text-color wws-shadow">
                        <span>Hola, ¿en qué puedo ayudarte?</span> 
                    </div>
                    <img src="{{asset('img/otros/wspdesk3.png')}}" width="50px">
                </div>
            </div>
            
        </div> -->
    </footer>


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="{{ asset('js/appWeb.js') }}"></script>
    <script src="{{ asset('plugin/scrollflow/eskju.jquery.scrollflow.min.js') }}"></script>
    <script src="{{ asset('js/fancybox.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script>
        $('.wws-popup__open-btn').on('click', function() {
            $('#wws-chat').find('.wws-popup').attr('data-wws-popup-status', 1).show().animate({
                height: '205px'
            });
            $('.wws-gradient').show();
        });
        $('.wws-popup__close-btn').on('click', function() {
            $('#wws-chat').find('.wws-popup').attr('data-wws-popup-status', 0).animate({
                height: '0px'
            }).hide('500');
            $('.wws-gradient').hide();
        });
    </script>
    {{-- Scripts por pagina --}}
    @yield('scripts')
</body>

</html>