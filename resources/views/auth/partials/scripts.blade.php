
{{-- HTML5 shim, for IE6-8 support of HTML5 elements --}}
<!--[if lt IE 9]>
    {!! HTML::script('js/html5shiv.min.js') !!}
    {!! Html::script('js/respond.min.js') !!}
<![endif]-->

{{-- JS LIBS / JQUERY --}}
{!! Html::script('js/libs/jquery-3.3.1.min.js', ['defer' => 'defer']) !!}
{{-- JS LIBS / POPPER AND BOOTSTRAP --}}
{!! Html::script('js/libs/popper-1.14.3.min.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/bootstrap-4.3.1.min.js', ['defer' => 'defer']) !!}
{!! Html::script('js/libs/bootstrap-select.min.js', ['defer' => 'defer']) !!}

{{-- JS CUSTOM --}}
@yield('js-custom')
{!! Html::script('js/site/custom.js', ['defer' => 'defer']) !!}
