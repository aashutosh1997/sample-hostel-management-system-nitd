<?php
	include('session.php');
	$var = $_GET['ref'];
	$db = mysql_connect('localhost','root','','hostel management');
	$db1= mysql_select_db('hostel management', $db);
	$query = "DELETE FROM id WHERE Username='$var'"; 
	$data = mysql_query ($query)or die(mysql_error()); 
	if($data) 
	{ 	
		header("location: allresidents.php");
	} 
?>
 