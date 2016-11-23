<?php
/**
 * Created by PhpStorm.
 * User: Matthew Jourard
 * Date: 11/23/2016
 * Time: 5:31 PM
 */

namespace controllers;
use Symfony\Component\HttpFoundation\Request;
use Silex\Application;

class DatabaseAccessController
{
	public function getFirstTenCustomers(Request $request, Application $app)
	{
		/** @var \Doctrine\DBAL\Connection $conn */
		$conn = $app['db'];
		$qb = $conn->createQueryBuilder();
		$qb->select('*');
		$qb->from('customers');
		$qb->setMaxResults(10);
		$results = $qb->execute();

		return $app->json(['customers' => $results->fetchAll()]);
	}
}

?>
