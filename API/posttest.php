<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello World, $name");

    return $response;
});

$app->get('/test/{new}', function (Request $request, Response $response) {
    $new = $request->getAttribute('new');
    $response->getBody()->write("This is test, $new");

    return $response;
});
//POST TEST 
$app->post('/test/demo',function(Request $r1,Response $r2){

$data=$r1->getParsedBody();
$inputdata=[];
$inputdata['name']=filter_var($data['name'],FILTER_SANITIZE_STRING);
$inputdata['phone']=filter_var($data['phone'],FILTER_SANITIZE_STRING);
$r2->getBody()->write("dear".$inputdata['name']."Your phone number is ".$inputdata['phone']);

});