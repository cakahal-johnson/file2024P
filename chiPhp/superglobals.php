<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SuperGlobals</title>
</head>
<body>
    <h3>PHP SuperGlobals</h3>
    <ul>
        <li>$GLOBALS</li>
        <li>$_SERVER</li>
        <li>$_REQUEST</li>
        <li>$_POST</li>
        <li>$_GET</li>
        <li>$_FILE</li>
        <li>$_ENV</li>
        <li>$_COOKIES</li>
        <li>$_SESSION</li>
    </ul>

    <!-- ================= $GLOBALS ================== -->
    <H3>$GLOBALS</H3>
    <P>this super globals variables is used to access globals variables from anywhere in php or also within a functions or methods, this global are stored in array called $global[index]. the index holds the name of the variables</P>
    <p>An associative array containing references to all variables which are currently defined in the global scope of the script. The variable names are the keys of the array.</p>

    <?php
     $x = 99;
     $y = 67;

     function Eg1(){
        $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
        // z here is a local var using x and y for the operand
     }

     Eg1();
     echo $z;

     echo '<br>';

     $t = $x + $y;
     echo $t;
    ?>

    <h3>PHP SERVER</h3>
    <P>It holds information about the headers, paths and script location</P>
    <ul>
        <li>HOST: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li> SystemRoot<?php echo $_SERVER['SystemRoot']; ?></li>
        <li> SERVER_NAME<?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li> SERVER_PORT<?php echo $_SERVER['SERVER_PORT']; ?></li>
        <li> CURRENT FILE DIR<?php echo $_SERVER['PHP_SELF']; ?></li>
        <li> REQUEST_URI<?php echo $_SERVER['REQUEST_URI']; ?></li>
        <li> SERVER_SOFTWARE<?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li> REMOTE_ADDR<?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        <li> REMOTE_PORT<?php echo $_SERVER['REMOTE_PORT']; ?></li>
        <li> CLIENT INFO<?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    </ul>

    <h3>PHP REQUEST</h3>
    <P>PHP REQUEST is used to collect data after submitting and html form same as port and get</P>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname" id="">
    LastName: <input type="text" name="lname" id="">
    <br> <br>

    <input type="submit" name="submit" id="">

    </form>

    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = htmlspecialchars($_REQUEST['fname']);
        $lname = htmlentities($_REQUEST['lname']);
        if(empty($name) && empty($lname)){
            echo "Input can't be empty";
        }else{
            echo $name . " " . $lname;
        }
        // An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
    }
    ?>

</body>
</html>