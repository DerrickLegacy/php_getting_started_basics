<?php
// 1. set the sesion
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessions</title>
</head>

<body>
    <form action="session_handler.php" method="post">
        <h1>Start Session</h1>
        <?php
            $_SESSION["favanimal"] = "cat";
            $_SESSION["am_inside_page"] = "am_located_inside_html_page";
            echo "This form's session variables have been set. <br>";

        //
        ?>
        <button>start session()</button>
    </form>
</body>

</html>