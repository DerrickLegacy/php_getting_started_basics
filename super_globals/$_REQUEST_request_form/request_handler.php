<?php

setcookie("request_cookie", "group 7",time()+(3600),"/");
setcookie("cookie_1", "Uganda",time()+(3600),"/");
setcookie("cookie_2", "United States",time()+(3600),"/");

$request_cookie = $_REQUEST['request_cookie'];
echo $request_cookie;

$_POST["stacey"] = "Stacey";
$_GET["joan"] = "Joan";


print_r($_REQUEST);
// print_r($_REQUEST["cookie_1"]);
