@extends('layouts.weblayout')
@section('content')


<div class="banner_catalogo animate__animated animate__fadeIn">
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


<div class="catalogo container">
    <div class="item_categoria_Catalogo align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="btn_categoria nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Postres</button>
            <button class="btn_categoria nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Bodas</button>
            <button class="btn_categoria nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Infantiles</button>
            <button class="btn_categoria nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Bocaditos</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row">
                    <div class="col-sm-12 col-xl-12 col-xxl-12">
                        <div class="row">
                            @foreach ($catalogo2 as $catalogue)
                            <div class="col-sm-3 col-12 col-xl-3  producto_torta scrollflow -slide-top -opacity">
                                <a href="{{route('catalogo.show', $catalogue->id )}}">
                                    <div class="img-producto" style="background-image: url('<?php echo url('/img/catalogo/' . $catalogue->imagen) ?>');"></div>
                                    <p class="title-producto mt-2">{{$catalogue->titulo}}</p>
                                    <hr>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="row">
                    <div class="col-sm-12 col-xl-12 col-xxl-12">
                        <div class="row">
                            @foreach ($catalogo as $catalogue)
                            <div class="col-sm-3 col-12 col-xl-3 producto_torta scrollflow -slide-top -opacity">
                                <a href="{{route('catalogo.show', $catalogue->id )}}">
                                    <div class="img-producto" style="background-image: url('<?php echo url('/img/catalogo/' . $catalogue->imagen) ?>');"></div>
                                    <p class="title-producto mt-2">{{$catalogue->titulo}}</p>
                                    <hr>
                                </a>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="row">

                    @foreach ($catalogo3 as $catalogue)
                    <div class="col-sm-3 col-12 col-xl-3 producto_torta scrollflow -slide-top -opacity">
                        <a href="{{route('catalogo.show', $catalogue->id )}}">
                        <div class="img-producto" style="background-image: url('<?php echo url('/img/catalogo/' . $catalogue->imagen) ?>');"></div>    
                        
                            <p class="title-producto mt-2">{{$catalogue->titulo}}</p>
                            <hr>
                        </a>
                    </div>

                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="row">
                    @foreach ($catalogo4 as $catalogue)
                    <div class="col-sm-3 col-12 col-xl-3 producto_torta scrollflow -slide-top -opacity">
                        <a href="{{route('catalogo.show', $catalogue->id )}}">
                        <div class="img-producto" style="background-image: url('<?php echo url('/img/catalogo/' . $catalogue->imagen) ?>');"></div>    
                        <!-- <img src="{{asset('img/catalogo/producto-01.jpg')}}" class="img-fluid" alt=""> -->
                            <p class="title-producto mt-2">{{$catalogue->titulo}}</p>
                            <hr>
                        </a>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection