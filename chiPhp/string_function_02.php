<?php

//variables
$name = "cakahal Jack";

// getting a lenght of a string
echo strlen($name);

echo '<br>';

// finding the position of the first occurence of a substring in a string
echo strpos($name, 'k');

echo '<br>';

// finding a position of last occurence 
echo strrpos($name, 'k');

echo '<br>';

// getting a reverse of a string
echo strrev($name);

echo '<br>';

//converting all characters to lowerCase
echo strtolower($name);

echo '<br>';


//converting all characters to upperCase
echo strtoupper($name);

// replacing char in a string
echo '<br>';

echo str_replace('Jack', 'Johnson', $name);

echo '<br>';

// return position of a string specified bt the offset and lenght
echo substr($name, 7, 12);

echo '<br>';
// if the offset is not present then the index character is returned
echo substr($name, 11);

echo '<br>';

// using string formatters in a function using conditions
// here we check if a character is prenst which returns a boolean
// if (str_ends_with($name, 'z')) {
//     echo 'Yes is in the character';
// } else {
//     echo 'No is not in the character';
// }

echo '<br>';

//HTML Entities
$name2 = '<h2>hello world</h2>';

echo $name2 . '<br>';

$name3 = '<script>alert(1230)</script>';

// echo $name3 . '<br>';
echo htmlentities($name3); 

echo '<br>';

//Formatting Strings - when you have outside data which is different in specifier datatypes

// | string | s | | int | d, u, c, o, x, X, b | | float | e, E, f, F, g, G, h, H |

printf('%s is a %s', 'cakahal', ' nice guy'); //String

echo '<br>';

printf('10 * 3 = %d', 10 * 3); //int 
echo '<br>';

printf('10 * 3 = %f', 10 * 3); //float

echo '<br>';
//boolean
$isTrue = true;
printf('isTrue=%s', $isTrue ? "True" : "False");

function _bool($b){
    return $b ? 'True' : 'False';
}

echo '<br>'. _bool($b);











?>