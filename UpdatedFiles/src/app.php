<?php
/**
 * Created by PhpStorm.
 * User: Matthew Jourard
 * Date: 11/23/2016
 * Time: 5:22 PM
 */

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
	// add custom globals, filters, tags, ...

	return $twig;
});


$app['db.options'] = [
	'driver'   => 'pdo_mysql',
	'host'     => 'localhost',
	'dbname'   => 'classicmodels',
	'user'     => 'root',
	'password' => ''
];

return $app;