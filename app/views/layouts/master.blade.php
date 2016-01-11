<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @yield('top-script')
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    @yield('bottom-script')
</body>
</html>

