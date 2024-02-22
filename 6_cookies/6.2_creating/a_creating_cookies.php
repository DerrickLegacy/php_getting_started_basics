<?php 

// Name: name of the file
// Value: data stored in the file
// Expire: data string defining the life time
// Path: subset of URLs in a domain where it is valid
// Domain: domain for which the cookie is valid
// Secure: set to '1' to transmit in HTTPS

    setcookie("MyCookie_1","Ahaabwe Derrick",time()+60,"/",".com",1);
    setcookie("MyCookie_2", "Becca1", time()+3600);
    setcookie("MyCookie_3", "Becca2", time()+3600);
    setcookie("MyCookie_4", "Becca3", time()+3600);
    setcookie("AnotherCookie", "john", time()+3600);
?>
<?php
foreach ($_COOKIE as $key => $value) {
    print $key." =>  ".$value."<br>";
}
// deleting cookies
setcookie("MyCookie_2");
setcookie("MyCookie_3");
?>