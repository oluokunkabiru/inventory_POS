<?php

$conn = mysqli_connect("localhost","root","","inventorypos");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>