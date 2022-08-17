<?php
    $posts = array();
    $posts[] = array (
        'name' => 'Bob',
        'message' => 'hello',
        'image' => 'images/default.webp',
        'date' => '1/1/11'
    );
    $posts[] = array (
        'name' => 'John',
        'message' => 'It\'s a good day',
        'image' => 'images/default.webp',
        'date' => '2/3/14'
    );
    $posts[] = array (
        'name' => 'Fred',
        'message' => 'Sunny day',
        'image' => 'images/default.webp',
        'date' => '4/5/16'
    );
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
        <?php
            foreach($posts as $post) { ?>
            <div id="post">
                <img src="<?= $post['image'] ?>" alt="Beach scene" height="100" width="100" id="icon"> <br>
                <h3 id="name"><?= $post['name'] ?></h3><br>
                <?= $post['message'] ?><br>
                <?= $post['date'] ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>