<?php

	$app = require_once(dirname(__file__) . DIRECTORY_SEPARATOR . 'framework' . DIRECTORY_SEPARATOR . 'Initialize.php');

	try
	{
		$app->run();
	}
	catch (Exception $e)
	{
		die($e->getMessage());
	}

?>