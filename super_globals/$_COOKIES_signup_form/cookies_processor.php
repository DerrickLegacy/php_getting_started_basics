<?php

// Check if the cookie is set
if (!isset($_COOKIE[$cookieName])) {
  echo "Cookie named '" . $cookieName . "' is not set!";
} else {
  echo "Cookie '" . $cookieName . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookieName];
}

// Check if cookies are enabled
if (count($_COOKIE) > 0) {
  echo "<br>Yes, cookies are enabled <br>";
}

// to modify a cookie
$cookie_name = "user";
$cookie_value ="James";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
print_r($_COOKIE[$cookie_name]);
echo "<br>";


// DELETING A COOKIE -set the expiration date to one hour ago
setcookie("user", "", time() - 3600);

// Check if the cookie is set
if (!isset($_COOKIE[$cookieName])) {
    echo "<br>Cookie named '" . $cookieName . "' is not set!";
  } else {
    echo "Cookie '" . $cookieName . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookieName];
  }
unset($_COOKIE[$cookie_name]);