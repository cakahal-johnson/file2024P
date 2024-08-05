<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array || DB</title>
</head>
<body>
    <h3>creating an Object wwe will use Books as a casestudy in DataBase </h3>
    <?php
    $books = [
       "Intro to Java",
       "Intro to PHP",
       "Intro to Python",
       "Intro to R",
    ];
    ?>

    <h3>Calling out the Books the database to display in our HTML </h3>
    <p>
        <!-- shot-hand echo -->
        <?= $books[2] . '<br>' ; ?>

        <!-- same as above -->
        <?php echo $books[3] . '<br>';?>
    </p>

    <!-- using Html list out all datas in the arrays -->
    <ol>
        <?php foreach ($books as $book)
            // echo '<li> $book </li>';
         echo "<li> {$book} <sup>TM</sup> </li>";

            // echo '<li>' . $book . '</li>';

            
        ?>
    </ol>

    <h3>Asso-Array for the book storage section using keys and values </h3>
    <?php
    $cars = [
        [
            'Name' => 'Benz', 
            'model' => 'GLK',
            'url' => 'https://www.benz.com',
            'email' => 'example@benz.com'
        ],
        [
            'Name' => 'Venza', 
            'model' => 2023,
            'url' => 'https://www.Venza.com',
            'email' => 'example@Venza.com'
        ],
        [
            'Name' => 'Maybach', 
            'model' => 'GLK',
            'url' => 'https://www.Maybach.com',
            'email' => 'example@Maybach.com'
        ],
        [
            'Name' => 'Venza1', 
            'model' => 2023,
            'url' => 'https://www.Venza.com',
            'email' => 'example@Venza.com'
        ],
        [
            'Name' => 'Maybach2', 
            'model' => 'GLK',
            'url' => 'https://www.Maybach.com',
            'email' => 'example@Maybach.com'
        ],
    ];
    ?>

    <h3>How to display an asso Array</h3>
    <ul>
        <?php foreach ($cars as $key => $car) : ?>
            <li>
                <a href="<?= $car['url'] ?>">
                    <?= $car['Name']; ?>
                </a>
            </li>
        <?php endforeach ; ?>
    </ul>
</body>
</html>