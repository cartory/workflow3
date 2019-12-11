<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- PAGE TITLE --}}
    <title>@yield('title')</title>
    {{-- Styles --}}
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <header class="header">
        @include('layouts.menu')
    </header>
    <main class="content">
        @yield('content')
    </main>
    <footer class="page-footer orange">
        @include('index.footer')
    </footer>
    {{-- Scripts --}}
    <link href="{{ asset('js/materialize.min.js') }}" rel="stylesheet">
    @stack('scripts')
</body>
</html>