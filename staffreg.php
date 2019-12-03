<?php
	include('session.php');
	if(isset($_POST['submit1'])) 
	{ 
		$db = mysql_connect('localhost','root','','hostel management');
		$db1= mysql_select_db('hostel management', $db);
		$username=$_POST['Username'];
		$password=$_POST['Password'];
		$name = $_POST['Name'];
		$dob = $_POST['DOB'];
		$ad=$_POST['Permanent_address'];
		$con=$_POST['Contact_no'];
		$ema=$_POST['Email'];
		$query = "INSERT INTO id (Username,Name,Password,DOB,Permanent_address,Access,Contact_no,Email) VALUES('$username','$name','$password','$dob','$ad','Staff',$con,'$ema')"; 
		$data = mysql_query ($query)or die(mysql_error()); 
		if($data) 
		{ 	
			header("location: allstaff.php");
		} 
	} 
   ?>
<html>
<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>National Institute of Technology Delhi Hostel Management</title>
		<link rel="stylesheet" type="text/css" href="css/form.css" />
</head>
<body>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>New Staff Form</h3>
	<fieldset>
	<table>
	
	<tr><td style="width: 129px">Username: </td><td><input name="Username" type="text" tabindex="1" required autofocus></td></tr>
		
	<tr><td style="width: 129px">Name: </td><td><input name="Name" type="text" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Password: </td><td><input name="Password" type="password" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Date of Birth: </td><td><input name="DOB" type="date" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Phone no: </td><td><input name="Contact_no" type="text" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Address: </td><td><textarea name="Permanent_address" type="text" tabindex="1" required autofocus></textarea></td></tr>
	
	<tr><td style="width: 129px">Email: </td><td><input name="Email" type="email" tabindex="1" required autofocus></td></tr>
	
	</table>
	</fieldset>
    <fieldset>
      <button name="submit1" type="submit1" id="submit1" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
<body>