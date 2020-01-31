@extends('auth.layouts.main')

@section('content')

    {{-- SIGN IN ACCOUNT --}}
    <section class="full_row header_margin py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg_white sign_in_up" role="document">
                        <div class="header bg_primary">
                            <h4 class="inner-title text_white">Acessar a área administrativa</h4>
                        </div>
                        <div class="body">
                            <p>Para acessar nosso sistema administrativo, preencha seus dados de acesso ou <a href="{!! route('register') !!}">clique aqui</a> para criar uma nova conta.</p>
                            {!! Form::open(['id' => 'form-login', 'route' => 'login', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
                                <div class="form-group">
                                    {!! Form::email('email', '', ['class' => 'form-control text', 'placeholder' => 'E-mail']) !!}
                                    {!! Form::errorField('email', $errors) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Senha']) !!}
                                    {!! Form::errorField('password', $errors) !!}
                                </div>
                                <div class="form-group form-button">
                                    {!! Form::button('<i class="fa fa-sign-in-alt"></i> &nbsp; Entrar', ['type' => 'submit', 'class' => 'btn btn_primary_bg']) !!}
                                </div>
                            {!! Form::close() !!}
                            <div class="password_recovery">Esqueceu sua senha? <a href="{!! route('password.request') !!}">Clique aqui</a>.</div>
                        </div>
                        <div class="footer">Clique aqui e leia nossos <a href="{!! route('terms') !!}">Termos e Condições de Uso</a>.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SIGN IN ACCOUNT --}}

@endsection
