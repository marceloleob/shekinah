
<header id="header" class="w-100 bg_white nav-on-top">
    {{-- Top Header Start --}}
    @include('common.top-header')
    {{-- Top Header Start --}}

    {{-- Nav Header Start --}}
    <div class="main_header_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light w-100">
                        <a class="navbar-brand" href="{!! route('home') !!}">
                            <img class="nav-logo" src="{!! asset('images/logo-header.png') !!}" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link" href="{!! route('home') !!}">Início</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{!! route('advertise') !!}">Anunciar meu Imóvel</a></li>
                                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="blog-grid-classic.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{!! route('realestate') !!}">Gestão Imobiliária</a></li>
                                        <li><a class="dropdown-item" href="{!! route('legaladvice') !!}">Consultoria Jurídica</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{!! route('about') !!}">Sobre Shekinah</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{!! route('contact') !!}">Contato</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    {{-- Nav Header Start --}}
</header>
