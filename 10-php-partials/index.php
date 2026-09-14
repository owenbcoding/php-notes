<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Partials</title>
</head>
<body>
    <?php
        // Topic: PHP Partials
        require __DIR__ . '/../views/partials/nav.php';
    ?>

    <h1>10 - PHP Partials</h1>
    <p>The navigation above is loaded from <code>views/partials/nav.php</code>.</p>

    <?php require __DIR__ . '/../views/partials/footer.php'; ?>
</body>
</html>
