<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta name="csrf-token" content="{{ csrf_token() }}">
  <head>
    <meta charset="utf-8">
    <title>Backend-Focused Version</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

  </head>
  <body>
    <div class="container">
      @yield('main')
    </div>
    <script src="{{ asset('resources/js/app.js') }}" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
  </body>
</html>
