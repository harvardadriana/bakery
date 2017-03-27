<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Piece of Heaven Bakery, specialized in cakes, cupcakes, snacks, and cakes for special ocasions" />
        <title>@yield('title', 'Piece of Heaven Bakery')</title>
        <!-- HTML5 browser support -->
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" />
        <!-- my reset css -->   
        <link href="css/reset.css" rel="stylesheet" />
        <!-- lightbox css -->
        <link href="css/lightbox.min.css" rel="stylesheet" />
        <!-- my styles -->
        <link href="css/globalstyles.css" rel="stylesheet" />

        @stack('head')

    </head>
    <body class="home">

        @include('header')

        @yield('main')

        @include('footer')


        <!-- GENERAL SCRIPTS -->
        <!-- lightbox and jQuery -->
        <script src="js/lightbox-plus-jquery.min.js"></script>
        <!-- my scripts -->
        <script src="js/scripts.js"></script>

        @stack('script')

    </body>
</html>
