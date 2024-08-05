<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New News PHP API</title>
</head>

<style>
    /* Style the content view using CSS */
.article {
  display: flex;
  margin: 10px;
  border: 1px solid #ccc;
}

.article img {
  width: 200px;
  height: 150px;
}

.article .content {
  padding: 10px;
}

.article .content h2 {
  font-size: 18px;
}

.article .content h2 a {
  color: #333;
  text-decoration: none;
}

.article .content h2 a:hover {
  color: #f00;
}

.article .content p {
  font-size: 14px;
}

.article .content span {
  font-size: 12px;
}

</style>
<body>

<?php
// Require the NewsApi class
require_once 'NewsApi.php';

// Instantiate the class with your api key
// $newsapi = new NewsApi('https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=c0b4db7fd8394e1bbd1ac6dfbefa0e49');

// Get the latest news articles about pizza
$all_articles = $newsapi->getEverything('pizza');

// Check if the request was successful
if ($all_articles['status'] == 'ok') {
  // Get the total number of articles
  $total = $all_articles['totalResults'];

  // Get the array of articles
  $articles = $all_articles['articles'];

  // Display the total number of articles
  echo "<h1>Latest news about pizza ($total)</h1>";

  // Loop through the articles and display them in a content view
  foreach ($articles as $article) {
    // Get the title, snippet, image, source, and url of each article
    $title = $article['title'];
    $snippet = $article['description'];
    $image = $article['urlToImage'];
    $source = $article['source']['name'];
    $url = $article['url'];

    // Display the article in a content view using HTML and CSS
    echo "<div class='article'>";
    echo "<img src='$image' alt='$title'>";
    echo "<div class='content'>";
    echo "<h2><a href='$url'>$title</a></h2>";
    echo "<p>$snippet</p>";
    echo "<span>Source: $source</span>";
    echo "</div>";
    echo "</div>";
  }
} else {
  // Display an error message if the request failed
  echo "<p>Something went wrong. Please try again later.</p>";
}
?>

    
</body>
</html>