<?php

/*
* theme: Press Room
* rule: post
* name: fullwidth
*/
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
        <h1>Hello Pressroom Fullwidth</h1>
        <?php
        the_title();
        the_content();
		//echo $post->post_title;
        ?>
        <a href="<?=home_url($path = 'example')?>"></a>
        <a href="articolo-6/">Post</a>
    </body>
</html>
