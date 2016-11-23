<?php
/**
 * Created by PhpStorm.
 * User: Matthew Jourard
 * Date: 11/23/2016
 * Time: 5:24 PM
 */

/* @var \Silex\Application $app */
$app->get('/getapp', 'controllers\DemoController::getApplicationObject');
$app->get('/getgetrequest', 'controllers\DemoController::getRequestObject');
$app->post('/getpostrequest', 'controllers\DemoController::getRequestObject');

$app->get('/getShortCustomerList', 'controllers\DatabaseAccessController::getFirstTenCustomers');

/* Also available */
//$app->delete('', '');
//$app->put('', ''); 