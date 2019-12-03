<?php

include('session.php');
$se_sql = mysqli_query($db,"select * from id where Username = '$login_session' ");
$row = mysqli_fetch_array($se_sql,MYSQLI_ASSOC);
$username = $row['Username'];
function Register($username)
{
	$db = mysqli_connect('localhost','root','','hostel management');
	$type = mysqli_real_escape_string($db,$_POST['Type']);
	$db1 = mysql_connect('localhost','root','','hostel management');
	$db2= mysql_select_db('hostel management', $db1);
	$data = mysql_query ("insert into maintenance_request(Username,Type) VALUES('$username','$type')")or die(mysql_error()); 
	$msg="";
	if($data) 
	{
		$msg= "Your request has been forwarded"; 
	}
}

if(isset($_POST['submit'])) 
{ 
	Register($username); 
} 
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>National Institute of Technology Delhi Hostel Management</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
		<script src="js/modernizr.custom.25376.js"></script>
		<style>
		#customers {
    		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			font-size:8;
	    	border-collapse: collapse;
	    	width: 100%;
			}

		#customers td, #customers th {
	    	border: 0px solid #ddd;
	    	padding: 0px;
			}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
    		padding-top: 0px;
    		padding-bottom: 0px;
    		text-align: center;
    		background-color: #4CAF50;
    		color: white;
			}
		.auto-style3 {
			margin-top: 0;
			margin-bottom: 0;
			}
	</style>
	</head>
	<body>
		<div id="perspective" class="perspective effect-airbnb">
			<div class="container" style="left: 0px; top: 0px">
				<div class="wrapper" style="left: 0px; top: 0px"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
				  <header class="codrops-header">
					  <h1><button id="showMenu">Menu</button>Maintenance Request Page 
						</h1>	
					</header>
				  <div class="main clearfix" style="height: 250px">
						<div class="column" style="left: 0; top: 0; height: 176px">
							<br><br><br><br><h2>File Your Request Here</h2>
						</div>
						<div class="column" style="left: 0; top: 0; height: 176px">
						  <form  action="" method="POST">
						  <table>
							<tr><td><br><br>Select type<br>
								<select name="Type" class="auto-style3" style="width: 127px; height: 50px">
								<option value="Cleaning">Cleaning</option>
								<option value="Furniture">Furniture</option>
								<option value="Electricity">Electricity</option>
								<option value="Internet">Internet</option>
							</select></td> </tr>
							<tr> 
							<td><br>
							<input id="button" type="submit" name="submit" value="submit" class="codrops-demos" style="width: 125px; height: 52px"></td> 
							</tr> 
						</table>
						  </form>
					</div>
				  </div>
				  <span class="related">
							<?php 
							$se_sql = mysqli_query($db,"select * from id where Username = '$login_session' ");
							$row = mysqli_fetch_array($se_sql,MYSQLI_ASSOC);
							$username = $row['Username'];
							$conn=new mysqli('localhost','root','','hostel management');
							if($conn->connect_error){
								die("Connection failed: ".$conn->connect_error);
							}
								$result=$conn->query("select * from maintenance_request where Username='$username'");
								if ($result->num_rows>0){
									echo "<br><div class='related' style='font-size:16px'><p><table id='customers'><tr><td><strong><p align='left'>Current Requests</p></strong></td></tr><tr><th>RID</th><th>Username</th><th>Type</th><th>Date Registered</th><th>Current Status</th></tr>";
									while($row=$result->fetch_assoc()){
										echo "<tr><td>".$row["RID"]."</td><td>".$row["Username"]."</td><td> ".$row["Type"]."</td><td>".$row["Date_and_time"]."</td><td>".$row["Status"]."</td></tr>";
									}
									echo"</table></p></div>";
								} else {
									echo"<br>No requests registered";
								}
							$conn->close();
							?>
			<br></span>
				   </div>
			</div><!-- /container -->
			<nav class="outer-nav left vertical">
				<a href="welcome.php">Home</a>
				<a href="room.php">Room</a>
				<a href="mess.php">Mess</a>
				<a href="Maintenance.php">Request Maintenance</a>
				<a href="bill.php">Bill</a>
				<a href="update.php">Update Info</a>
				<a href="warden.php">Contact Warden</a>
				<a href="logout.php">Sign Out</a>
			</nav>
		</div><!-- /perspective -->
		<script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>