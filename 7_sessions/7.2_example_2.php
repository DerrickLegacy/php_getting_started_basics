<?php
    session_start();
    echo "How many times you have visited this site <br>";
    if (!isset($_SESSION["intVar"]) ){
        $_SESSION["intVar"] = 1;
    } else {
        $_SESSION["intVar"]++;
    }

    echo "<p>In this session you have accessed this
    page <strong>" . $_SESSION["intVar"] . "</strong> times.</p>";

        unset($_SESSION["intVar"]); //Removes a session variable
        session_destroy();

?>
