@extends('site.layouts.pages')

@section('title-page', ' - Sobre nós')

@section('content')

    {{-- BREADCRUMB --}}
    <section id="breadcrumb" class="full_row header_margin bg_img_5 py_80 overlay_1 page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page_banner">
                        <h3 class="title text_white d-table float-left">Sobre Shekinah</h3>
                        <ul class="page_location float-right">
                            <li><a href="{!! route('home') !!}">Início</a> </li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li><span>Sobre Shekinah</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- BREADCRUMB --}}

    {{-- CATEGORIAS --}}
    <section class="full_row py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title_row text-center mb-5">
                        <h3 class="aboutus_subtitle">Atendemos apenas no estado de <span class="text_primary">São Paulo</span></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="aboutus_flaticon text-center mb_30 bg_gray wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <h4 class="py-3 title">Vender</h4>
                        <div class="aboutus_circle"><i class="glyph-icon flaticon-house-for-sale"></i></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="aboutus_flaticon text-center mb_30 bg_gray wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <h4 class="py-3 title">Comprar</h4>
                        <div class="aboutus_circle"><i class="glyph-icon flaticon-pin-a-property-for-buy-or-rent"></i></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="aboutus_flaticon text-center mb_30 bg_gray wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <h4 class="py-3 title">Alugar</h4>
                        <div class="aboutus_circle"><i class="glyph-icon flaticon-rent-hanging-signal"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- CATEGORIAS --}

    {{-- Offer Part Start --}}
    <section class="bg_secondary bg_img_6 full_row">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="who_text py-5">
                        <h2 class="mb-4 text_white">Quem <span class="text_primary">Somos</span></h2>
                        <p>
                            Shekinah é uma empresa que nasceu para ajudar você a encontrar o imóvel de seus sonhos, dentro no seu orçamento! <br />
                            Contamos com a melhor gestão imobiliária do mercado, e profissionais capacitados para ajudar em todos os processos, desde a busca até as assinaturas do contrato. <br />
                            Atendemos em qualquer região dentro do estado de São Paulo (litoral, interior ou capital). <br />
                            Estamos comprometidos em ajudar você a encontrar o melhor imóvel da região, sendo casa, apartamento ou até mesmo um terreno vazio para a construção da casa dos seus sonhos. <br />
                        </p>
                        <ul class="icon_list_2 mt-4">
                            <li>Contamos com uma equipe de advogados altamente capacitados para facilitar todas as tramitações jurídicas para você.</li>
                            <li>Temos parceria com os melhores bancos para simular seu crédito e concluir sua compra financiada, caso precise.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Offer Part Start --}}

    {{-- MSG --}}
    <section class="full_row py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title_row text-center">
                        <h3 class="aboutus_subtitle">Conte com a <span class="text_primary">SHEKINAH</span> para ajudar você nesta importante etapa de sua vida!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- MSG --}}

@stop
