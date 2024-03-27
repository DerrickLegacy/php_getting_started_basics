<?php

$x = 75; // by default it is a global scope variable
echo $GLOBALS["x"]; // even if without this line, the echo prints
echo $x;
  
function myfunction() {
   //echo $x; throws an error  when referring to a global variable
   echo $GLOBALS['x'];
   echo "<br>";
   global $x;
   echo $x;
   echo "<br>";


   $y = 100; // this is a local scope variable, local to the function 
   $GLOBALS["y"] = 100; // creates y as a global variable within a function
  
}

myfunction();

// creating a global variable inside a function and using it outside a function
function myfunction2() {
  $GLOBALS["x"] = 23400;
}
  
myfunction2(); // creates the variable on execution
echo $x;
echo "<br>";
echo $GLOBALS["x"];
echo "<br>";
echo $x;
  