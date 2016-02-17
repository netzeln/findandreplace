<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/WordReplace.php';

	// use Symfony\Component\Debug\Debug;
	// Debug::enable();

	$app = new Silex\Application();
	// $app['debug'] = true;

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app)
	{
		return $app['twig']->render('findandreplace.html.twig');
	});

	$app->get('/findandreplace', function() use ($app)
	{
		$new_replacement = new WordReplace($_GET['string'],$_GET['word'],$_GET['replacement']);
		$results = $new_replacement->findAndReplace();
		return $app['twig']->render('findandreplace.html.twig', array('results' => $results));
	});

	return $app;

?>
