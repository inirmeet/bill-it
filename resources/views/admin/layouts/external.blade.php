<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Bills App Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}?v=20180316">
    <link rel="stylesheet" href="{{ URL::asset('css/waves.min.css') }}?v=20180316">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}?v=20180316">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}?v=20180316">
    <link rel="stylesheet" href="{{ URL::asset('css/themes/all-themes.css') }}?v=20180316">
</head>
<body class="login-page">
    @yield('content')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}?v=20180316"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}?v=20180316"></script>
    <script type="text/javascript" src="{{ URL::asset('js/waves.min.js') }}?v=20180316"></script>
    <script type="text/javascript" src="{{ URL::asset('js/admin.js') }}?v=20180316"></script>
</body>
</html>
