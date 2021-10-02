<?php

$dsn = 'mysql:host=localhost;dbname=NCEDC';
$username = 'root';
$password = 'adekanmi';


try {
	$db1 = new PDO($dsn, $username, $password);
	echo "";
} catch (PDOException $e) {
	$error_message = $e ->getMessage();
	echo "<p> Connection error! : $error_message </p>";
}





?>