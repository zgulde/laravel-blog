<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @yield('top-script')
    <link rel="stylesheet" href="/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans|PT+Serif' rel='stylesheet' type='text/css'>
</head>
<body>

    @if (Session::has('successMessage'))
        <div class="alert alert-success">
            <p>{{{ Session::get('successMessage') }}}</p>
            @if (Session::has('link'))
                <p><a href="{{ Session::get('link')['target'] }}">{{Session::get('link')['text']}}</a></p>
            @endif
        </div>
    @endif

    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

    @yield('content')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    @yield('bottom-script')
</body>
</html>

