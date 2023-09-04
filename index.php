<?php

require_once 'config/bootstrap.php';

$posts = Post::getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Blog</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <br>
        <a href="create.php" class="btn btn-primary">Create</a>
        <br><br>
        <div class="row">
            <br><br><br>
            <h2>OOP Blog</h2>
            
            <ul>
                <?php foreach($posts as $post) : ?>
                <li>
                <a href="post.php?id=<?= $post->id ?>"><h4><?= $post->id . ' - ' . $post->title ?></h4></a>
                    <p><?= $post->body ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    
</body>
</html>