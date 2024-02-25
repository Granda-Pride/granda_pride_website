<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Granda Pride</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body @if (str_replace('_', '-', app()->getLocale()) == 'ar') dir="rtl" @endif>
    <div id="page-wrapper" class="h-full w-full">
        @yield('content')
        @yield('footer')
    </div>
</body>

</html>
