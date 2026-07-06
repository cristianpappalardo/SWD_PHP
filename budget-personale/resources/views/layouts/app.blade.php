<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'La mia app')</title>

    <!-- CSS incluso ovunque -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

    @stack('styles') {{-- per CSS extra specifici di singole pagine --}}
</head>

<body>

    <nav>
        <!-- la tua navbar -->
    </nav>

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>
