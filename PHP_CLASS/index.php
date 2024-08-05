<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Class</title>
</head>
<body>
    <?php 
        // echo "hello world";

        // DATA TYPES
        // $x = "Hello cakahal, nice to meet you!";
        // $y = "123456";

        // $a = 200;
        // $b = 100;
        // $c = $a + $b;

        // $x = true;
        // $y = false;

        // echo $y;
        // echo "<br>";
        // echo $x;

        // echo $x;
        // echo "<br>";
        // echo $y;
        // echo "<br>";
        // var_dump($c);

        // $fruits = arrys('Apple', 'Banana', 'Mango', 'Kiwi');
        // var_dump($fruits);

        $a = "The fox jumped over the fence";
        $b = "fox";
        $c = "gate";
        $d = "fence";
        $e = "goat";

        echo strlen($a);
        echo "<br>";
        echo str_word_count($a);
        echo '<br>';
        echo strrev($a);
        echo '<br>';
        echo strpos($a, $b);
        echo '<br>';
        echo str_replace($b, $e, $a, $b, $c, $a);


    
    ?>
</body>
</html>