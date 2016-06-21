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

    $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    return $this->view->render($response, '/home.php', compact('meta', 'lorem', 'router'));
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

    $app->get('/products', function (Request $request, Response $response) use ($connexion) {
        $products = list_products($connexion);
        return $response->withJson($products, 201);
    })->setName('buy');;

$app->run();
