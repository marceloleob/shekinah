@extends('site.layouts.home')

@section('content')

    {{-- CATEGORIAS --}}
    <section class="full_row py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title_row text-center mb-5">
                        <h3 class="title mb-4">Que tipo de imóvel você está procurando?</h3>
                        <div class="sub_title text_secondary">
                            <p>Se você deseja comprar ou alugar uma casa, apartamento ou escritório, está no lugar certo! <br />Nós também trabalhamos com lojas, galpões e até mesmo lotes urbanos e rurais!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="service_item_1 text-center mb_30 bg_gray wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="icon_large icon"><i class="glyph-icon flaticon-home"></i></div>
                        <h4 class="py-3 title">Residenciais</h4>
                        <p>Casas, apartamentos, sobrados, barracões, coberturas, flat, kitchenette, sobrado, etc.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="service_item_1 text-center mb_30 bg_gray wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon_large icon"><i class="glyph-icon flaticon-office"></i></div>
                        <h4 class="py-3 title">Escritórios</h4>
                        <p>Casas comerciais, clínicas, clubes, coworking, prédio, salas, andares, etc.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="service_item_1 text-center mb_30 bg_gray wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="icon_large icon"><i class="glyph-icon flaticon-shop"></i></div>
                        <h4 class="py-3 title">Lojas / Galpão</h4>
                        <p>Conjunto de lojas, estacionamentos, ponto comercial, shopping, etc.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="service_item_1 text-center mb_30 bg_gray wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="icon_large icon"><i class="glyph-icon flaticon-signs"></i></div>
                        <h4 class="py-3 title">Rural</h4>
                        <p>Chácaras, fazendas, haras, hotel fazenda, sítios, lotes urbanos ou rurais, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- CATEGORIAS --}}

    {{-- VENDER IMOVEL --}}
    <section class="full_row py_80 overlay_1 bg_img_3">
        <div class="container">
            <div class="row">
                <div class="banner_1 text-center"> <span class="text_white">Quer vender seu imóvel?</span>
                    <h2 class="title text_white my-4">Ajudamos você a encontrar o melhor cliente para sua propriedade</h2>
                    <a class="btn btn_primary" href="{!! route('advertise') !!}">Divulgue seu Imóvel</a>
                </div>
            </div>
        </div>
    </section>
    {{-- VENDER IMOVEL --}}

    {{-- JURIDICO --}}
    <section class="full_row py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title_row text-center mb-5">
                        <h3 class="title mb-4">Consultoria <span class="text_primary">Jurídica</span></h3>
                        <div class="sub_title text_secondary">
                            <p>Nossa equipe de advogados estão preparados para te auxiliar em diferentes áreas jurídicas, não somente imobiliária, mas também processos cíveis, familiares e públicos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="news_item_1 bg_white mb_30 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="details p_20">
                            <h5 class="title mb-2 center">Prefeitura</h5>
                            <p>Alvarás, permissões, regularizações, licenças, são algumas de nossas diversas especialidades.</p>
                            <a class="btn_link" href="{!! route('legaladvice') !!}">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news_item_1 bg_white mb_30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <div class="details p_20">
                            <h5 class="title mb-2 center">Família</h5>
                            <p>Se está passando por algum tipo de problema familiar que está impedindo você de comprar ou vender seu imóvel, conte com a gente.</p>
                            <a class="btn_link" href="{!! route('legaladvice') !!}">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news_item_1 bg_white mb_30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                        <div class="details p_20">
                            <h5 class="title mb-2 center">Cívil</h5>
                            <p>Registros, certidões, regularizações, contratos, tributações, assessoria jurídicas. Podemos ajudar com isso e muito mais.</p>
                            <a class="btn_link" href="{!! route('legaladvice') !!}">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- JURIDICO --}}

@stop
