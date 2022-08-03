<?php
    include './classes/postSeeder.php';
    $posts = wap\PostSeeder::seed();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="content">
        <h1>Social Media</h1>
        <?php foreach($posts as $post) { ?>
            <div id="post">
                <img src="<?= $post->getImageUrl() ?>" alt="Beach scene" height="100" width="100" id="icon"> <br>
                <h3 id="name"><?= $post->getUser() ?></h3><br>
                <?= $post->getMessage() ?><br>
                <h5>Comments</h5>
                <?php foreach($post->getComments() as $comment) { ?>
                    <strong><?=$comment->getName()?>: </strong>
                    <?=$comment->getComment()?><br>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>