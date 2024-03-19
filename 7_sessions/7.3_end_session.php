<?php
    // ending a seession
    echo $_SESSION["intVar"];
    if(isset($_SESSION["intVar"])){
        unset($_SESSION["intVar"]); //Removes a session variable
    }
    echo "<br>After : ".$_SESSION["intVar"];
    

?>