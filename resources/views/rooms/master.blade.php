<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css1/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <script href="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
    @include('rooms.nav')
    @yield('content')
    @include('rooms.footer')

</body>
</html>