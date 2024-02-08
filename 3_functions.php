<?php 
    function greetPerson($name) { // function definition with arguments
        echo "Hi there, ".$name;
        // what this function does
    }
    greetPerson("Fabio"); // function call
    echo "<br>";
    greetPerson("Michael");
    echo "<br>";

    function personProfile($name, $city, $job) { // function definition with arguments
        echo "This person is ".$name." from ".$city.".";
        echo "";
        echo "His/Her job is ".$job.".";
    }
    personProfile("Fabio", "Tirana", "Web Dev");
    echo "<br>";
    personProfile("Michael", "Athens", "Graphic Designer");
    echo "<br>";
    personProfile("Xena", "London", "Tailor");


    function difference($a, $b) { // function definition with arguments
        $c = $a - $b;
        return $c;
    }
    echo "The difference of the given numbers is: ".difference(8, 3)."<br>";

// CONDITIONAL FUNCTIONS
echo "ONDITIONAL FUNCTIONS <br>";
    $makefoo = true;

    /* We can't call foo() from here 
    since it doesn't exist yet,
    but we can call bar() */

    bar();

    if ($makefoo) {
        function foo(){
            echo "I don't exist until program execution reaches me. <br>";
        }
    }

        /* Now we can safely call foo()
        since $makefoo evaluated to true */

    if ($makefoo) foo();

    function bar() 
    {
        echo "I exist immediately upon program start. <br>";
    }
    bar();
    
    // FUNCTIONS WITHIN FUNCTIONS
    function foo2() 
    {
        function bar2() 
        {
            echo "I don't exist until foo() is called. <br>";
        }
    }

/* We can't call bar2() yet
   since it doesn't exist . */

    foo2();
    echo "<br>";

    /* Now we can call bar2(),
    foo2()'s processing has
    made it accessible. */

    bar2();
//  RECURSIONS
    echo "<br> RECURSIONS <br>";
    function recursion($a)
    {
        if ($a < 20) {
            echo "$a\n";
            recursion($a + 1);
        }
    }
    recursion(1);

?>