<?php
	include('session.php');
	$wid='';
	$wrd='';
	$con='';
	$add='';
	$ema='';
	if(isset($_POST['submit'])) 
	{ 	$wid=$_POST["warid"];
		$s1 = mysqli_query($db,"select * from warden where Warden_id=$wid ");
		$r1 = mysqli_fetch_array($s1,MYSQLI_ASSOC);
		$wrd=$r1['Name'];
		$con=$r1['Contact_no'];
		$add=$r1['Address'];
		$ema=$r1['Email'];
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
	</head>
	<body>
		<div id="perspective" class="perspective effect-airbnb">
			<div class="container" style="left: 0px; top: 0px">
				<div class="wrapper" style="left: 0px; top: 0px"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
				  <header class="codrops-header">
					  <h1><button id="showMenu">Menu</button>Contact Warden
						</h1>	
					</header>
				  <div class="main clearfix" style="height: 250px">
						<div class="column">
							<br><br><br><br><h2>Details of your warden</h2> 
						</div>
						<div class="column">
						 <br><br><br>
							<table>
							<form action="" method="POST">
								<tr><td style="width: 140px">Choose Warden ID: </td>
									<td><select name="warid"><option value=1>1</option><option value=2>2</option></select>
									&nbsp;&nbsp;<input type="submit" name="submit" value="Show"></td></tr>
							</form>
								<tr><td class="auto-style1" style="width: 129px">Name</td>
									<td class="auto-style1"><?php echo $wrd; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Address</td>
									<td class="auto-style1"><?php echo $add; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Contact phone</td>
									<td class="auto-style1"><?php echo $con; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Email Address</td>
									<td class="auto-style1"><?php echo $ema; ?></td></tr>
							</table>
						</div>
				  </div>
				   </div>
			</div><!-- /container -->
			<nav class="outer-nav left vertical">
				<a href="staffHome.php">Home</a>
				<a href="staffMaintenance.php">Maintenance Requests</a>
				<a href="staffupdate.php">Update Info</a>
				<a href="staffwarden.php">Contact Warden</a>
				<a href="logout.php">Sign Out</a>
			</nav>
		</div><!-- /perspective -->
		<script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>