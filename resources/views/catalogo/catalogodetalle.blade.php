@extends('layouts.weblayout')
@section('content')


<div class="banner_catalogo_Detalle animate__animated animate__fadeIn">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/catalogo/banner.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-contact d-none d-md-block">
                    <p>Coqueteos antojitos... un antojito que coquetea con tu paladar..., si te provoca, sólo pídelo, garantizamos tu satisfacción.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section2detalle">
    <div class="container container_detalle">
        <div class="row">
            <div class="col-sm-5 col-lg-6 col-xxl-4">
                <div class="badge_categoria">
                    <h4> <span class="badge rounded-pill bg-warning text-dark">{{$catalogo->categoria}}</span></h4>
                </div>
                <div>
                    <p class="title_detalle">{{$catalogo->titulo}}</p>
                    <p class="title_descripcion">{{$catalogo->descripcion}} </p>
                  
                    <div class="row">
                        <div class="col-6 col-sm-4 text-end">
                            <a href="{{route('catalogo.index')}}" id="" class=" btn_enlace_regreso btn hvr-grow btn-primary">Regresar</a>
                        </div>
                        <div class="col-6 col-sm-4 ">
                            <a href="https://wa.me/+51948147369" target="_blank" id="" class=" btn_comprar_detalle btn hvr-grow btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-lg-6 col-xxl-8 text-center imagen_detalle_bd">
                <!-- <div class="row">
                    <div class="col-sm-6 detalle_producto np nm">
                    <img src="{{asset('img/catalogo/p-detalle-01.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-6 detalle_producto np nm">
                    <img src="{{asset('img/catalogo/p-detalle-02.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-6 detalle_producto np nm">
                    <img src="{{asset('img/catalogo/p-detalle-03.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-6 detalle_producto np nm">
                    <img src="{{asset('img/catalogo/p-detalle-04.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div> -->
                <div class="">
                  
                   <img src="{{asset('img/catalogo/'.$catalogo->imagen)}}" class="img-fluid img_prodct_Detalle" alt="">     
                </div>
            </div>
        </div>
    </div>
</div>



@endsection