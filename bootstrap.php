<?php 

require_once __DIR__ . '/vendor/autoload.php' ; 


use MongoDB\Client;

// Replace the placeholder with your Atlas connection string
$uri = 'mongodb://localhost:27017';

// Create a new client and connect to the server
$client = new Client($uri);

$collection = $client->ny->restaurants ;

