<?php

$db_user ='s149656';
$db_password ='tN8GCzLgGeCa';

try{
	$polaczenie = new PDO('mysql:host=localhost;dbname=s149656',$db_user, $db_password);
}catch (PDOException $exception){
	echo 'Nie dziala baza';
}
?>