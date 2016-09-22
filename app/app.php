<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../inc/Connection.php';
    require_once __DIR__."/../src/Cuisine.php";
    require_once __DIR__."/../src/Restaurant.php";
    require_once __DIR__."/../src/Review.php";


//Setup
    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

//Home Path
    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array('categories' => Cuisine::getAll()));
    });


    return $app;

?>
