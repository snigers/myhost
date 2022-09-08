<?php
$user = "postgres";
$pass = "postgres";
//try {
//	$dbh = new PDO('pgsql:host=myhost.local;dbname=customer', $user, $pass);
//	foreach($dbh->query('SELECT * from FOO') as $row) {
//		print_r($row);
//	}
//	$dbh = null;
//} catch (PDOException $e) {
//	print "Error!: " . $e->getMessage() . "<br/>";
//	die();
//}


try {
	$connect = pg_connect('host=myhost.local dbname=customer user=postgres password=postgres');
	
	if (!$connect) {
		echo "Error connect DB! \n";
		exit;
	} else {
		echo "success";
	}
	
	
//	$result = pg_query($connect,
//					   "CREATE TABLE users(
//    								id INT PRIMARY KEY NOT NULL,
//									name varchar null
//								)");
//	if (!$result) {
//		echo "Произошла ошибка.\n";
//		exit;
//	} else {
//		echo "create table.\n";
//	}
	
	
	
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}