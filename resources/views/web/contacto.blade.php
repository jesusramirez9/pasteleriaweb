@extends('layouts.weblayout')
@section('scripts')
<script>
    $(document).on('input', '.input-number', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>
@endsection
@section('content')



<div class="banner_contacto animate__animated animate__fadeIn">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/contacto/banner.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-contact d-none d-md-block">
                    <p>Para mayor información contáctanos al WhatsApp 948 147 369 Horario de atención: Lun-Vie de 12.00 a 23.00 hrs Sáb: 10.00 a 18.00 hrs Domingos: cerrado</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MENSAJE --}}
@isset(request()->msg)
<div class="col-12 col-md-6 mx-auto pt-4">
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <strong>Tus datos se enviaron correctamente, en breve se contactarán contigo.</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="color:white;" >X</button>
    </div>
</div>
@endisset

@if ($errors->any())
<div class="col-12 col-md-6 mx-auto pt-4">
    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Por favor completa los datos del formulario.</strong>
    </div>
</div>
@endif

<div class="banner_txt_contact">
<p>Para mayor información contáctanos al WhatsApp 948 147 369 Horario de atención: Lun-Vie de 12.00 a 23.00 hrs Sáb: 10.00 a 18.00 hrs Domingos: cerrado</p>
<hr>
</div>
<div class="section2_contact">
    <div class="container container_contact_2 tama_tp">
        <div class="row tama_tp np nm">
            <div class="col-12 col-md-12 col-lg-6 col-sm-6 col-xxl-6 np contact_row1 ">
                <p class="bolder tama_tp title_contact ">CONTÁCTANOS:</p>
                <form class="needs-validation tama_tp" action="{{url('/contacto')}}" method="POST" novalidate>
                    @csrf
                    <div class="row np nm">
                        <div class="col-sm-6 np  space_cotstr">
                            <div class="form-group form_contact">
                                <input id="validationCustom01" type="text" name="form_nombre" class="form-label form_nombre form-control @error('form_nombre') is-invalid @enderror" placeholder="Nombre(s)" value="{{ old('form_nombre') }}" required>
                                <div class="invalid-feedback">Campo requerido.</div>
                                <!-- <div class="valid-feedback">
                                    Campo completado !
                                </div> -->
                            </div>
                        </div>
                        <div class="col-sm-6 np  space_cotstr">
                            <div class="form-group form_contact">
                                <input type="text" name="form_apellido" class="form-label form_apellido form-control @error('form_apellido') is-invalid @enderror" placeholder="Apellidos" value="{{ old('form_apellido') }}" required>
                                <div class="invalid-feedback">Campo requerido.</div>
                                <!-- <div class="valid-feedback">
                                    Campo completado !
                                </div> -->
                            </div>
                        </div>
                        <div class="col-sm-6 np space_cotstr">
                            <div class="form-group form_contact">
                                <input type="email" name="form_email" class="form-label form-control @error('form_email') is-invalid @enderror" placeholder="Correo electrónico" value="{{ old('form_email') }}" required>
                                <div class="invalid-feedback">Campo requerido o email inválido.</div>
                                <!-- <div class="valid-feedback">
                                    Campo completado !
                                </div> -->
                            </div>
                        </div>
                        <div class="col-sm-6 np space_cotstr">
                            <div class="form-group form_contact">
                                <input type="number" maxlength="9" name="form_telefono" class="form-label form-control input-number @error('form_telefono') is-invalid @enderror" placeholder="Teléfono" value="{{ old('form_telefono') }}" required>
                                <div class="invalid-feedback">Campo requerido o no es un número de teléfono.</div>
                                <!-- <div class="valid-feedback">
                                    Campo completado !
                                </div> -->
                            </div>
                        </div>
                        <div class="col-sm-12 np  space_cotstr">
                            <div class="form-group form_contact">
                                <textarea name="form_comentario" class="form-label form-control @error('form_comentario') is-invalid @enderror" rows="5" placeholder="Mensaje" required>{{ old('form_comentario') }}</textarea>
                                <div class="invalid-feedback">Campo requerido.</div>
                                <!-- <div class="valid-feedback">
                                    Campo completado !
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 tama_tp btn_enviar text-end">
                        <button type="submit" id="button_enviar" class=" btn_enlace btn hvr-grow btn-primary btn_enviar1">Enviar</button>
                    </div>
                </form>
                
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-sm-6 np nm  col-xxl-6 mt-3">
                <div class="mapa_contacto ">

                        <iframe class="img_prodct_Detalle" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.7389826192025!2d-77.10558468483653!3d-12.0614716914575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cbe1f1e721e7%3A0x9347134c0c78dd7c!2sCalle%2053B%2C%20Bellavista%2007011!5e0!3m2!1ses!2spe!4v1627609613218!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class=" np nm tama_tp">
                    <div class="np nm nuestros_datos">
                    <p class="scrollflow -slide-left -opacity">ESCRÍBENOS</p>
                    <div class="d-flex flex-row bd-highlight mb-3">
                     <div class=" p-2 bd-highlight"><img src="{{asset('img/contacto/tel.png')}}" class="scrollflow -slide-right -opacity" alt=""></div>
                        <div class="pt-2 bd-highlight rojo_bls scrollflow -slide-right -opacity">Cel.:  948 147 369</div>
                    </div>
                    </div>
                    <p class="rojo_bls scrollflow -slide-right -opacity"><img src="{{asset('img/contacto/msj.png')}}" class="px-2 scrollflow -slide-right -opacity" alt="">Correo.: pedidos@coqueteosantojitos.com.pe</p>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection