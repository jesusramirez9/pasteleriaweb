@extends('layouts.weblayout')
@section('content')

<div class="banner_home animate__animated animate__fadeIn">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/home/slid.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption caousel_baner d-none d-md-block">
                    <p class="m-0 p-0 text_home1">CONTAMOS CON LOS</p>
                    <p class="m-0 p-0 text_home2">MEJORES PASTELES </p>
                    <P class="descripcion_home d-none d-lg-block">
                        <p>Un antojito que coquetea con tu paladar</p>
                        <p>Todo lo hacemos con el amor de casa</p>
                        <p>Nada mejor que un postre para compartir en familia.</p>
                    </P>
                    <div class="row np">
                        <div class="col-md-6 col-xl-5 col-xxl-4 text-start np nm">
                            <a href="{{route('catalogo.index')}}" type="button" class="btn btn-secondary btn_pedido">PEDIDOS AQUÍ</a>
                        </div>
                        <div class="col-md-5 col-xl-5 col-xxl-5 np nm">
                        <a href="{{route('linkContacto')}}" type="button" class="btn btn-secondary btn_escribenos">ESCRÍBENOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rp_dp_ylw">
    <div class="text-center">

        <p>Un antojito que coquetea con tu paladar…</p>
        <p>Todo lo hacemos con el amor de casa</p>
        <p>Nada mejor que un postre para compartir en familia.</p>
        <div class="">
            <a href="{{route('catalogo.index')}}" type="button" class="btn btn-secondary btn_escribenos">VER CATÁLOGO</a>
        </div>
    </div>
</div>
<div class="sectionhome2">

    <div class="container np">
        <div class="favoritas_home">
            <div class="favorite-txt-1">
                <p class="nm np scrollflow -slide-right -opacity">LAS FAVORITAS</p>
            </div>
        </div>
        <div id="carouselExampleCaptions2" class="carousel slide cuerpo_favorita" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{{asset('img/home/torta_humeda_de_chocolate1.jpg')}}" class="d-block img_prodct_Detalle img-fluid" alt="Torta humeda de chocolate coqueteos y antojitos">
                        </div>
                        <div class="col-sm-7">
                            <div class="carousel-caption carousel-caption2_home d-none d-md-block item_favorita1">
                                <h5>Torta Húmeda de Chocolate</h5>
                                <p>Delicioso queque húmedo de chocolate embebido en un almíbar de chocolate, rellena con dos capas de fudge, cubierta con fudge. Super chocolatosa!!!. Pídela desde su versión mini (10 porciones).</p>
                                <div class="">
                                    <a href="{{route('catalogo.index')}}" type="button" class="btn btn-secondary btn_escribenos">VER CATÁLOGO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{{asset('img/home/crema_volteada1.jpg')}}" class="img_prodct_Detalle d-block img-fluid" alt="Crema volteada coqueteos y antojitos">
                        </div>
                        <div class="col-sm-7">
                            <div class="carousel-caption carousel-caption2_home d-none d-md-block item_favorita2">
                                <h5>Crema Volteada</h5>
                                <p>Un postre tradicional que gusta a todos, la más cremosa versión la tenemos nosotros. Pídela desde 22cms</p>
                                <div class="">
                                    <a href="{{route('catalogo.index')}}" type="button" class="btn btn-secondary btn_escribenos">VER CATÁLOGO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{{asset('img/home/tres_leches1.jpg')}}" class="img_prodct_Detalle d-block img-fluid" alt="Tres Leches coqueteos y antojitos">
                        </div>
                        <div class="col-sm-7">
                            <div class="carousel-caption carousel-caption2_home d-none d-md-block item_favorita3">
                                <h5>Tres Leches</h5>
                                <p>Un suave bizcochuelo de vainilla o chocolate, embebido en nuestra deliciosa preparación de tres leches, rellena y cubierta de chantilly y envuelta en una deliciosa corona de chocolate bitter. Pídela desde su versión mini (10 porciones)</p>
                                <div class="">
                                    <a href="{{route('catalogo.index')}}" type="button" class="btn btn-secondary btn_escribenos">VER CATÁLOGO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{{asset('img/home/enrrollados_frutales1.jpg')}}" class="img_prodct_Detalle d-block img-fluid" alt="enrrollados frutales coqueteos y antojitos">
                        </div>
                        <div class="col-sm-7">
                            <div class="carousel-caption carousel-caption2_home d-none d-md-block item_favorita4">
                                <h5>Enrrollados Frutales</h5>
                                <p>Delicioso y húmedo bizcochuelo de vainilla, relleno con tres capas, mermelada o manjar, chantilly y fruta en trozos, envueltos. Pídelo en su versión de 6 a 8 porciones, con la fruta que desees (chirimoya, fresas, mango, lúcuma, etc.).</p>
                                <div class="">
                                    <a href="{{route('catalogo.index')}}" type="button" class="btn btn-secondary btn_escribenos">VER CATÁLOGO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</div>

<div class="section3_rp ">
    <div>
        <div class="card sec3_tp_Rp">
            <img src="{{asset('img/home/mesadepostres1.jpg')}}" class="card-img-top scrollflow -slide-right -opacity" alt="...">
            <div class="card-body sechome1">

                <div class=" text-center spce_xtxt scrollflow -slide-left -opacity">
                    <img src="{{asset('img/servicios/torta.png')}}" class="img-fluid" alt="">
                </div>

                <h5 class="card-title title_hom3s scrollflow -slide-right -opacity">Mesa de postres</h5>
                <p class="card-text descr_home3 scrollflow -slide-right -opacity">Riquísimos mini postres para hacer de tus celebraciones algo especial.</p>

            </div>
        </div>
        <div class="card sec3_tp_Rp2">
            <img src="{{asset('img/home/bocaditos1.jpg')}}" class="card-img-top scrollflow -slide-right -opacity" alt="...">
            <div class="card-body sechome2">

                <div class=" text-center spce_xtxt scrollflow -slide-left -opacity">
                    <img src="{{asset('img/servicios/torta.png')}}" class="img-fluid" alt="">
                </div>

                <h5 class="card-title title_hom3s scrollflow -slide-right -opacity">Bocaditos</h5>
                <p class="card-text descr_home3 scrollflow -slide-right -opacity">Preparados artesanalmente para deleitar al más exigente paladar.</p>

            </div>
        </div>
        <div class="card sec3_tp_Rp2">
            <img src="{{asset('img/home/cupcakes2.jpg')}}" class="card-img-top scrollflow -slide-right -opacity" alt="...">
            <div class="card-body sechome3">

                <div class=" text-center spce_xtxt scrollflow -slide-left -opacity">
                    <img src="{{asset('img/servicios/torta.png')}}" class="img-fluid" alt="">
                </div>

                <h5 class="card-title title_hom3s scrollflow -slide-right -opacity">Cupcakes</h5>
                <p class="card-text descr_home3 scrollflow -slide-right -opacity">Dilo con cupcakes y envía ese mensaje “especial”</p>

            </div>
        </div>
    </div>
</div>
<div class="sectionhom3">

    <div id="carouselExampleCaptionshome3" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptionshome3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptionshome3" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptionshome3" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="{{asset('img/home/fondo-03.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>Mesa de postres</h5>
                    <p>Riquísimos mini postres para hacer de tus celebraciones algo especial.</p>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="{{asset('img/home/fondo-03.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>Bocaditos</h5>
                    <p>Preparados artesanalmente para deleitar al más exigente paladar.</p>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="{{asset('img/home/fondo-03.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>Cupcakes</h5>
                    <p>Dilo con cupcakes y envía ese mensaje “especial”</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionshome3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptionshome3" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="sectionhome4">
    <div class="container containe_home4">
        <div class="row">
            <div class="col-sm-4 col-xxl-4 np nm">
                <div class="imghom4 scrollflow -slide-left -opacity">
                    <img src="{{asset('img/home/a.jpg')}}" class="img_prodct_Detalle img-fluid" alt="">
                </div>
            </div>
            <div class="col-sm-8 col-xxl-8 np nm cajahom4 ">
                <div class="fondo_home4-1">
                    <div class="txthom4 scrollflow -slide-right -opacity">
                        <h1>SOMOS LOS MEJORES</h1>
                        <p>En nuestro rubro existen muchas opciones, sin embargo, podemos afirmar que nuestro trabajo es uno de los mejores debido a que nos esforzamos para que el cliente sienta, en cada bocado, el amor con el que nuestros productos son preparados, remontándolos a la sensación de disfrutarlos como hechos en casa.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 np nm cajahom4-1">
                <div class="fondo_home4-2">
                    <div class="txthom4-2 scrollflow -slide-left -opacity">
                        <h1>100% NATURAL</h1>
                        <p>Nuestros productos son elaborados bajo la más estricta supervisión y uso de productos naturales, no usamos preservantes; solo ingredientes frescos de temporada, por ello, trabajamos solo bajo pedido garantizando así la frescura de nuestras preparaciones, debido a esto nuestros clientes siguen confiando en nosotros desde nuestros inicios.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 nm np cajagome4-2 ">
                <div class="imghom4-2 scrollflow -slide-right -opacity">
                    <img src="{{asset('img/home/d.jpg')}}" class="img_prodct_Detalle img-fluid" alt="">
                </div>
                <div class="imghom4-3 scrollflow -slide-left -opacity">
                    <img src="{{asset('img/home/e.jpg')}}" class="img_prodct_Detalle img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection