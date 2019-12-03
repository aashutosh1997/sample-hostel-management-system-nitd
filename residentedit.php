<?php
	$username=$_GET['ref'];
	include('session.php');
	$se_sql = mysqli_query($db,"select * from id where Username = '$username' ");
   $ro = mysqli_fetch_array($se_sql,MYSQLI_ASSOC);
	$pass = $ro['Password'];
   $name = $ro['Name'];
   $dob = $ro['DOB'];
   $br=$ro['Branch'];
   $sem=$ro['Semester'];
   $rno=$ro['Room_no'];
   $ad=$ro['Permanent_address'];
   $ema=$ro['Email'];
   $con=$ro['Contact_no'];
	if(isset($_POST['submit1'])) 
	{ 
		$db = mysql_connect('localhost','root','','hostel management');
		$db1= mysql_select_db('hostel management', $db);
		$name1 = $_POST['Name'];
		$dob1 = $_POST['DOB'];
		$br1=$_POST['Branch'];
		$sem1=$_POST['Semester'];
		$rno1=$_POST['Room_no'];
		$ad1=$_POST['Permanent_address'];
		$con1=$_POST['Contact_no'];
		$ema1=$_POST['Email'];
		$query = "UPDATE id SET Name='$name1',DOB='$dob1',Contact_no='$con1',Permanent_address='$ad1',Email='$ema',Room_no='$rno1',Semester='$sem1',Branch='$br1' WHERE Username='$username'"; 
		$data = mysql_query ($query)or die(mysql_error()); 
		if($data) 
		{ 	
			header("location: allresidents.php");
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
    <h3>Resident Update Form</h3>
    <h4>Update the status</h4>
	<fieldset>
	<table>
	
	<tr><td style="width: 129px">Username: </td><td><?php echo $username ?></td></tr>
		
	<tr><td style="width: 129px">Name: </td><td><input value="<?php echo $name; ?>" name="Name" type="text" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Password: </td><td><?php echo $pass ?></td></tr>
	
	<tr><td style="width: 129px">Date of Birth: </td><td><input value=<?php echo $dob; ?> name="DOB" type="date" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Branch: </td><td><input value=<?php echo $br; ?> name="Branch" type="text" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Semester: </td><td><input value=<?php echo $sem; ?> name="Semester" type="text" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Room no: </td><td><input value=<?php echo $rno; ?> name="Room_no" type="text" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Phone no: </td><td><input value=<?php echo $con; ?> name="Contact_no" type="text" tabindex="1" required autofocus></td></tr>
	
	<tr><td style="width: 129px">Address: </td><td><textarea name="Permanent_address" type="text" tabindex="1" required autofocus><?php echo $ad; ?></textarea></td></tr>
	
	<tr><td style="width: 129px">Email: </td><td><input value=<?php echo $ema; ?> name="Email" type="text" tabindex="1" required autofocus></td></tr>
	
	</table>
	</fieldset>
    <fieldset>
      <button name="submit1" type="submit1" id="submit1" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
<body>