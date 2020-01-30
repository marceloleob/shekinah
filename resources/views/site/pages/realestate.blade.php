@extends('site.layouts.pages')

@section('title-page', ' - Gestão Imobiliária')

@section('content')

    {{-- BREADCRUMB --}}
    <section id="breadcrumb" class="full_row header_margin bg_img_5 py_80 overlay_1 page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page_banner">
                        <h3 class="title text_white d-table float-left">Gestão Imobiliária</h3>
                        <ul class="page_location float-right">
                            <li><a href="{!! route('home') !!}">Início</a> </li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li><span>Gestão Imobiliária</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- BREADCRUMB --}}

    {{-- ADVOGADOS --}}
    <section class="full_row py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <h2 class="mb-4">Precisando de <span class="text_primary">Corretor de Imóveis</span>?</h2>
                    <p>Contamos com uma equipe de corretores altamente capacitados, somos especializados em:</p>
                </div>
                <div class="col-lg-4 col-sm-12 right">
                    <i class="fas fa-home fa-7x icon-color"></i>
                </div>
            </div>
        </div>
    </section>
    {{-- ADVOGADOS --}}

    {{-- PREFEITURA / FAMILIA / CIVIL --}}
    <section class="full_row py_60 bg_white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <ul class="icon_list mt-2">
                        <li>Avaliamos seu imóvel para que você tenha certeza do quanto vale seu patrimônio;</li>
                        <li>Disponibilizamos nossa plataforma on-line para divulgar seu imóvel sem custos adicionais;</li>
                        <li>Ajudamos você a encontrar seu imóvel dos sonhos, na região que você tanto deseja.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- PREFEITURA / FAMILIA / CIVIL --}
    {{-- Minha Casa Minha Vida – Aqui cuidamos de pessoas, de histórias de vida, de moradias, de lares, de desejos e realizações. Com minha casa minha vida, fica mais fácil de você conseguir realizar seu sonho da casa própria! --}

    {{-- GESTAO IMOBILIARIA --}}
    <section class="full_row py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title_row text-center mb-5">
                        <h3 class="aboutus_subtitle mb-4">Conte com a <span class="text_primary">SHEKINAH</span> para vender, alugar ou comprar um imóvel</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- GESTAO IMOBILIARIA --}}

@stop
