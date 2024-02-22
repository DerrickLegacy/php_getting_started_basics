<?php 
    setcookie("MyCookie_1","Ahaabwe Derrick",time()+60,"/",".com",1);
    setcookie("MyCookie_2", "Becca", time()+3600);
    setcookie("AnotherCookie", $value, time()+3600);
?>
<?php
foreach ($_COOKIE as $key => $value) {
    print $key."=>  ".$value."<br>";
}
?>