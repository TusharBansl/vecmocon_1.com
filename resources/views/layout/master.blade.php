<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="Vecmocon Technologies Pvt Ltd">
    <meta name="keywords" content="">

    <title>{{ $title ?? 'Vecmocon Technologies' }}</title>
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @yield('extracss')
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body id="{{ $id ?? 'home-page'}}" class="{{ $style ?? '' }}">

@yield('content')

<!-- script includes -->
    <script src="{{mix('/js/app.js')}}"></script>
    @yield('extrajs')

</body>
</html>
