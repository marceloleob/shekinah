@extends('auth.layouts.main')

@section('content')

    {{-- FORGOT PASSWORD --}}
    <section class="full_row header_margin py_80 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg_white sign_in_up" role="document">
                        <div class="header bg_primary">
                            <h4 class="inner-title text_white">Esqueci minha senha</h4>
                        </div>
                        <div class="body">
                            <p>Preencha seu e-mail, clique no botão "Resetar minha senha" e vamos enviar um link para seu e-mail.</p>
                            {!! Form::open(['id' => 'form-login', 'route' => 'password.email', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
                                <div class="form-group">
                                    {!! Form::email('email', '', ['class' => 'form-control text', 'placeholder' => 'E-mail', 'autocomplete' => 'email', 'autofocus' => true, 'required' => true]) !!}
                                    {!! Form::errorField('email', $errors) !!}
                                </div>
                                <div class="form-group form-button">
                                    {!! Form::button('<i class="fa fa-unlink"></i> &nbsp; Resetar minha senha', ['type' => 'submit', 'class' => 'btn btn_primary_bg']) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                        <div class="footer">Clique aqui e leia nossos <a href="{!! route('terms') !!}">Termos e Condições de Uso</a>.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FORGOT PASSWORD --}}

@endsection
