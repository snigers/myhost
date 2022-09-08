<?php

function pr($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>' . PHP_EOL;
}


$name = ($_POST["name"]) ? $_POST["name"] : "";
$lastname = ($_POST["lastname"]) ? $_POST["lastname"] : "";
$phone = ($_POST["phone"]) ? $_POST["phone"] : "";
$email = ($_POST["email"]) ? $_POST["email"] : "";

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
//				   "INSERT INTO users (name, lastname, phone, email)
//					VALUES ('" . $name . "', '" . $lastname . "', '" . $phone . "', '" . $email . "')");
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