
    {{-- Top Header Start --}}
    <div class="top_header_1 bg_secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <div class="top_left">
                        <span class="text_creci">CRECI: 190307</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-7">
                    <div class="top_right dropdown_1 d-flex float-right">
                        {{--
                        <li class="dropdown language-menu">
                            <a href="#" class="dropdown-toggle text-uppercase" data-toggle="dropdown"><img src="{!! asset('images/icons/' . strtolower(App::getLocale()) . '.png') !!}" alt="" /> {!! App::getLocale() !!}</a></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{!! url('locale', 'en') !!}"><img src="{!! asset('images/icons/en.png') !!}" alt="" /> EN </a></li>
                                <li><a class="dropdown-item" href="{!! url('locale', 'pt-br') !!}"><img src="{!! asset('images/icons/pt-br.png') !!}" alt="" /> PT-BR </a></li>
                            </ul>
                        </li>
                        --}}
                        @guest
                            <ul class="registration">
                                {{-- <li><a href="{!! route('register') !!}" class="toogle_btn"><i class="fa fa-user-plus"></i> &nbsp; Cadastrar</a></li> --}}
                                <li><a href="{!! route('login') !!}" class="toogle_btn"><i class="fa fa-sign-in-alt"></i> &nbsp; Minha conta</a></li>
                            </ul>
                        @else
                            <ul class="registration">
                                <li><a href="{!! route('dashboard') !!}" class="toogle_btn"><i class="fa fa-user"></i> &nbsp; {{ Auth::user()->name }}</a></li>
                                <li><a href="{!! route('logout') !!}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="toogle_btn"><i class="fa fa-sign-out-alt"></i> &nbsp; Sair</a></li>
                            </ul>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Top Header Start --}}
