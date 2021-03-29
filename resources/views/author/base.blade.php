<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    {{-- <link rel="stylesheet" href="{{asset ('js/app.js')}}"> --}}
    {{-- Corretto in: --}}
    <script src="{{asset ('js/app.js')}}" defer></script>
    {{-- N.B.: Il defer fa caricamento asincrono --}}
    <title>Blog - @yield('title')</title>
  </head>
  <body>

    <div class="container">

      <main>
        @yield('content')
      </main>

    </div>

  </body>
</html>
