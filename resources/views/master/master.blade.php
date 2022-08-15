<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('image')}}/favicon.ico">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @foreach($css_data as $s)
        <link rel="stylesheet" href="{{asset($s)}}">
    @endforeach

    @yield('header-helper')

</head>
<body class="@foreach($body_class as $bc){{ $bc }} @endforeach
noclasswhatsoever">
    @yield('main.helper-header')

    <!-- ? Preloader Start -->
    @yield('main.header')

    @yield('main.content')

    @yield('main.footer')

    <div class="modal-wrapper">
        @yield('main.modal-wrapper')
    </div>

<!-- JS here -->
    @foreach($js_data as $j)
        <script src="{{asset($j)}}"></script>
    @endforeach

    @yield('main.helper-footer')
</body>
</html>
