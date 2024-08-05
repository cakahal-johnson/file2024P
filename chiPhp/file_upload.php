<?php

$allowed_ext = array('pnp', 'jpg','jpeg', 'gif');

if(isset($_POST['submit'])){
    // checking if file was uploaded
    if(!empty($_FILES['upload']['name'])){
        $file_name = $_FILES['upload']['name'];
        $file_size = $FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";

        //Get file extension
        $file_ext = explode('.', $file_name);
        //Split a string by a string Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator.

        $file_ext = strtolower(end($file_ext));
        /**
         * $array: The array. This array is passed by reference because it is modified by the function. This means you must pass it a real variable and not a function returning an array because only actual variables may be passed by reference.
Set the internal pointer of an array to its last element
end() advances `array`'s internal pointer to the last element, and returns its value.
         */

         // validate file type/extension
         if(in_array($file_ext, $allowed_ext)){
            // validate for the file size
            if($file_size <= 1000000){ // 1000000 bytes = 1mb
                 // we upload the file
                 move_uploaded_file($file_tmp, $target_dir);

                 //Success message
                 echo '<p style="color: green;">File Uploaded!</p>';
                 
                }else{
                echo '<p style="color: red;">File Uploaded too large!</p>';
            }
    }else{
        $message = '<p style="color: red;">Invalid file type!</p>';
     }
}else{
    $message = '<p style="color: red;">Please choose a file!</p>';
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP||File||uploads</title>
</head>
<body>
    <h3>PHP||File||uploads</h3>
    <?php echo $message ?? null; ?>
    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
        <legend>Select and Image to uploads</legend>
        <label for="">Upload</label>
        <input type="file" name="upload"> <br> <br>

        <input type="submit" value="Submit" name="submit" id="">

    </form>
</body>
</html>