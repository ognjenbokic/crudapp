<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <script src="{{asset('js/app.js')}}"></script>
    <title>Aplikacija</title>
</head>

    <body>
        @include('partial.navbar')
    <div class="container">
        @include('greske.svegreske')
        @yield('sadrzaj')
    </div>
        @include('partial.footer')
    </body>
    
</html>