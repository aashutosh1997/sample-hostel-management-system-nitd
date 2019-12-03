<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'hostel management');
$db = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$db1= mysql_select_db('hostel management', $db);
function NewUser() 
{ 
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$Name = $_POST['Name'];
	$DOB = $_POST['DOB']; 
	$Branch = $_POST['Branch'];
	$Semester = $_POST['Semester'];
	$RoomNo = $_POST['RN'];
	$Access =$_POST['Access'];
	$query = "INSERT INTO id (Username,Password,Name,DOB,Branch,Semester,Room_No,Access) VALUES ('$username','$password','$Name','$DOB','$Branch','$Semester','$RoomNo','$Access')"; 
	$data = mysql_query ($query)or die(mysql_error()); 
	if($data) 
	{
		echo "YOUR REGISTRATION IS COMPLETED..."; } 
} 

function SignUp()
{ 
	if(!empty($_POST['Username']))
	{ 
		$query = mysql_query("SELECT * FROM id WHERE Username = '$_POST[Username]' AND Password = '$_POST[Password]'") or die(mysql_error());
		if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
		{
			newuser(); 
		} 
		else 
		{ 
			echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
		}
	} 
}	 
if(isset($_POST['submit'])) 
{ 
	SignUp(); 
} 

?>

<!DOCTYPE HTML>
<html> 
<head> 
<title>Sign-Up</title> 
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head> 
<body id="body-color"> 
<a href="login.php">Go to Login page</a>
<div id="Sign-Up"> 
<fieldset style="width:30%">
<legend>Registration Form</legend> 
<table border="0"> 
<tr> 
<form  action="" method="POST"> 
<td>Name</td>
<td><input type="text" name="Name"></td> 
</tr> 
<tr> 
<td>DOB</td>
<td> <input type="date" name="DOB"></td> 
</tr> 
<tr> 
<td>Username</td>
<td><input type="text" name="Username"></td> 
</tr> 
<tr> 
<td>Password</td>
<td><input type="password" name="Password"></td> 
</tr> 
<tr> 
<td>Branch</td>
<td><select name="Branch">
  <option value="">None</option>
  <option value="CSE">CSE</option>
  <option value="ECE">ECE</option>
  <option value="EEE">EEE</option>
</select></td> 
</tr> 
<tr> 
<td>Semester</td>
<td><select name="Semester">
  <option value=>None</option>
  <option value=1>1</option>
  <option value=2>2</option>
  <option value=3>3</option>
  <option value=4>4</option>
  <option value=5>5</option>
  <option value=6>6</option>
  <option value=7>7</option>
  <option value=8>8</option>
</select></td> 
</tr> 
<tr> 
<td>Room No. </td>
<td><input type="text" name="RN"></td> 
</tr> 
<td>Access</td>
<td><select name="Access">
  <option value="Admin">Admin</option>
  <option value="Staff">Staff</option>
  <option value="Resident">Resident</option>
</select></td> 
</tr> 
<tr> 
<td><input id="button" type="submit" name="submit" value="submit"></td> 
</tr> 
<tr> 

</form> 
</table> 
</fieldset> 
</div> 
</body> 
</html>