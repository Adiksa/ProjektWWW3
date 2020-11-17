<?php

include 'polaczenie.php';

?>

<table class="table table-hover">
    <th>Id</th>
    <th>Model</th>
    <th>Tablice</th>
    <th>Silnik</th>
    <th>Ksywka</th>
<?php
$sql = "SELECT * FROM crudHonda";
$output = $polaczenie->query($sql);

while($row = $output->fetch()) {
	?>
	<tr>
		<td><?php echo $row[0]; ?></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
	</tr>
<?php
}
?>
<table border="1">