<?php

$conectar=mysqli_connect("localhost","root","qwerty1","concesionario") or die;
$sql = "SELECT * FROM Usuarios";
$result=mysqli_query($conectar, $sql) or die (mysqli_error);
while ($row=mysqli_fetch_array($result)) {

	echo $row;
	}
?>
