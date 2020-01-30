@extends('auth.layouts.main')

@section('content')

    {{-- REGISTER NEW ACCOUNT --}}
    <section class="full_row header_margin py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg_white sign_in_up" role="document">
                        <div class="header bg_primary">
                            <h4 class="inner-title text_white">Criar uma nova conta</h4>
                        </div>
                        <div class="body">
                            <p>Preencha seus dados para ter acesso ao nosso sistema administrativo.</p>
                            {!! Form::open(['id' => 'form-login', 'route' => 'register', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
                                <div class="form-group">
                                    {!! Form::text('name', '', ['class' => 'form-control text', 'placeholder' => 'Preencha seu nome']) !!}
                                    {!! Form::errorField('name', $errors) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::email('email', '', ['class' => 'form-control text', 'placeholder' => 'E-mail']) !!}
                                    {!! Form::errorField('email', $errors) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Senha']) !!}
                                    {!! Form::errorField('password', $errors) !!}
                                </div>
                                <div class="form-group form-button">
                                    {!! Form::button('<i class="fa fa-user-plus"></i> &nbsp; Cadastrar', ['type' => 'submit', 'class' => 'btn btn_primary_bg']) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                        <div class="footer">Clique aqui e leia nossos <a href="{!! route('terms') !!}#">Termos e Condições de Uso</a>.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- REGISTER NEW ACCOUNT --}}

@endsection
