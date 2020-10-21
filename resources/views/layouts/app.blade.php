<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body>
        <div id="app">
            <div class="container position-relative">
                @include('partials.topnav')
            </div>
            @yield('content')
            <loading></loading>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
