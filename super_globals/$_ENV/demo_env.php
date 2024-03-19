<?php
echo 'My username is ' .$_ENV["USER"] . '!';
$_ENV["USER"] = getenv("USER");
echo 'My username is ' .$_ENV["USER"] . '! <br>';


// other php environmental variable methods 
    // 1. getenv() - access all system env variables and their values
    // 2. putenv() - defines or creates new env variables and their values
$_arr = getenv();
foreach($_arr as $key => $val){
    echo "$key =>  $val <br>";
}

$_ENV["USER"] = getenv("USER");
$_ENV["SHELL"] = getenv("SHELL");

putenv("group7=GUESTS");
echo getenv("group7");
echo "<br>";
print_r($_ENV);