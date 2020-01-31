<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', strtolower(App::getLocale())) }}">

@include('site.partials.head')

<body class="page-load">

<div id="page_wrapper" class="container-fluid">
    <div class="row">
        {{-- HEADER --}}
        @include('site.partials.header')

        {{-- SLIDERS --}}
        @include('site.partials.search')

        {{-- CONTENT --}}
        @yield('content')

        {{-- FOOTER --}}
        @include('site.partials.footer')
    </div>
</div>

{{-- SCRIPTS --}}
@include('site.partials.scripts')

</body>
</html>
