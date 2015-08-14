<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array (
        'twig.path' =>__DIR__.'/../views'
      ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post("/results", function() use ($app) {
        $usr_word = new RepeatCounter($usr_word, $usr_string);
        $usr_string = $_POST['usr_string'];
        return $app['twig']->render('results.html.twig', array('usr_word' => $usr_word), array('usr_string' => $usr_string));
    });
// attempted to return the users initial string of text here by adding a second array for 'usr_string', however it is not working, and I'm not entirely sure if its because of improper syntax or if I'm just simply not doing this correctly.
    return $app;
?>
