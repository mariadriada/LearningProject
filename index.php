<?php

require 'vendor/autoload.php';
//require 'template_test/template1.php';

// Crea la nueva aplicación
$app = new \Slim\Slim();


// Añade las rutas
// Aquí hay un closure. Debemos usar la palabra reservada USE para añadir parámetros
// Externos!!!!
$app->get('/', function() use ($app) {
    
    // Ahora, puedo usar $app dentro del closure!!!!
    var_dump($app->request->isGet());

    echo '<h1>Hola Maria!!!!!</h1>';
});

$app->get('/saludo', function() {
    echo '<h1>Hola hola hola!!!</h1>';
});


// Inicia la aplicación
$app->run();
