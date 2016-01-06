<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dice rolling</title>
</head>
<body>
    <h1>Roll: <?= $roll; ?></h1>
    <h1>Guess: <?= $guess; ?></h1>
    <?php if ($roll == $guess): ?>
        <h1>Good Guess!</h1>
    <?php endif; ?>
</body>
</html>
