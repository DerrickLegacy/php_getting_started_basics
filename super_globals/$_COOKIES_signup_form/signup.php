<?php
// Set a cookie with a fixed name
  $cookieName = "sign_up_form_cookie";
  $cookieValue = $_POST["name"]; // Using name as value, but you may want to change this
  setcookie($cookieName, $cookieValue, time() + (60*60*24*30), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Signup-Cookies</h1>
    <form action="cookies_processor.php" method="POST">
        <div>
            <label for="name">Name</label>
        <input type="text" name="name" id="name">
        </div>

        <div?>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>    
        
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div>
            <label for="confirm_password">Repeat Password</label>
            <input type="password" name="confirm_password" id="confirm_password">
        </div>

        <div>
            <button>Sign Up</button>
        </div>
    </form>
</body>
</html>