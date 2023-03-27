<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.title-meta')
    @include('layouts.head')
</head>

@section('body')

    <body class="authentication-bg">
    @show
    <div id="app">
        @yield('content')
        @include('layouts.vendor-scripts')
    </div>
</body>

</html>
