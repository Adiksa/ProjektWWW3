<?php

include 'polaczenie.php';

?>

$Model = "";
$Tablice = "";
$Silnik = "";
$Ksywka = "";
$Email = "";
$update = false;

if (isset($_POST['save'])) {
		$Model = $_POST['Model'];
        $Tablice = $_POST['Tablice'];
        $Silnik = $_POST['Silnik'];
        $Ksywka = $_POST['Ksywka'];
        $Email = $_POST['Email'];

		$polaczenie->query($db, "INSERT INTO s149656.crudHonda (
                           Model ,
                           Tablice ,
                           Silnik ,
                           Ksywka ,
                           Email
                           )
                           VALUES ('$Model', '$Tablice', '$Silnik', '$Ksywka', '$Email')");
}