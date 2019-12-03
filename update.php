<?php
	include('session.php');
	if(isset($_POST['submitc'])) 
	{ 
		$db = mysql_connect('localhost','root','','hostel management');
		$db1= mysql_select_db('hostel management', $db);
		$con = $_POST['con'];
		$query = "UPDATE id SET Contact_no=$con WHERE Username='$login_session'"; 
		$data = mysql_query ($query)or die(mysql_error()); 
		if($data) 
		{ 	
			$message="Contact no. updated";
		} 
	} 
	if(isset($_POST['submite'])) 
	{ 
		$db = mysql_connect('localhost','root','','hostel management');
		$db1= mysql_select_db('hostel management', $db);
		$ema = $_POST['ema'];
		$query = "UPDATE id SET Email='$ema' WHERE Username='$login_session'"; 
		$data = mysql_query ($query)or die(mysql_error()); 
		if($data) 
		{ 	
			$message="Email ID updated";
		} 
	} 
	if(isset($_POST['submita'])) 
	{ 
		$db = mysql_connect('localhost','root','','hostel management');
		$db1= mysql_select_db('hostel management', $db);
		$add = $_POST['add'];
		$query = "UPDATE id SET Permanent_address='$add' WHERE Username='$login_session'"; 
		$data = mysql_query ($query)or die(mysql_error()); 
		if($data) 
		{ 	
			$message="Address updated";
		} 
	} 
	if(isset($_POST['submitp'])) 
	{ 


		$db=mysql_connect('localhost','root','','hostel management');
		$db1= mysql_select_db('hostel management', $db);
		$result = mysql_query("SELECT *from id WHERE Username='$login_session'")or die(mysql_error());
			$row=mysql_fetch_array($result,MYSQL_ASSOC);
		$np=$_POST["newPassword"];
		if(count($_POST)>0) 
		{
			if($_POST["currentPassword"] == $row["Password"]) 
			{
				$query="UPDATE id set Password='$np' WHERE Username='$login_session'";
				$data=mysql_query($query)or die(mysql_error());
				if($data)
					{$message = "Password Changed";}
			} else {$message = "Current Password is not correct";}
		}
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
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		<link rel="stylesheet" type="text/css" href="css/popup2.css" />
		<link rel="stylesheet" type="text/css" href="css/password.css" />
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
		<script src="js/modernizr.custom.25376.js"></script>
	</head>
	<body>
	<?php if(isset($message)) { echo $message; } ?>
		<div id="perspective" class="perspective effect-airbnb">
			<div class="container" style="left: 0px; top: 0px">
				<div class="wrapper" style="left: 0px; top: 0px"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
				  <header class="codrops-header">
					  <h1><button id="showMenu">Menu</button>Information Updation</h1>	
					</header>
				  <div class="main clearfix" style="height: 250px">
						<div class="column">
							<br><br><br><br><h2>Update your Information</h2> 
						</div>
						<div class="column">
						 <br><br><br>
							<table>
							<form action="" method="POST">
								<tr><td style="width: 129px"><br>Contact No. </td>
									<td><br><input type="text" name="con"></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submitc" value="Change"></td></tr>
							</form>		
							<form action="" method="POST">
								<tr><td style="width: 129px"><br>Email ID </td>
									<td><br><input type="text" name="ema"></td>
									<td><input type="submit" name="submite" value="Change"></td></tr>
							</form>
							<form action="" method="POST">
								<tr><td style="width: 129px"><br>Address </td>
									<td><br><textarea name="add"></textarea></td>
									<td><input type="submit" name="submita" value="Change"></td></tr>
							</form>
								<tr><td style="width: 129px"><br>Password </td>
									<td><button id="myBtn">Change</button>
									<div id="myModal" class="modal" width=60%>
										<div class="modal-content">
										<span class="close">x</span>
										<form name="frmChange" method="POST" action="" onSubmit="return validatePassword()">
											<table>
												<tr>
												<td colspan="2">Change Password</td>
												</tr>
												<tr>
												<td><label>Current Password</label></td>
												<td><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
												</tr>
												<tr>
												<td><label>New Password</label></td>
												<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
												</tr>
												<tr>
												<td><label>Confirm Password</label></td>
												<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
												</tr>
												<tr>
												<td colspan="2"><input type="Submit" name="submitp" value="Submit"></td>
												</tr>
											</table>
											
										</form>
										</div>
									</div></td></tr>									
							
							</table>
						</div>
				  </div>
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
		<script src="js/popup.js"></script>
		<script src="js/password.js"></script>
	</body>
</html>