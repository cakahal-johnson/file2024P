<?php

//Echo to output Strings
echo 'Hello world';

echo '<br>';

// Integers output
echo 12345;

echo '<br>';

// Outputing HTML elements inside PHP tag
echo '<h3>This is out first class in PHP</h3>';

// echo '<br>';

//Print - is also similar to echo, but a bit slower
print 'Cakahal Johnson';

echo '<br>';

// print_r Gives a more info, which can be used to print arrays
print_r('hello world');
echo '<br>';

//var_dump - This even info like data-type and length
var_dump('Hello  world'); // both for white space

echo '<br>';
var_dump(1234);

//Escaping character with a backslash
/*
\n means the string will starts in new line
\t means the string will create a tag indentation
\b means backspace

*/
echo '<br>';
// echo 'Is your name 0'really?';
echo 'Is your name 0\' really?';

// single comments and  /* multi-line comments */

echo '<br>';
// concatination using dot


?> <!-- PHP ending block-->

<!-- here we open the HTML TAG -->
<!Doctype html>
<html lang="en">
    <head>
        <title>PHP in HTML</title>
    </head>
    <body>
        <h1>Thank you for Banking with us!</h1>

        <!-- combining php with html -->
        <h3>Hello <?php echo 'Cakahal Johnson';?></h3>

        <!-- having PHP tag inside HTML -->
        <?php

        $name = 'Cakahal Johnson'; // Strings
        $age = 70; // Int
        $hasKids = true; // Boolean
        $cashOnHand = 10.99; // float

        echo $name . ' ' . $age;

        echo '<br>';
        echo $cashOnHand;
        
        echo '<br>';
        var_dump($cashOnHand);
        
        // adding variables to strings
        echo '<br>';
        echo "$name is $age years old"; //

        //using string formatters
echo '<br>';
        echo "${name} is ${age} years old";

        // how to write function
        define('HOST', 'localhost');
        define('USER', 'root');

        echo '<br>';
        // to output a function definition we use 
        printf(HOST);

        echo '<br>';

        // or 
        var_dump(USER);

        echo '<br>';
        // rules: is case-insensitive using boolean
        define('Greetings', 'Hello world');

        echo '<br>';

        echo Greetings . " ". $name . " this is a PHP Function";

        // functions in Arrays
        define("students", [
            "Cakahal",
            "Johnson",
            "peter",
            "Obi"

        ]);
        

        echo '<br>';
        echo students[3];

        // using define inside a function
        define("OBI", " is a good man");

        function nameFunc(){
            echo OBI;
        }

        // calling out this function
        nameFunc(); // where a function calls it's self
        echo '<br>';

        echo OBI;
        

        

        
        ?>
    </body>

</html>