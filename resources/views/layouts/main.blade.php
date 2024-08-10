<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style type="text/css">
        @font-face {
            font-family: gotham;
            src: url('{{ url('assets/fonts/Gotham-Medium.otf') }}');
        }

        @font-face {
            font-family: gotham-thin;
            src: url('{{ url('assets/fonts/gotham-thin.otf') }}');
        }

        body {
            max-width: 1440px;
            font-family: gotham;
            margin: 0 auto
        }
    </style>

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>

<body>
    <header class="container-md">
        @include('components.navbar')
    </header>

    <main>
        @yield('contents')
    </main>

    <footer class="container-fluid bg-black text-white" style="margin: 0">
        @include('components.footer')
    </footer>
</body>

</html>
