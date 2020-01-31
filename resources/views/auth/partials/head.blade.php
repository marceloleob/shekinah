<head>
    {{-- GOOGLE ANALYTICS --}}
    @include('common.analytics')
    {{-- GOOGLE ANALYTICS --}}

	<meta charset="UTF-8" />
	{{-- RESPONSIVE TAG --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>{!! Config::get('app.name') !!}</title>

    {{-- METAS TAG --}}
	<meta name="author" content="{!! config('constants.DEVELOPER_NAME') . ' <' . config('constants.DEVELOPER_EMAIL') . '>' !!}" />
	<meta name="copyright" content="{!! config('constants.COMPANY_NAME') !!}" />
    <meta name="csrf-token" content="{!! csrf_token() !!}" />

	{{-- ICO --}}
	<link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon">
	<link rel="icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon">

	{{-- Reseta CSS --}}
	{!! Html::style('css/reset.css') !!}

	{{-- CSS LIBS --}}
	{!! Html::style('css/libs/bootstrap-4.1.3.min.css') !!}
	{!! Html::style('css/libs/bootstrap-select.min.css') !!}
	{!! Html::style('css/libs/fontawesome-all-5.5.0.min.css') !!}
	{!! Html::style('css/libs/layerslider.css') !!}
    {!! Html::style('css/libs/jslider.css') !!}

    {{-- WEBFONTS LIBS --}}
    <link media="all" type="text/css" rel="stylesheet" href="{!! asset('webfonts/flaticon/flaticon.css') !!}">

	{{-- CSS CUSTOM --}}
	{!! Html::style('css/style.css') !!}

	{{-- CSS LIBS --}}
    {!! Html::style('css/color/lilac.css') !!}
    {!! Html::style('css/libs/responsive.css') !!}
    {!! Html::style('css/libs/loader.css') !!}
    {!! Html::style('css/libs/settings.css') !!}

</head>
