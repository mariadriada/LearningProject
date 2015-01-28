<?php

require 'vendor/autoload.php';


class CustomView extends  \Slim\View
{
    public function render($template)
    {
       
        return $template;
    }
};


// Crea la nueva aplicación
$app = new \Slim\Slim(array(
    'view' => new CustomView()
));


// Añade las rutas
// Aquí hay un closure. Debemos usar la palabra reservada USE para añadir parámetros
// Externos!!!!
$app->get('/', function() use ($app) {
    
    // Ahora, puedo usar $app dentro del closure!!!!
    var_dump($app->request->isGet());

    echo '<h1>Hola Maria!!!!!</h1>';
});

$app->get('/saludo/:person', function($person) {
    // Usando parámetros
    echo "Hola " . $person;
});

$app->get('/vista/', function() use ($app){
	

	$app->render('<h1>template test</h1>');

});


// Inicia la aplicación
$app->run();
