<?php
    session_start();
    $_SESSION["dug"] = "a talking dog...!";

    if(isset($_SESSION["dug"])){
        echo $_SESSION["dug"];
    }
?>