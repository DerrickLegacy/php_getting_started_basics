<?php 
// 1. ESCAPE SEQUENCE
    // Conical 
        echo "Conical < ?php  ?> <br>";
    // Short Open Tags
        echo "Short Open Tags < ?  ?> <br>";
        // ASP-like Tags
        echo "ASP-like Tags <%...%><br>";

// 2. COMMENTING
    // Single Line 
    echo "#This is single line <br>";
    echo "//This is single line <br>";
    echo "/* This is multi line <br> Commenting in php <br> 
    */<br>";

// 3. PRINTING OUT TO SCREEN
    print("Hello World-print() <br>");
    echo "Hello World- echo <br>";
    printf("Hello World- printf() <br>");

// 4. VARIABLES
    $intNum = 472;
    $doubleNum = 29.3;
    $boolean = true;
    $string ='Web Code Geeks';
    $array = array("Pineapple", "Grapefruit", "Banana");
    
    // creating a class before declaring an object variable
    class person {
        function agePrint() {
            $age = 5;
            echo "This person is $age years old!";
        }
    }
    // creating a new object of type person
    $object = new person;
    $object->agePrint();

// 5.CONDITIONAL STATEMENTS
    // if statement
    $age = 18;
    if ($age < 20) {
        echo " <br> You are a teenager <br>";
    }
    // If...Else
    if ($age < 20) {
        echo "You are a teenager <br>";
    }else {
        echo "You are an adult <br>";
    }

    // The If. . . Elseif. . . Else statement
    if ($age < 10) {
        echo "You are a kid <br>" ;
    } elseif ($age < 20) {
        echo "You are a teenager <br>";
    } else {
        echo "You are an adult <br>";
    }
// 6.LOOPS
    // forloop()
    for ($i=0; $i < 5; $i++) {
        echo "This is loop forloop running number $i <br>";
    }
    // // The while loop
    $j=2; // initialization     
    while ($j < 5) {
        echo "This is in while loop under loop number $i <br>" ;
            $j++;
    }
    // The do. . . while loop
    $i = 0; // initialization
    do {
        $i++; // step
        echo "This is loop number $i <br>";
    }while ($i < 5); // condition
    
    // the foreach loop
    $arrayName = array('a','b','c','d','e','f','g','h','i','j');
    foreach ($variable as $key) {
        echo "Element is $key";
    }


?>