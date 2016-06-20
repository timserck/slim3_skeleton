<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use Slim\Views\PhpRenderer;


require 'vendor/autoload.php';

$app = new \Slim\App();


// $path = $app->environment['CONTEXT_PREFIX'];


$container = $app->getContainer();
$router = $app->getContainer()->get('router');


$container['renderer'] = new PhpRenderer("./templates");


$app->get('/', function (Request $request,Response $response) use ($router) {
	$url = $router->pathFor('home');
	$meta = 
	array(
		'title' => 'home',
		'description' => 'description',
		
	);
    return $this->renderer->render($response, "/home.php", $meta, $url);
})->setName('home');



	$app->get('/api', function (Request $request, Response $response) {
		$data = array('name' => 'Rob', 'age' => 40);
		return $response->withJson($data, 201);
	});




$app->run();