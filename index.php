<?php
// Define a variable
$name = "Developer";

// Output text and the current server date
echo "<h1>Hello, " . htmlspecialchars($name) . "!</h1>";
echo "<p>Today is " . date("l, F j, Y") . ".</p>";
?>
