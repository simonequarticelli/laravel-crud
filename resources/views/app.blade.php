<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page_title', 'prima_crud')</title>
    {{-- asset --> parte dalla cartella public --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
  </head>
  <body>
    @include('partials._navbar')
    @yield('content')
  </body>
</html>
