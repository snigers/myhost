<?php
function pr($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>' . PHP_EOL;
}



//$connect = pg_connect('host=myhost.local dbname=customer user=postgres password=postgres');
//
//if (!$connect) {
//	echo "Not connected!" . PHP_EOL;
//
//	die();
//}
//
//
//$result = pg_query($connect,
//				   "CREATE TABLE users (
//								id SERIAL PRIMARY KEY,
//								name varchar null,
//								lastname varchar null,
//								phone int null,
//								email varchar null
//							)");
//
//$errorMessage = pg_last_error();
//
//if (!$result || $errorMessage) {
//	pr($errorMessage);
//
//	pg_close($connect);
//	die();
//}
//
//
//
//
//
//pg_close($connect);