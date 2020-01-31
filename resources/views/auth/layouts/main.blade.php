<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', strtolower(App::getLocale())) }}">

@include('auth.partials.head')

<body class="page-load">

<div id="page_wrapper" class="container-fluid">
    <div class="row">
        {{-- HEADER --}}
        @include('auth.partials.header')

        {{-- CONTENT --}}
        @yield('content')

        {{-- FOOTER --}}
        @include('auth.partials.footer')
    </div>
</div>

{{-- SCRIPTS --}}
@include('auth.partials.scripts')

</body>
</html>
