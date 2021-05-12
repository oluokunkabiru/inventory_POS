<?php
	include('session.php');
	$pid=$_GET['id'];
	
	$a=mysqli_query($conn,"select * from product where productid='$pid'");
	$b=mysqli_fetch_array($a);
	unlink("../".$b['photo']);

	mysqli_query($conn,"delete from product where productid='$pid'");
	
	header('location:product.php');

?>