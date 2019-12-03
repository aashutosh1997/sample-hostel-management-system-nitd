<?php
	$ri=$_GET['ref'];
	include('session.php');
	  $se_sql = mysqli_query($db,"select * from maintenance_request where RID = '$ri' ");
   $ro = mysqli_fetch_array($se_sql,MYSQLI_ASSOC);
   $username = $ro['Username'];
   $typ = $ro['Type'];
   $dt= $ro['Date_and_time'];
    $see_sql = mysqli_query($db,"select * from id where username = '$login_session' ");
   $roo = mysqli_fetch_array($see_sql,MYSQLI_ASSOC);
   $staff = $roo['Name'];
	if(isset($_POST['submit1'])) 
	{ 
		$db = mysql_connect('localhost','root','','hostel management');
		$db1= mysql_select_db('hostel management', $db);
		$sta = $_POST['Status'];
		$query = "UPDATE maintenance_request SET Status='$sta',Staff_involved='$staff' WHERE RID='$ri'"; 
		$data = mysql_query ($query)or die(mysql_error()); 
		if($data) 
		{ 	
			header("location: staffMaintenance.php");
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
    <h3>Maintenance Update Form</h3>
    <h4>Update the status</h4>
	<fieldset>
	<table>
	<tr><td style="width: 129px">Request ID: </td><td><?php echo $ri; ?></td></tr>
	<tr><td style="width: 129px">Username: </td><td><?php echo $username; ?></td></tr>
	<tr><td style="width: 129px">Type: </td><td><?php echo $typ; ?></td></tr>
	<tr><td style="width: 129px">Date Modified: </td><td><?php echo $dt; ?></td></tr>
	<tr><td style="width: 129px">Status: </td><td><select name="Status"><option value="Registered">Registered</option><option value="Operating">Operating</option><option value="Resolved">Resolved</option></td></tr>
	</table>
	</fieldset>
    <fieldset>
      <button name="submit1" type="submit1" id="submit1" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
<body>