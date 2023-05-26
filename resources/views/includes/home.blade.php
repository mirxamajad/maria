<!DOCTYPE html>
<html lang="zxx">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Seaside Hotel</title>
	{{--  <link rel="canonical" href="https://madebydesignesia.com/themes/seaside/index.html" />  --}}
        <link rel="icon" href="{{ asset('assets/logos/favicon.ico') }}" type="image/gif" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- CSS Files
        ================================================== -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" id="bootstrap">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}" type="text/css">
        <!-- supersized -->
        <link rel='stylesheet' href="{{ asset('assets/js/supersized/css/supersized.css') }}" type='text/css'>
        <link rel='stylesheet' href="{{ asset('assets/js/supersized/theme/supersized_shutter.css') }}" type='text/css'>
        <!-- color scheme -->
        <link rel="stylesheet" href="{{ asset('assets/css/colors/brown.css') }}" type="text/css" id="colors">
        @yield('stlye')
    </head>
    <body>
        @include('includes.header')
        @yield('content')

        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/designesia.js') }}"></script>
        <script>

        </script>
        @yield('scripts')

    </body>
</html>
