<?php

/*

CONDITIONS AND OPERATORS

BASIC OPERANDS

< less-than
> greater-than
>= greater-than or Equal To
<= less-than or Equal To
== Equal To
= Assignment operator
=== Identical TO
!= Not Equal To
!== Not Identical To

LOGICAL OPERAND
&& And means that both conditions have to true
|| Or means either is ture than Statement true while when we have both false, i.e false will also return


IF Statement
Syntax:
if(conditions){
    // Todo code here
}else if (a second conditions){
    //Todo second code
}else{
    // what happens when the conditions is not met
}
*/

$age = 17;
if ($age >= 18) {
    echo 'You are old enough to vote!';
} else {
    echo 'Sorry, you are too young to vote!';
}

echo '<br>';

$time = date("F j, Y, g:i a ");
// display day format

echo '<h3>'.$time .'</h3>';

$tm = date('H');
// $tm = 2;

echo $tm;

echo '<br>';

if ($tm < 12) {
    echo 'Good Morning...' . 'The current time is '. $tm;
} elseif ($tm < 17 ) { // complete the statement
    echo 'Good Afternoon...' . 'The current time is '. $tm;
} elseif($tm > 17 && $tm == 20){
    echo 'Good Evening...' . 'The current time is '. $tm;
}else{
    echo 'Good Night...' . 'The current time is '. $tm;
    
}


// using methods for conditions
// isset() means: Determine if a variable is considered set, this means if a variable is declared and is different than `null` .

// empty() means: $var: Variable to be checked No warning is generated if the variable does not exist. That means empty() is essentially the concise equivalent to !isset($var) || $var == false . // Determine whether a variable is considered to be empty. A variable is considered empty if it does not exist or if its value equals `false` . empty() does not generate a warning if the variable does not exist.

$books = [];
if () {
    # code...
} else {
    # code...
}





?>