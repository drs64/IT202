<?php
#turn on error reporting 
ini_set('display_errors',1);
ini_set('display_startuo_errors', 1);

error_reporting(E_All);

require('config.php');
echo $host;

$connection_string="mysql:host=$host;dbname=$database;database=$username;password=$password;charset=utf8mb4";

try{
	$db = new PDO($connection_string, $username, $password);
	echo " connected";


	$query = "create table if not exists `TestUsers`(
		`id` int auto_increment not null,
		`username` varchar(30) not null unique,
		`pin` int default 0,
		PRIMARY KEY (`id`)
		) CHARACTER SET utf8 COLLATE utf8_general_ci";
	$stmt = $db->prepare($query);
	$r = $stmt->execute();
	echo "<br>" . $r . "<br>";

		
}

catch(Exception $e){
	echo $e ->getMessage();
	exit("It didin't work");
}
?>
