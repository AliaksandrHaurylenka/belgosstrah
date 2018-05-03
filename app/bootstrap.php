<?php

use Aura\SqlQuery\QueryFactory;
use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions([
  QueryFactory::class => function(){
    return new QueryFactory('mysql');
  },

  PDO::class => function(){
    return new PDO('mysql:host=localhost; dbname=level1', 'root', '');
  },

  \League\Plates\Engine::class => function(){
    return new \League\Plates\Engine('../app/views');
  }

]);

$container = $containerBuilder->build();


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
  $r->get('/', ['App\Controllers\HomeController', 'index']);

});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
  $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
  case FastRoute\Dispatcher::NOT_FOUND:
    dd("404 Not Found") ;
    break;
  case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
    $allowedMethods = $routeInfo[1];
    var_dump("405 Method Not Allowed");
    //dd($_SERVER);
    break;
  case FastRoute\Dispatcher::FOUND:
    $handler = $routeInfo[1];
    $vars = $routeInfo[2];

    //dd($handler);
    //call_user_func($handler);

    $container->call($handler, $vars);
    break;
}
