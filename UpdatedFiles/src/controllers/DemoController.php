<?php
/**
 * Created by PhpStorm.
 * User: Matthew Jourard
 * Date: 11/22/2016
 * Time: 5:13 PM
 */

namespace controllers;
use Symfony\Component\HttpFoundation\Request;
use Silex\Application;

class DemoController
{
	public function getRequestObject(Request $request, Application $app)
	{
		return $app->json(['var_dump' => print_r($request, true)]);
	}

	public function getApplicationObject(Request $request, Application $app)
	{
		return $app->json(['var_dump' => print_r($app, true)]);
	}
}

?>
