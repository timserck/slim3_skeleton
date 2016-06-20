<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" 
        content="
		<?php echo $data['description']; ?>
        ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        <?php echo $data['title']; ?>
        	
        </title>
        <link rel="stylesheet" href="src/css/style.css">
    </head>
    <body>
    <nav>
    	<li>
    	<a href=""> <?php echo $data['title']; ?></a>
    	</li>
    	<li>
    	<a href=""></a>
    	</li>
    	<li>
    	<a href=""></a>
    	</li>
    	<li>
    	<a href=""></a>
    	</li>
    </nav>
        test home
        <?= var_dump($data) ?>
        <script src="src/js/main.js"></script>
    </body>
</html>

