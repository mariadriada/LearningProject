<?php

require 'vendor/autoload.php';

// Crea la nueva aplicación
$app = new \Slim\Slim();


// Añade las rutas
$app->get('/', function() {
    echo '<h1>Hola Maria!!!!!</h1>';
});

$app->get('/saludo', function() {
    echo '<h1>Hola hola hola!!!</h1>';
});


// Inicia la aplicación
$app->run();
