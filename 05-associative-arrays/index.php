<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associative Arrays</title>
</head>
<body>
    <?php
        // Topic: Associative Arrays
        // - Like regular arrays but with named keys instead of numeric indexes
        // - Access values with $array['key']
        // - Loop with foreach ($array as $key => $value)

        // Try it:
        $person = [
            'name' => 'Owen',
            'age'  => 30,
            'city' => 'Cork',
        ];

        foreach ($person as $key => $value) {
            echo "<p><strong>$key:</strong> $value</p>";
        }
    ?>
</body>
</html>
