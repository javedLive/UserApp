<!DOCTYPE html>
<html>
  <head>
    <title> User App </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div id="app">
      <Myheader></Myheader>
      <Myfooter></Myfooter>
    </div>
    <script src="{{asset('js/app.js')}}">
    </script>
  </body>
</html>