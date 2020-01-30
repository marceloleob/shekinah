
    {{-- REGISTER SECTION --}}
    <section class="full_row py-5 bg_primary">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="reg_banner">
                        <h4 class="title mb-2">Está com dificuldades para vender ou alugar seu imóvel?</h4>
                        <span class="text_white">Clique no botão ao lado, preencha o nosso formulário e nossa equipe vai entrar em contato com você.</span> </div>
                </div>
                <div class="col-md-3">
                    <div class="float-right"> <a href="{!! route('advertise') !!}" class="btn btn_default">Anunciar meu imóvel</a> </div>
                </div>
            </div>
        </div>
    </section>
    {{-- REGISTER SECTION --}}

    {{-- FOOTER SECTION --}}
    <section class="full_row py_80 bg_secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="footer_widget company_info">
                        <div class="widget_head"><a href="{!! route('home') !!}"><img class="logo-bottom" src="{!! asset('images/logo-footer.png') !!}" alt=""></a></div>
                        <p>Somos a única empresa especializada em Gestão Imobiliária e Consultoria Jurídica, podemos te ajudar a vender ou alugar seu imóvel e/ou comprar ou alugar o imóvel de seus sonhos, além de auxiliar e resolver processos cíveis, familiares e públicos com nossa equipe de advogados.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="footer_widget get_in_touch">
                        <div class="widget_head">
                            <h4 class="widget_title">Fale com a gente!</h4>
                        </div>
                        <ul>
                            <li> <i class="fas fa-map-marker-alt"></i>
                                <h6 class="text_white mb-2">Nosso endereço</h6>
                                <span>Avenida Conceição cj.2380, Vila Paiva, São Paulo - SP</span>
                            </li>
                            <li> <i class="fa fa-phone" aria-hidden="true"></i>
                                <h6 class="text_white mb-2">Contato</h6>
                                <span>(+55) 11 99869-0914 &nbsp; &nbsp; | &nbsp; &nbsp; (+55) 11 97394-4190</span>
                            </li>
                            <li> <i class="far fa-envelope"></i>
                                <h6 class="text_white mb-2">Email</h6>
                                <span>contato@inabatista.com.br</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="footer_widget quick_link">
                        <div class="widget_head">
                            <h4 class="widget_title">Mapa do Site</h4>
                        </div>
                        <ul>
                            <li><a href="{!! route('home') !!}">Início</a></li>
                            <li><a href="{!! route('advertise') !!}">Anunciar meu Imóvel</a></li>
                            <li><a href="{!! route('realestate') !!}">Gestão Imobiliária</a></li>
                            <li><a href="{!! route('legaladvice') !!}">Consultoria Jurídica</a></li>
                            <li><a href="{!! route('about') !!}">Sobre Shekinah</a></li>
                            <li><a href="{!! route('contact') !!}">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FOOTER SECTION --}}

    {{-- BOTTON SECTION --}}
    @include('common.botton-footer')
    {{-- BOTTON SECTION --}}
