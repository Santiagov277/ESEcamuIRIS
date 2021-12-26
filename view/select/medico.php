<?php

$conexion = mysqli_connect("localhost","root","","trabajo");

$query = $conexion->query("SELECT * FROM specialty");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codespe']. '">' . $row['nombrees'] . '</option>' . "\n";
}
