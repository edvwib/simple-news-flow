<?php
declare(strict_types=1);
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SimpleNewsFlow</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>
<body>

<nav>
    <li class="navbarItem"><a href="">Home</a></li>
    <li class="navbarItem"><a href="">About</a></li>
    <li class="navbarItem"><a href="">Contact Us</a></li>
</nav>

    <?php foreach($posts as $author => $post): ?>
      <div class="post">
        <h3 class="postTitle"><?php echo $post['title']; ?></h3>
        <p class="postContent"><?php echo $post['content']; ?></p>
        <div class="postMeta">
          <p class="postAuthor"><?php echo $authors[$author] ?></p>
          <p class="postDate"><?php echo $post['date'] ?></p>
          <a class="postLikes">▲<?php echo $post['likes'] ?></a>
        </div>
      </div>
    <?php endforeach; ?>



</body>
</html>
