<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pokedex</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <body>
        <div id="app">
            <!-- The Nav -->
            <pokedex-nav></pokedex-nav>

            <!-- Content -->
            <div class="container mx-auto">
                @yield('content')
            </div>

            <!--- The Footer -->
            <pokedex-footer></pokedex-footer>
        </div>
    </body>
</body>
</html>
