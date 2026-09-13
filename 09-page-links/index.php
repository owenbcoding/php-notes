<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Page Links</title>
</head>

<body>
    <?php
    // Topic: Page Links
    // Build links from a single source so navigation stays consistent.
    ?>

    <h1>09 - Page Links</h1>
    <!-- Practice here -->
    <?php
    $links = [
        [
            "name" => "Home",
            "url" => "/"
        ],
        [
            "name" => "About",
            "url" => "/about"
        ],
        [
            "name" => "Contact",
            "url" => "/contact"
        ],
        [
            "name" => "Blog",
            "url" => "/blog"
        ]
    ];

    foreach ($links as $link) {
        echo '<a href="' . htmlspecialchars($link['url'], ENT_QUOTES, 'UTF-8') . '">'
            . htmlspecialchars($link['name'], ENT_QUOTES, 'UTF-8')
            . '</a><br>';
    }

    ?>
</body>

</html>