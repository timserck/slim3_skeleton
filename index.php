<?php
require 'inc/connect.php';
require 'inc/function.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\PhpRenderer;

require 'vendor/autoload.php';

$c = new \Slim\Container(); //Create Your container

//Override the default Not Found Handler
$c['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        return $c['response']
            ->withStatus(404)
            ->withHeader('Content-Type', 'text/html')
            ->write('Page not found');
    };
};




$app = new \Slim\App($c);

$container = $app->getContainer();
$router = $app->getContainer()->get('router');

$container['view'] = new PhpRenderer('./templates');

$app->get('/', function (Request $request, Response $response) {
    $router = $this->router;
    $meta =
    array(
        'title' => 'homesite',
        'description' => 'description',

    );
    return $this->view->render($response, '/home.php', compact('meta', 'router'));

})->setName('home');

$app->get('/buy', function (Request $request, Response $response) {
    $router = $this->router;
    $meta =
    array(
        'title' => 'buy',
        'description' => 'description buy',
    );


    return $this->view->render($response, '/buy.php', compact('meta', 'router'));
})->setName('buy');


$app->get('/about', function (Request $request, Response $response) {
    $router = $this->router;
    $meta =
    array(
        'title' => 'about',
        'description' => 'description about',
    );


    return $this->view->render($response, '/about.php', compact('meta', 'router'));
})->setName('about');



$app->get('/dej', function (Request $request, Response $response) {
    $router = $this->router;
    $meta =
    array(
        'title' => 'dej',
        'description' => 'description dej',
    );


    return $this->view->render($response, '/dej.php', compact('meta', 'router'));
})->setName('dej');

$app->get('/traiteur', function (Request $request, Response $response) {
    $router = $this->router;
    $meta =
    array(
        'title' => 'traiteur',
        'description' => 'description traiteur',
    );


    return $this->view->render($response, '/traiteur.php', compact('meta', 'router'));
})->setName('traiteur');


$app->get('/dessert', function (Request $request, Response $response) {
    $router = $this->router;
    $meta =
    array(
        'title' => 'dessert',
        'description' => 'description dessert',
    );


    return $this->view->render($response, '/dessert.php', compact('meta', 'router'));
})->setName('dessert');

$app->get('/contact', function (Request $request, Response $response) {
    $router = $this->router;
    $meta =
    array(
        'title' => 'contact',
        'description' => 'description contact',
    );


    return $this->view->render($response, '/contact.php', compact('meta', 'router'));
})->setName('contact');


$app->get('/panier', function (Request $request, Response $response) {
    $router = $this->router;
    $meta =
    array(
        'title' => 'panier',
        'description' => 'description panier',
    );


    return $this->view->render($response, '/panier.php', compact('meta', 'router'));
})->setName('panier');





    $app->get('/products', function (Request $request, Response $response) use ($connexion) {
        $products = list_products($connexion);
        return $response->withJson($products, 201);
    })->setName('products');

$app->run();
