@extends('layouts.weblayout')
@section('content')

<div class="banner_service animate__animated animate__fadeIn">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/servicios/banner.jpg')}}" class="d-block w-100" alt="Coqueteos y antojitos">
                <div class="carousel-caption carousel-caption-contact d-none d-md-block">
                    <p>Te invitamos a echar un vistazo a nuestra variedad de productos, estamos seguros querrás probarlos cuanto antes. Estamos para servirte.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section2_service_rp">
    <div class="container np">
        <div class="row np nm">
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 np tamtop">
                <div class="service1rp">
                    <div class="logo_torta">
                    <img src="{{asset('img/servicios/torta.png')}}" class="img-fluid scrollflow -slide-right -opacity" alt="">
                    </div>
               
                <p class="mt-3 mb-3 serviceprp scrollflow -slide-right -opacity">Mesas de Postres y Bocaditos</p>
                <p class="servicedescriprp scrollflow -slide-right -opacity">Todo tipo de mini postres y bocaditos para tus eventos familiares, de amistades, corporativos o académicos, Catering. Solicita nuestra carta.</p>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 np tamtop">
                <div class="service1img">
                <img src="{{asset('img/servicios/mesasdepostresybocaditos1.jpg')}}" class="img-fluid scrollflow -slide-left -opacity" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 np tamtop">
                <div class="service2rp">
                <div class="logo_torta">
                    <img src="{{asset('img/servicios/torta.png')}}" class="img-fluid scrollflow -slide-right -opacity" alt="">
                    </div>
                <p class="mt-3 mb-3 serviceprp scrollflow -slide-right -opacity">Temáticas y mobiliario</p>
                <p class="servicedescriprp scrollflow -slide-right -opacity">Temáticas infantiles, todo tipo de dulces tematizados y ambientación para la presentación de los mismos. Contamos con mobiliario para alquilar y hacer de tu fiesta algo inolvidable.</p>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 np tamtop">
                <div class="service1img">
                <img src="{{asset('img/servicios/tematicasymobiliario.jpg')}}" class="img-fluid scrollflow -slide-left -opacity" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 np tamtop">
                <div class="service3rp">
                <div class="logo_torta">
                    <img src="{{asset('img/servicios/torta.png')}}" class="img-fluid scrollflow -slide-right -opacity" alt="">
                    </div>
                <p class="mt-3 mb-3 serviceprp scrollflow -slide-right -opacity">Tortas y postres</p>
                <p class="servicedescriprp scrollflow -slide-right -opacity">Elaboración de tortas tematizadas para celebraciones, así como postres tradicionales y derivados para compartir con los tuyos.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 np tamtop">
                <div class="service1img ">
                <img src="{{asset('img/servicios/tortasypostres.jpg')}}" class="img-fluid scrollflow -slide-left -opacity" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section2service">
    <div class="row">
       
        <div class="col-12 service2">
            <div class=" text-end serviceimg2">
                <img src="{{asset('img/servicios/mesasdepostresybocaditos1.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="cajas2s">
                <img src="{{asset('img/servicios/torta.png')}}" class="scrollflow -slide-left -opacity img-fluid" alt="">
                <p class="mt-3 mb-3 servicep scrollflow -slide-right -opacity">Mesas de Postres y Bocaditos</p>
                <p class="servicedescrip scrollflow -slide-right -opacity">Todo tipo de mini postres y bocaditos para tus eventos familiares, de amistades, corporativos o académicos, Catering. Solicita nuestra carta.</p>
            </div>
        </div>
        <div class="col-12 service3">
            <div class=" text-end serviceimg3">
                <img src="{{asset('img/servicios/tematicasymobiliario.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="cajas3s">
                <img src="{{asset('img/servicios/torta.png')}}" class="img-fluid scrollflow -slide-left -opacity" alt="">
                <p class="mt-3 mb-3 servicep scrollflow -slide-right -opacity">Temáticas y mobiliario</p>
                <p class="servicedescrip scrollflow -slide-right -opacity">Temáticas infantiles, todo tipo de dulces tematizados y ambientación para la presentación de los mismos. Contamos con mobiliario para alquilar y hacer de tu fiesta algo inolvidable.</p>
            </div>
        </div>
        <div class="col-12 service1">
            <div class=" text-end serviceimg1">
                <img src="{{asset('img/servicios/tortasypostres.jpg')}}" class="img-fluid scrollflow -slide-left -opacity" alt="">
            </div>
            <div class="cajas1s">
                <img src="{{asset('img/servicios/torta.png')}}" class="img-fluid scrollflow -slide-right -opacity" alt="">
                <p class="mt-3 mb-3 servicep scrollflow -slide-right -opacity">Tortas y postres</p>
                <p class="servicedescrip scrollflow -slide-right -opacity">Elaboración de tortas tematizadas para celebraciones, así como postres tradicionales y derivados para compartir con los tuyos.</p>
            </div>
        </div>
    </div>
</div>


@endsection