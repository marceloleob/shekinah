@extends('site.layouts.pages')

@section('title-page', ' - Contato')

@section('js-custom')
    {!! Html::script('https://www.google.com/recaptcha/api.js?render=' . env('CAPTCHA_WEBSITE_KEY')) !!}
    {!! Html::script('js/forms/jquery.validate.min.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/forms/jquery.validate.message.' . strtolower(App::getLocale()) . '.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/forms/jquery.maskedinput.min.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/forms/validations.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/forms/masks.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/forms/advertise.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/libs/recaptcha-v3.js', ['defer' => 'defer']) !!}
@stop

@section('content')

    {{-- BREADCRUMB --}}
    <section id="breadcrumb" class="full_row header_margin bg_img_5 py_80 overlay_1 page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page_banner">
                        <h3 class="title text_white d-table float-left">Contato</h3>
                        <ul class="page_location float-right">
                            <li><a href="{!! route('home') !!}">Início</a> </li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li><span>Contato</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- BREADCRUMB --}}

    {{-- CONTACT --}}
    <section id="contact" class="full_row py_40 bg_gray">
        <div class="container">
            <h2 class="mb-4">Fale com <span class="text_primary">a gente!</span></h2>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    {!! Form::boxMessage($errors) !!}
                </div>
                <div class="col-md-6">
                    <div class="contact_area">
                        <p>Estamos disponíveis para esclarecer qualquer dúvida que você tenha em relação a nossa empresa. Deseja vender ou alugar seu imóvel, mas tem alguma dúvida? Nos envie uma mensagem que retornaremos assim que possível.</p>
                            {!! Form::open(['id' => 'form-contact', 'route' => 'contact', 'method' => 'POST', 'role' => 'form', 'class' => 'form contact_message']) !!}
                            <div class="row">
                                <div class="form-group col-md-12 col-sm-6">
                                    {!! Form::text('name', old('name'), ['class' => 'form-control text', 'placeholder' => 'Nome completo']) !!}
                                    {!! Form::errorField('name', $errors) !!}
                                </div>
                                <div class="form-group col-md-8 col-sm-6">
                                    {!! Form::text('email', old('email'), ['class' => 'form-control text', 'placeholder' => 'E-mail']) !!}
                                    {!! Form::errorField('email', $errors) !!}
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    {!! Form::text('phone', old('phone'), ['class' => 'form-control phone phoneOnly', 'placeholder' => 'Telefone']) !!}
                                    {!! Form::errorField('phone', $errors) !!}
                                </div>
                                <div class="form-group col-md-12 col-sm-6">
                                    {!! Form::text('subject', old('subject'), ['class' => 'form-control text', 'placeholder' => 'Assunto']) !!}
                                    {!! Form::errorField('subject', $errors) !!}
                                </div>
                                <div class="form-group col-md-12 col-sm-12">
                                    {!! Form::textarea('text', old('text'), ['class' => 'form-control textarea', 'placeholder' => 'Seu texto', 'rows' => '5']) !!}
                                    {!! Form::errorField('text', $errors) !!}
                                </div>
                                <div class="form-group col-md-12 col-sm-12">
                                    {!! Form::hidden('site_key', env('CAPTCHA_WEBSITE_KEY'), ['id' => 'site_key']) !!}
                                    {!! Form::hidden('recaptcha', '', ['id' => 'recaptcha']) !!}
                                    {!! Form::button('<i class="fa fa-send-o"></i> Enviar', ['type' => 'submit', 'class' => 'submit btn btn_primary']) !!}
                                </div>
                                <div class="form-group col-md-12 col-sm-12 py_20">
                                    <h5>*Atendemos apenas no estado de <span class="text_primary">São Paulo</span></h5>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="contact_right">
                                <h5 class="mb-2">Nosso endereço</h5>
                                <p>Avenida Conceição, 2380, Vila Paiva, <br /> São Paulo - SP</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="contact_right">
                                <h5 class="mb-2">Telefones</h5>
                                <p>(+55) 11 99869-0914 <br /> (+55) 11 97394-4190</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact_right">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe width="540" height="440" id="gmap_canvas" src="https://maps.google.com/maps?q=Avenida%20Concei%C3%A7%C3%A3o%2C%202380%2C%20Vila%20Paiva%2C%20S%C3%A3o%20Paulo%20-%20SP&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- CONTACT --}}

@stop
