@extends('layouts.weblayout')
@section('content')

<div class="banner_nosotros animate__animated animate__fadeIn">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/nosotros/banner.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-contact d-none d-md-block">
                    <p>Coqueteos Antojitos postres y tortas hechos en casa, un Antojito que coquetea con tu paladar.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section2_nosotros_rp">
    <div class="row np nm">
        <div class="col-12 np nm">
            <div class=" ">
                <img src="{{asset('img/nosotros/conocenos.jpg')}}" class="img-fluid" alt="conocenos coqueteos y antojitos">
            </div>
            
        </div>
        <div class="col-12 np nm">
        <div class=" caja_amarilla_t">
                <img src="{{asset('img/nosotros/icono-torta.png')}}" class="img-fluid" alt="">
                <p class="mt-3 mb-3 nosp scrollflow -slide-left -opacity">Sobre Nosotros</p>
                <p class="nosdescrip scrollflow -slide-right -opacity">Coqueteos antojitos nace en Agosto 2016 preparando postres, luego nos extendimos con tortas para cumpleaños, complementando con bocaditos hechos en casa. Actualmente ofrecemos Mesas Temáticas, Mesas de postres para bodas y celebraciones especiales, así como el alquiler de mobiliario y accesorios ofreciendo paquetes completos de atención.</p>
            </div>
        </div>
    </div>
</div>
<div class="section2nosotros container">
    <div class="row np nm">
        <div class="col-12 col-md-6 nos_1_1">
            <div class="cajas1n">
                <img src="{{asset('img/nosotros/icono-torta.png')}}" class="img-fluid" alt="">
                <p class="mt-3 mb-3 nosp">Sobre Nosotros</p>
                <p class="nosdescrip">Coqueteos antojitos nace en Agosto 2016 preparando postres, luego nos extendimos con tortas para cumpleaños, complementando con bocaditos hechos en casa. Actualmente ofrecemos Mesas Temáticas, Mesas de postres para bodas y celebraciones especiales, así como el alquiler de mobiliario y accesorios ofreciendo paquetes completos de atención.</p>
            </div>
        </div>
        <div class="col-md-6 nos_1_2">
        <div class=" text-center">
                <img src="{{asset('img/nosotros/conocenos.jpg')}}" class="img-fluid img_prodct_Detalle" alt="conocenos coqueteos y antojitos">
            </div>
        </div>
    </div>
</div>

<div class="section3nosotros container">
    <div class="row np nm">
        <div class="col-sm-5 ">
            <div class="mision">
                <p class="misionp scrollflow -slide-left -opacity">Misión</p>
                <p class="justificado misiondescrip scrollflow -slide-right -opacity">Nuestra pequeña aventura surge ante la necesidad de unirse para compartir, cuando se desea celebrar una fecha especial con la familia y las amistades, agasajar a un grupo reducido o mayor de personas, organizar un evento corporativo, o, simplemente, atender a alguien especial, ofrecemos una atención personalizada con garantía de satisfacción.</p>
            </div>
        </div>
        <div class="col-sm-2 text-center d-none d-md-block">
            <img src="{{asset('img/nosotros/linea-diagonal.png')}}" alt="">
        </div>
        <div class="col-sm-5">
            <div class="vision">
            <p class="visionp scrollflow -slide-left -opacity">Visión</p>
            <p class="justificado visiondescrip scrollflow -slide-right -opacity">Convertirnos en un apoyo para tus eventos, ofreciendo nuestros servicios completos y permitiendo que disfrutes simplemente sin preocupaciones, todo nuestro trabajo se realiza con dedicación, cariño y delicadeza garantizando productos de primera calidad y recién elaborados, cuidamos cada detalle pues lo hacemos como si fuera para nosotros mismos.</p>
            </div>
        </div>
    </div>
</div>

@endsection