<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array||Local DataBase</title>
</head>
<body>
    <h3>Array||Local DataBase</h3>
    <!-- Dome DataBase -->
    <?php
     $books = [
        [
            'name' => 'Androids Dreams of Electric Sheep v1',
            'author' => 'Philips K. Dick',
            'releaseYear' => 2023,
            'purchaseUrl' => 'https://www.google.com/books'

        ],

        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 1986,
            'purchaseUrl' => 'https://www.amazon.com/Project Hail Mary'
        ],

        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 1996,
            'purchaseUrl' => 'https://www.amazon.com/The Martian'
        ],

        [
            'name' => 'The One-chance v1',
            'author' => 'Cakahal Johnson',
            'releaseYear' => 2020,
            'purchaseUrl' => 'https://www.amazon.com/books'
        ],
    ];

    // function for Dispaly 1
    function filterByAuthor($books){
        $filteredBooks = [];

        foreach ($books as $book){
            if($book['author'] === 'Andy Weir'){
                $filteredBooks[] = $book; // appending the fucntion to our loop variable
            }
        }

        return $filteredBooks; // assigning book into the loop
    }
    
    ?>

    ==================== HTML DISPLAY SECTION 1 STARTS ==================
    <ul>
        <!-- Looping through the Array -->
        <?php foreach($books as $book) : ?>
            <li>
                <a target="_blank" href="<?= $book['purchaseUrl'] ?>">
                   <?= $book['name']; ?> - (<?= $book['releaseYear'] ?>)
                </a>
            </li>
            
        <?php endforeach; ?>
    </ul>
    ==================== HTML DISPLAY SECTION 1 ENDS ==================

    ==================== HTML DISPLAY SECTION 2 STARTS ==================
    <ul>
        Looping through the Array
        <?php foreach($books as $book) : ?>
            here is for conditional Statement for selecting an author
            <?php if($book['author'] === 'Cakahal Johnson') : ?>
                NB: where author is hard coded
                <li>
                    <a target="_blank" href="<?= $book['purchaseUrl'] ?>">
                       <?= $book['name']; ?> - (<?= $book['releaseYear'] ?>)
                    </a>
                </li>
            <?php endif ?>
            
        <?php endforeach; ?>
    </ul>
    ==================== HTML DISPLAY SECTION 2 ENDS ==================

    
    ==================== HTML DISPLAY SECTION 3 STARTS ==================
    <ul>
        <!-- Looping through the Array -->
        <?php foreach(filterByAuthor($books) as $book) : ?>
            <li>
                <a target="_blank" href="<?= $book['purchaseUrl'] ?>">
                   <?= $book['name']; ?> - (<?= $book['releaseYear'] ?>) by <?php $book['author'] ?>
                </a>
            </li>
            
        <?php endforeach; ?>
    </ul>
    ================ HTML DISPLAY SECTION 3 ENDS ===============
</body>
</html>