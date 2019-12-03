<?php
	if(isset($_POST['submit1'])) 
	{ 
		$db = mysql_connect('localhost','root','','hostel management');
		$db1= mysql_select_db('hostel management', $db);
		$name = $_POST['Name'];
		$dob = $_POST['DOB'];
		$con = $_POST['Contact'];
		$ad = $_POST['Addr'];
		$ema = $_POST['Email'];
		$query = "INSERT INTO warden (Name,DOB,Contact_no,Address,Email) VALUES ('$name','$dob','$con','ad','$ema')"; 
		$data = mysql_query ($query)or die(mysql_error()); 
		if($data) 
		{ 	
			header("location: allwardens.php");
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
    <h3>New Warden Registration</h3>
	<fieldset>
	<table>
			
	<tr><td style="width: 129px">Name: </td><td><input name="Name" type="text" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Date of Birth: </td><td><input name="DOB" type="date" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Phone no: </td><td><input name="Contact" type="text" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Address: </td><td><textarea name="Addr" type="text" tabindex="1" required autofocus></textarea></td></tr>
	
	<tr><td style="width: 129px">Email: </td><td><input name="Email" type="text" tabindex="1" required autofocus></td></tr>
	
	</table>
	</fieldset>
    <fieldset>
      <button name="submit1" type="submit1" id="submit1" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
<body>