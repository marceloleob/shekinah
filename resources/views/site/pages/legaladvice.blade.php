@extends('site.layouts.pages')

@section('title-page', ' - Consultoria Jurídica')

@section('content')

    {{-- BREADCRUMB --}}
    <section id="breadcrumb" class="full_row header_margin bg_img_5 py_80 overlay_1 page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page_banner">
                        <h3 class="title text_white d-table float-left">Consultoria Jurídica</h3>
                        <ul class="page_location float-right">
                            <li><a href="{!! route('home') !!}">Início</a> </li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li><span>Consultoria Jurídica</span> </li>
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
                    <h2 class="mb-4">Precisando de <span class="text_primary">Advogados</span>?</h2>
                    <p>Contamos com uma equipe de advogados altamente capacitados, somos especializados em:</p>
                </div>
                <div class="col-lg-4 col-sm-12 right">
                    <i class="fas fa-gavel fa-7x icon-color"></i>
                </div>
            </div>
        </div>
    </section>
    {{-- ADVOGADOS --}}

    {{-- PREFEITURA / FAMILIA / CIVIL --}}
    <section class="full_row my_60 bg_white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h3 class="mb-2 mt-5 center">Prefeitura</h3>
                    <ul class="icon_list mt-2">
                        <li>Auto de Licença de Funcionamento;</li>
                        <li>TPUC (Termo de Permissão de Uso);</li>
                        <li>AVCB (Auto de Vistoria / Corpo de Bombeiros);</li>
                        <li>Alvarás de Execução / Funcionamento;</li>
                        <li>Fiscalização / Geral;</li>
                        <li>PSIU;</li>
                        <li>Vigilância Sanitária;</li>
                        <li>Alvará de Reforma / Demolição;</li>
                        <li>Alvará de Obras Novas / Desdobramento de Área;</li>
                        <li>Permissão para uso de passeio público;</li>
                        <li>Regularização de edificações;</li>
                        <li>SEHAB / COHAB / Prefeitura.</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <h3 class="mb-2 mt-5 center">Família</h3>
                    <ul class="icon_list mt-2">
                        <li>Divórcios;</li>
                        <li>Conversão de Separação Judicial em Divórcio;</li>
                        <li>Reconhecimento e Dissolução de União Estável;</li>
                        <li>Pensão Alimentícia, Guarda, Visitas;</li>
                        <li>Reconhecimento de Paternidade;</li>
                        <li>Curatela / Tutela / Interdição;</li>
                        <li>Inventário Judicial e Extrajudicial;</li>
                        <li>Testamento / Partilha.</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <h3 class="mb-2 mt-5 center">Cívil</h3>
                    <ul class="icon_list mt-2">
                        <li>Assessoria Jurídica;</li>
                        <li>Empresarial Tributária;</li>
                        <li>Pesquisas Federal, Estadual ou Municipal;</li>
                        <li>Cobrança / Execução / Penhora;</li>
                        <li>Despejo / Revisional de Aluguel;</li>
                        <li>Contratos;</li>
                        <li>Usucapião / Propriedade / Ocupação;</li>
                        <li>Reintegração de Posse / Usufruto;</li>
                        <li>Regularização de Escritura;</li>
                        <li>Certidões Cíveis;</li>
                        <li>Certidões Estaduais;</li>
                        <li>Certidões Municipais;</li>
                        <li>Certidões Criminais;</li>
                        <li>Registros de Imóveis;</li>
                        <li>Condomínio.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- PREFEITURA / FAMILIA / CIVIL --}}

    {{-- GESTAO IMOBILIARIA --}}
    <section class="full_row py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title_row text-center mb-5">
                        <h3 class="aboutus_subtitle mb-4">Conte com a <span class="text_primary">SHEKINAH</span> para ajudar nos processos judiciais</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- GESTAO IMOBILIARIA --}}

@stop
