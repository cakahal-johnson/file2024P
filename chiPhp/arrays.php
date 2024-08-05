<?php

// ============ PHP ARRAYS ==============
// if you need to store multiple values, you can use Arrays. Arrays holds "Elements"
// Simple array of numbers
$number = [1, 2, 3, 4, 5, 6];

// Array for Strings
$courses = ["Java", "Python", "PHP", "React"];

// Outing puting an Array
echo $number[3]; //4

echo '<br>';
echo $number[3] + $number[4]; // returns the additional operand = 9

echo '<br>';

// to output all the arrays will use print_r or var_dump
var_dump($number);
echo '<br>';
print_r($number);

echo '<br>';
var_dump($courses);

echo '<br>';

/*
Associative Arrays allows us to use name Keys to indentify values

*/

$course = [
    1 => 'java',
    2 => 'PHP',
    3 => 'Python',
    4 => 'React'
];

echo $course[1]; //PHP

// using the keys
$my_fav_color = [
    'white' => "#FFFFFF",
    'gray' => '#ccc',
    'black' => '#000'
];

echo '<br>';
echo $my_fav_color['white'];

var_dump($my_fav_color);

// ======== Multi-dimenstional Arrays ============
$student =
[
    "First_name" => "Cakahal",
    "Last_name" => "Johnson",
    "Email" => 'example@g.com'
];
$students =[

    $student1,
    [
        "First_name" => "Cakahal",
        "Last_name" => "Johnson",
        "Email" => 'example@g.com'
    ],
    [
        "First_name" => "Johnson",
        "Last_name" => "Johnson",
        "Email" => 'example@g.com'
    ],
    [
        "First_name" => "Peter",
        "Last_name" => "Johnson",
        "Email" => 'example@g.com'
    ],

];

echo '<br>';
echo $students[0]['First_name'];
echo '<br>';
echo $students[3]['Email'];

// Encode to Json for API
var_dump(json_encode($student));
echo '<br>';

//Decode from Json
$jsonObj = '{"fname": "Cakahal", "lname": "Johnson", "email": "example@g.com"}';
var_dump(json_decode($jsonObj));


?>