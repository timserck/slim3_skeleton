<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description"
        content="<?php echo $meta['description']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        <?php echo $meta['title']; ?>

        </title>
        <link rel="stylesheet" href="src/css/style.css">
        <link rel="stylesheet" href="src/css/normilize.css">
    </head>
    <body>
    <nav>
        <li>
        <a href="<?php echo  $router->pathFor('home'); ?>"> Home</a>
        </li>
        
        <li>
        <a href="<?php echo  $router->pathFor('about'); ?>">about</a>
        </li>
        <li>
        <a href="<?php echo  $router->pathFor('dej'); ?>">petitDejeuner</a>
        </li>
        <li>
        <a href="<?php echo  $router->pathFor('traiteur'); ?>">traiteur</a>
        </li>
        <li>
        <a href="<?php echo  $router->pathFor('dessert'); ?>">dessert</a>
        </li>
        <li>
        <a href="<?php echo  $router->pathFor('buy'); ?>">buy</a>
        </li>
        <li>
        <a href="<?php echo  $router->pathFor('contact'); ?>">contact</a>
        </li>
        <li>
        <a href="<?php echo  $router->pathFor('panier'); ?>">panier</a>
        </li>

    </nav>
    <main>