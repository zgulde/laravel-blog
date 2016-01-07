<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dice rolling</title>
</head>
<body>
    <h1>Roll: {{{ $roll }}}</h1>
    <h1>Guess: {{{ $guess }}}</h1>
    @if ($roll == $guess)
        <h1>Good Guess!</h1>
    @else
        <h2>wrong!</h2>
    @endif
</body>
</html>
