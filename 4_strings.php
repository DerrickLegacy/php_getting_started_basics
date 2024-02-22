<?php
    $x = 2453;
    $doubleVariable ="Double quoted string variable with $x  \\n ew <br>";
    $singleVariable ='Single quoted string variable with $x value not printed <br> ';
    print($doubleVariable);
    print($singleVariable);
    echo "strlen : ".strlen($doubleVariable)."<br>";
    echo "strpos : ".strpos($doubleVariable,"variable");
    echo "<br> subtr  : ".substr($doubleVariable,0,10)."  ==First 10 characters <br>";
    // Replace
    $text = "Hello, World!";
    $newText = str_replace("World", "Universe", $text);
    echo "Replaced using replace() : $newText";
    echo "br>";

    // repeat a string
    $text = "La ";
    $repeatedText = str_repeat($text, 3);
    echo "<br>Repetition: $repeatedText"; echo "<br>";

    // first chjaracter to lower case
    $text = "Hello, World!";
    $lowercased = lcfirst($text);
    echo "<br>Lowercased: $lowercased";
    // uppercase
    $uppercase = strtoupper($text);
    echo "<br>Uppercase: $uppercase";
    // first character to uppercase
    $capitalized = ucfirst($text);
    echo "<br>Capitalized: $capitalized";
    // all words to capital
    $capitalizedWords = ucwords($text);
    echo "<br>Capitalized Words: $capitalizedWords";

    // lowercase
    $lowercase = strtolower($text);
    echo "<br>Lowercase: $lowercase";
    // trim()-removes white space
    $text = " Hello, World! ";
    $trimmed = trim($text);
    echo "<br>Trimmed: $trimmed";
    // left trim
    $leftTrimmed = ltrim($text);
    echo "<br>Left Trimmed: $leftTrimmed";
    // string reverse
    $reversed = strrev($text);
    echo "<br> nReversed: $reversed";
    // Case_insensitive comparison
    $string1 = "apple";
    $string2 = "Apple";
    $result = strcasecmp($string1, $string2);
    echo "<br>Case-Insensitive Comparison Result: $result";
    // string sensitive 
    $string1 = "apple";
    $string2 = "banana"; 
    $result = strcmp($string1, $string2);
    echo "<br>Comparison Result: $result";
    echo "String shuffling <br>";
    $text = "Hello, World!";
    $shuffled = str_shuffle($text);
    echo "<br>Shuffled: $shuffled";

    // Wordwrap: wordwrap()
    echo "<br>Wordwrap: wordwrap()<br>";
    $text = "This is a long sentence that should be wrapped.";
    $wrapped = wordwrap($text, 15, "<br>");
    echo "Wrapped:<br>$wrapped";
    // Explode Function: explode()
    echo "<br>Explode Function: explode() ..explode function splits a string into an array by a specified delimiter.<br>";
    $text = "apple,banana,orange";
    $fruits = explode(",", $text);
    print_r($fruits);
    echo "<br>";
    foreach ($fruits as $i) {
        echo $i;
        echo "<br>";
    }
    // Implode
    echo implode("  ",$fruits);



?>