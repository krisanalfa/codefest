<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Welcome to codefest
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link type="image/x-icon" href="{{ Theme::base('favicon.ico'); }}" rel="Shortcut icon" />

    <link rel="stylesheet" href="{{ Theme::base('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('css/flat-ui.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('css/style.css') }}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
