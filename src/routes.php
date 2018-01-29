<?php

use Slim\Http\Request;
use Slim\Http\Response;
use phpDocumentor\Reflection\Types\String_;

// Routes

// $app->get('/[{name}]', function (Request $request, Response $response, array $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/' route");

//     // Render index view
//     return $this->renderer->render($response, 'index.phtml', $args);
// });

$app->get('/named/{name}', function (Request $request, Response $response, array $args) {
    $this->logger->info("in route /named/kn");
    $name = $args['name'];
    // Render index view
    return $this->renderer->render($response, 'name.phtml', $args);
});