<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SebraeMG - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL('/css/bootstrap-material-design.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    @yield('csspersonalizado')
</head>
<body style="background-color:#333333">
        @yield('content')
    <script type="text/javascript" src="{{URL('/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL('/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{URL('/js/bootstrap-material-design.js')}}"></script>
</body>
</html>