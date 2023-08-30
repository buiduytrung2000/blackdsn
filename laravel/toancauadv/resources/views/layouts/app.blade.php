<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta http-equiv="Cache-control" content="public" />
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <link rel="icon" href="{{ URL::asset('storage\logo32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ URL::asset('storage\logo192.png') }}" sizes="192x192" />
    <title>CÔNG TY CP TẬP ĐOÀN QUẢNG CÁO TOÀN CẦU</title>
    <link href="{{ URL::asset('css/plugins.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>

<body class="dsn-ajax">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>

</html>
