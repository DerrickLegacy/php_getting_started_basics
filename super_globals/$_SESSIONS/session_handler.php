<?php
session_start();
// to change a session variable, just overwrite 
$_SESSION["favcolor"] = "yellow";
$_SESSION["favcolor"] = "blue";
$_SESSION["country"] = "Uganda";

print_r($_SESSION);
echo "<br>";
echo $_SESSION["am_inside_page"].".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

// remove all session variables
session_unset(); //clears all session variable
unset($_SESSION["country"]); //clears a specific variable

// destroy the session
session_destroy();