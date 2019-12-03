<?php
	include('session.php');
   $se_sql = mysqli_query($db,"select * from id where username = '$login_session' ");
   $ro = mysqli_fetch_array($se_sql,MYSQLI_ASSOC);
   $name = $ro['Name'];
   $dob = $ro['DOB'];
   $branch = $ro['Branch'];
   $sem = $ro['Semester'];
   $rno = $ro['Room_no'];
   $acc=$ro['Access'];
   $ema=$ro['Email'];
   $phn=$ro['Contact_no'];
   $add=$ro['Permanent_address']
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>National Institute of Technology Delhi Hostel Management</title>
		<meta name="description" content="Perspective Page View Navigation: Transforms the page in 3D to reveal a menu" />
		<meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
		<script src="js/modernizr.custom.25376.js"></script>
	</head>
	<body>
		<div id="perspective" class="perspective effect-airbnb">
			<div class="container">
				<div class="wrapper"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
					<header class="codrops-header">
					  <h1><button id="showMenu">Menu</button>Hostel management Navigation Page</h1>	
					</header>
				  <div class="main clearfix">
						<div class="column">
							<br><br><br><br><h2>Welcome <?php echo $login_session; ?></h2> 
							<h2><a href = "logout.php">Sign Out</a></h2>
						</div>
						<div class="column">
						 <br><br><br>
							<table>
								<tr><td class="auto-style1" style="width: 129px">Name </td>
									<td class="auto-style1"><?php echo $name; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Username </td>
									<td class="auto-style1"><?php echo $login_session; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Date of Birth</td>
									<td class="auto-style1"><?php echo $dob; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Branch</td>
									<td class="auto-style1"><?php echo $branch; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Semester</td>
									<td class="auto-style1"><?php echo $sem; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Room number</td>
									<td class="auto-style1"><?php echo $rno; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Access</td>
									<td class="auto-style1"><?php echo $acc; ?></td></tr>
									<tr><td class="auto-style1" style="width: 129px">Permanent Address</td>
									<td class="auto-style1"><?php echo $add; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Phone No.</td>
									<td class="auto-style1"><?php echo $phn; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Email ID</td>
									<td class="auto-style1"><?php echo $ema; ?></td></tr>
							</table>
						</div>
						<div class="related">
							<p>&nbsp;</p>
						</div>
				  </div><!-- /main -->
				</div><!-- wrapper -->
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