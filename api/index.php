<?php 

require_once __DIR__ . '/../bootstrap.php' ;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$response =  new Response();

$data  = '' ;

$cursor = $collection->find(
    [
        'cuisine' => 'Italian',
        'borough' => 'Manhattan',
    ],
    [
        'limit' => 5,
        'projection' => [
            'name' => 1,
            'borough' => 1,
            'cuisine' => 1,
        ],
    ]
);
$data = [] ;
foreach ($cursor as $restaurant) {
   $data[] = $restaurant;
};

//var_dump($data);


$response->setContent( json_encode([ "data" => $data ]) ) ;


$response->headers->set('Content-Type', 'application/json');

$response->send() ;
