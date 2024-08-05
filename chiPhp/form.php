<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
</head>
<style>
    .error{color: #ff0000}
</style>
<body>

<?php 
// initializing the var's
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = "";

// here we use methods to hold validation in a function
//Un-quote string quoted with addcslashes()
// Returns a string with backslashes stripped off. Recognizes C-like \n, \r ..., octal and hexadecimal representation.

//[optional] Optionally, the stripped characters can also be specified using the charlist parameter. Simply list all characters that you want to be stripped. With .. you can specify a range of characters.


function text_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
}

?>
    <h3>Form||PHP</h3>
    <!-- error here -->
    <small class="error">* require field</small>
 <!-- Convert special characters to HTML entities

Certain characters have special significance in HTML, and should be represented by HTML entities if they are to preserve their meanings. This function returns a string with these conversions made. If you require all input substrings that have associated named entities to be translated, use htmlentities() instead. -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">

       <label for="">Name</label>
       <input type="text" name="name" value="" id="">
       <span class="error">*</span> <br> <br>
     
       <label for="">email</label>
       <input type="text" name="email" value="" id="">
       <span class="error">*</span> <br> <br>
       
       <label for="">Gender</label>
       <input type="radio" name="gender" value="" id=""> Male
       <input type="radio" name="gender" value="" id=""> Female
       <input type="radio" name="gender" value="" id=""> Others
       <span class="error">*</span> <br> <br>

       <label for="">Comment:</label>
       <textarea name="comment" id="" cols="30" rows="10"></textarea> <br> <br>

       <input type="submit" name="submit" id="">

    </form>

    <!-- here we will display the Form Information -->
    <?php
      echo "<h3>My DataBase </h3>";
      echo $name;
      echo '<br>';
      echo $email;
      echo '<br>';
      echo $comment;
      echo '<br>';
      echo $gender;
      echo '<br>';
    
    ?>
</body>
</html>