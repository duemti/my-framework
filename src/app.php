<?php

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('home', new Routing\Route('/home', ['_controller' => 'render_template']));
$routes->add('bye', new Routing\Route('/bye', ['_controller' => 'render_template']));
$routes->add('hello', new Routing\Route('/hello/{name}', [
	'name'			=> 'World',
	'_controller'	=> function ($request) {
		return render_template($request);
	},
]));

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', [
	'year'			=> null,
	'_controller'	=> 'Calendar\Controller\LeapYearController::index',
]));

return $routes;
