<?php
    // ============================================================
    // PHP FUNDAMENTALS — PRACTICE FILE
    // Work through each problem below. Remove the comment markers
    // and write your solution where indicated.
    // Run: php -S localhost:8888 then visit localhost:8888/practice.php
    // ============================================================


    // ------------------------------------------------------------
    // 01 — YOUR FIRST PHP TAG
    // ------------------------------------------------------------

    // Problem 1a: Echo your full name to the page using echo.
    
    echo "Eoghan Bynre";

    // Problem 1b: Echo a sentence that includes a number in it.
    //             e.g. "I have 3 cats."

    echo "I have 1 dog.";

    // Problem 1c: Echo two separate strings on two separate lines.
    //             Hint: use "\n" or "<br>" to create a line break.

    echo "Hello, PHP!\n";
    echo "This is a new line.";


    // ------------------------------------------------------------
    // 02 — VARIABLES
    // ------------------------------------------------------------

    // Problem 2a: Create a variable called $firstName and assign
    //             your first name to it. Then echo it.

    $firstName = "Eoghan";
    echo $firstName;

    // Problem 2b: Create two integer variables, $a and $b, assign
    //             any numbers to them, then echo their sum.

    $a = 5;
    $b = 10;
    echo $a + $b;

    // Problem 2c: Create a $price variable (float) and a $label
    //             variable (string). Echo them together in one
    //             sentence, e.g. "The price of Coffee is €3.50"

    $price = 3.50;
    $label = "Coffee";
    echo "The price of $label is €$price";

    // Problem 2d: Create a boolean variable $isOnline and echo
    //             either "Online" or "Offline" based on its value.
    //             Hint: use a ternary — $x ? 'yes' : 'no'

    $isOnline = true;
    echo $isOnline ? "Online" : "Offline";

    // ------------------------------------------------------------
    // 03 — CONDITIONALS AND BOOLEANS
    // ------------------------------------------------------------

    // Problem 3a: Create a variable $age. Write an if/else that
    //             echoes "Adult" if $age is 18 or over, and
    //             "Minor" if not.

    $age = 30; 
    if ($age >= 18) {
        echo "Adult";
    } else {
        echo "Minor";
    }

    // Problem 3b: Create a $score variable (0–100). Use if/elseif/else
    //             to echo a grade:
    //             90+ = "A", 70–89 = "B", 50–69 = "C", below 50 = "Fail"

    $score  = 85;
    if ($score >= 90) {
        echo "A";
    } elseif ($score >= 70) {
        echo "B";
    } elseif ($score >= 50) {
        echo "C";
    } else {
        echo "Fail";
    }

    // Problem 3c: Create two variables $username and $password.
    //             Echo "Access granted" only if BOTH match a value
    //             you hardcode (e.g. "admin" and "secret").
    //             Otherwise echo "Access denied".

    $hardcoded_username = "admin";
    $hardcoded_password = "secret";

    $username = "admin";
    $password = "secret";

    if ($username === $hardcoded_username && $password === $hardcoded_password) {
        echo "Access granted";
    } else { 
        echo  "Access denied";
    }

    // ------------------------------------------------------------
    // 04 — ARRAYS
    // ------------------------------------------------------------

    // Problem 4a: Create an array of 5 of your favourite movies.
    //             Echo each one on its own line using a foreach loop.

    $movies = ['Avatar', 'Code8', 'The Martian', 'Jurassic park', 'Hacker'];

    // Problem 4b: Using the same (or a new) array, echo only the
    //             first and last items by their index.

    $movies = ['Avatar', 'Code8', 'The Martian', 'Jurassic park', 'Hacker']; echo "First: " . $movies[0] . "<br>"; echo "Last: " . $movies[count($movies) - 1];

    // Problem 4c: Create an array of numbers. Use a foreach loop
    //             to echo only the numbers that are greater than 10.

    $numbers = [4, 11, 7, 25, 10, 13, 2];

    foreach ($numbers as $number) {
    if ($number > 10) {
        echo $number . "<br>";
    }
    }

    // ------------------------------------------------------------
    // 05 — ASSOCIATIVE ARRAYS
    // ------------------------------------------------------------

    // Problem 5a: Create an associative array representing a book
    //             with keys: title, author, year, pages.
    //             Echo each key and value in a readable sentence,
    //             e.g. "Title: The Hobbit"

    $book = [
        'title' => 'The novice',
        'author' => 'Taran Marathu',
        'year' => 2015,
        'pages' => 368,
    ];

    foreach ($book as $key => $value) { 
            echo ucfirst($key) . ": " . $value . "<br>";
    }

    // Problem 5b: Create an array of three associative arrays, each
    //             representing a person with name and age keys.
    //             Loop through and echo each person's name and age.

    $people = [
        ['name' => 'Maya', 'age' => 17],
        ['name' => 'Luca', 'age' => 24],
        ['name' => 'Nora', 'age' => 31],
    ];

    foreach ($people as $person) {
        echo $person['name'] . ' is ' . $person['age'] . ' years old.<br>';
    }

    // Problem 5c: Using the array from 5b, echo only the people
    //             who are 18 or older.

    foreach ($people as $person) {
        if ($person['age'] >= 18) {
            echo $person['name'] . ' is ' . $person['age'] . ' years old.<br>';
        }
    }

    // ------------------------------------------------------------
    // 06 — FUNCTIONS AND FILTERS
    // ------------------------------------------------------------

    // Problem 6a: Write a function called add() that takes two
    //             numbers and returns their sum. Call it and echo
    //             the result.
    function add ($num1 = 5, $num2 = 3) {
        return $num1 + $num2;
    } echo add();

    // Problem 6b: Write a function called greet() that takes a
    //             $name parameter and returns "Hello, {name}!".
    //             Call it with your own name and echo the result.
    function greet($name) { 
        return "Hello, {$name}!";
    } echo greet('Owen');


    // Problem 6c: Create an array of words. Use array_filter() to
    //             return only the words that are longer than 4
    //             characters. Echo the results.

    $words = ["cat", "elephant", "dog", "giraffe", "ox", "monkey"];

    $longWords = array_filter($words, function ($word) {
        return strlen($word) > 4;
    });

    echo implode(", ", $longWords);

    
    // Problem 6d: Create an array of numbers. Use array_map() to
    //             return a new array where every number is squared
    //             (multiplied by itself). Echo the results.

    $numbers = [1, 2, 3, 4, 5];

    $squaredNumbers = array_map(function ($number) {
        return $number * $number;
    }, $numbers);

    echo implode(", ", $squaredNumbers);

    // ------------------------------------------------------------
    // 07 — LAMBDA FUNCTIONS
    // ------------------------------------------------------------

    // Problem 7a: Assign an anonymous function to a variable called
    //             $double that takes a number and returns it doubled.
    //             Call it and echo the result.

    $double = function ($n) {
        return $n * 2;
    };

    echo $double(7) . "<br>";

    // Problem 7b: Rewrite Problem 7a using an arrow function (fn =>).

    $doubleArrow = fn($n) => $n * 2;

    echo $doubleArrow(7) . "<br>";

    // Problem 7c: Create an array of names. Use array_map() with an
    //             arrow function to return a new array where every
    //             name is uppercased. Echo the results.
    //             Hint: strtoupper($str)

    $names = ['maya', 'luca', 'nora'];

    $upperNames = array_map(fn($name) => strtoupper($name), $names);

    echo implode(", ", $upperNames) . "<br>";

    // Problem 7d: Create a $prefix variable (e.g. "Hello"). Write
    //             an arrow function that prepends the prefix to a
    //             name passed in. Use array_map() to apply it to
    //             an array of names. Arrow functions capture outer
    //             variables automatically — no `use` needed.

    $prefix = "Hello";

    $greetName = fn($name) => "{$prefix}, {$name}!";

    $greetings = array_map($greetName, $names);

    echo implode("<br>", $greetings) . "<br>";

    // ------------------------------------------------------------
    // 08 — SEPARATE LOGIC FROM THE TEMPLATE
    // ------------------------------------------------------------

    // Problem 8a: At the top of this section, prepare all your data
    //             in PHP variables: a $pageTitle string, a $username
    //             string, and a $skills array with at least 3 items.
    //             Then render them in the HTML below using <?= ?> and
    //             the alternative foreach syntax.
    //             (The HTML section is at the bottom of this file.)

    ?>
        <?php
            // 08 — template data (do your logic here, before the HTML)
            $pageTitle = "My Practice Page";     // fill this in
            $username  = "Owen";                 // fill this in
            $skills    = ["PHP", "HTML", "CSS"]; // fill this in
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            
            <title><?= $pageTitle ?></title>
        </head>
        <body>

    <!-- Output from problems 01–07 will appear above this section -->
    <hr>
    <h2>08 — Separate Logic From the Template</h2>

    <!-- Problem 8a: Render $pageTitle in the <h1> below -->
    <h1></h1>

    <!-- Problem 8a: Render "Welcome, {username}!" in the <p> below -->
    <p></p>

    <!-- Problem 8a: Loop through $skills and render each as a <li> -->
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li><?= $skill ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>

<?php
    // ------------------------------------------------------------
    // 09 — PAGE LINKS
    // ------------------------------------------------------------

    // Problem 9a: Create a $links array where each item is an
    //             associative array with keys: "name" and "url".
    //             Include at least Home, About, and Contact.


    // Problem 9b: Loop through $links and output an <a> tag for
    //             each link using "url" for href and "name" as text.


    // Problem 9c: Add one more link item and confirm it appears
    //             without changing your rendering loop.


    // ------------------------------------------------------------
    // 10 — PHP PARTIALS
    // ------------------------------------------------------------

    // Problem 10a: Create a partial file for a navigation section
    //              and include it in a page with require.


    // Problem 10b: Create a second partial for a footer and include
    //              it below the main content.


    // Problem 10c: Pass shared variables (like a title) so both
    //              partials can use the same data.


    // ------------------------------------------------------------
    // 11 — SUPERGLOBALS AND CURRENT PAGE STYLING
    // ------------------------------------------------------------

    // Problem 11a: Read $_SERVER['REQUEST_URI'] into a variable
    //              called $currentPath.


    // Problem 11b: In your nav loop, add an "active" CSS class to
    //              the current link when its URL matches $currentPath.


    // Problem 11c: Add a small helper function isCurrent($url)
    //              that returns true when $url matches the request URI.


    // ------------------------------------------------------------
    // 12 — MAKE A PHP ROUTER
    // ------------------------------------------------------------

    // Problem 12a: Build a routes array mapping paths to view files,
    //              for example '/' => 'home.php', '/about' => 'about.php'.


    // Problem 12b: Read the current URI and require the matching view.
    //              If no route matches, show a 404 message.


    // Problem 12c: Refactor route lookup into a function so routing
    //              logic is not duplicated.


    // ------------------------------------------------------------
    // 13 — CREATE A MYSQL DATABASE
    // ------------------------------------------------------------

    // Problem 13a: Write SQL to create a database and a table named
    //              notes with columns: id, body, created_at.


    // Problem 13b: Add SQL to insert at least 3 sample rows.


    // Problem 13c: Write a SELECT query to fetch all rows ordered by
    //              newest first.


    // ------------------------------------------------------------
    // 14 — PDO FIRST STEPS
    // ------------------------------------------------------------

    // Problem 14a: Create a PDO connection to MySQL with error mode
    //              set to exceptions.


    // Problem 14b: Run a simple SELECT query and fetch all rows as
    //              associative arrays.


    // Problem 14c: Print the results in a loop without hardcoding
    //              specific column positions.


    // ------------------------------------------------------------
    // 15 — EXTRACT A PHP DATABASE CLASS
    // ------------------------------------------------------------

    // Problem 15a: Create a Database class that stores a PDO instance
    //              in the constructor.


    // Problem 15b: Add a query($sql, $params = []) method that prepares,
    //              executes, and returns the statement.


    // Problem 15c: Add a fetchAll helper method that returns all rows
    //              as associative arrays.


    // ------------------------------------------------------------
    // 16 — ENVIRONMENTS AND CONFIGURATION FLEXIBILITY
    // ------------------------------------------------------------

    // Problem 16a: Move database credentials into a config array file
    //              and require it where needed.


    // Problem 16b: Replace hardcoded connection values with config
    //              values so changing environments is easier.


    // Problem 16c: Add a separate local config override strategy so
    //              secrets are not committed to the repository.


    // ------------------------------------------------------------
    // 17 — SQL INJECTION AND PREPARED STATEMENTS
    // ------------------------------------------------------------

    // Problem 17a: Create a query that searches notes by ID using
    //              a bound parameter instead of string concatenation.


    // Problem 17b: Demonstrate (in comments) how direct interpolation
    //              could be exploited by malicious input.


    // Problem 17c: Validate incoming ID input and handle invalid values
    //              before running the database query.

?>
