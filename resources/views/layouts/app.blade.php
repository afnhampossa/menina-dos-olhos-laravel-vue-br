<!DOCTYPE html>
<html lang="pt-BR" class="background-100-e">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>A menina dos olhos</title>
    <meta name="description" content="Onepage Parallax Site" />
    <meta name="keywords" content="onepage, parallax" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{ Html::style("css/front.css") }}
    <link rel="stylesheet" href="/front/bower_components/animate.css/animate.min.css" />
    <link rel="stylesheet" href="/front/bower_components/minicolors/jquery.minicolors.css" />
    <link rel="stylesheet" href="/front/bower_components/slick.js/slick/slick.css" />
    <link rel="stylesheet" href="/front/bower_components/slick.js/slick/slick-theme.css" />
    <link rel="stylesheet" href="/front/bootstrap/dist/css/bootstrap-custom.css" />
    <link rel="stylesheet" href="/front/lib/linecons/style.css" />
    <link rel="stylesheet" href="/front/styles/style.css" />
    <link rel="stylesheet" href="/front/theme-custom.css" />
    <link rel="shortcut icon" href="/front/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/front/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/front/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/front/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/front/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/front/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/front/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/front/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/front/apple-touch-icon-152x152.png" />
    
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <style>
        .btn-menina,control-group {
            font-weight: 400;
            line-height: 30px;
            text-align: center;
            width: auto;
            text-decoration: none;
            text-transform: uppercase;
            display: inline-block;
            border-style: solid;
            border-width: 1px;
            background-color: transparent;
            border-color: rgba(255, 255, 255, .6);
            outline-color: rgba(239, 239, 239, 0);
            color: #cb875f;
            padding: 8px 40px;
        }

        .form-control {
            border-style: solid;
            border-width: 1px;
            border-color: rgba(255, 255, 255, .6);
            border-radius:0px;
        }
        

        .btn-menina:hover {
            color: #fff;
            font-weight: 500;
        }

</style>
    @yield('css')

</head>
<body class="state1 background-100-e">
<div id="app">
    @include("layouts.menu")
    @yield("content")
    @include('layouts.footer')

</div>
@include('layouts.scripts')

</body>
</html>
