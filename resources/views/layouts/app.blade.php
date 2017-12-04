<!doctype html>
<html>
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Attached CSS -->
    <link rel="stylesheet" href="{{ asset('application/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('application/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('application/css/reset.css') }}">
    <script src="https://use.fontawesome.com/247a94ba50.js"></script>
    <link rel="shortcut icon" href="{{ asset('application/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('application/images/favicon.ico') }}" type="image/x-icon">


    <!-- Attached SCRIPTS -->
    <script src="{{ asset('application/js/jquery.min.js') }}"></script>
    <script src="{{ asset('application/js/bootstrap.min.js') }}"></script>

    <!-- SITE TITLE -->
    <title>Home | Kook N Crumbs</title>
</head>
<body>

<div class="wrapper"> <!-- WRAPPER -->

    @include('partials.application.header')

    @yield('content')

    @include('partials.application.footer')

</div> <!-- WRAPPER ENDED -->

</body>
</html>