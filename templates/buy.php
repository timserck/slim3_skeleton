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
    </head>
    <body>
    <nav>
        <li>
        <a href="<?php echo  $router->pathFor('home'); ?>"> Home</a>
        </li>
        <li>
        <a href="<?php echo  $router->pathFor('buy'); ?>">buy</a>
        </li>
        <li>
        <a href=""></a>
        </li>
        <li>
        <a href=""></a>
        </li>
    </nav>
    <main>
    <div class="products">
    	
    </div>
    	
    </main>
        <script   src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
        <script src="src/js/main.js"></script>
    </body>
</html>
