<?php
	include('session.php');
	$s1 = mysqli_query($db,"select * from mess inner join mealtypes on mess.Meal_Type=mealtypes.Type where mess.Username = '$login_session' ");
	$r1 = mysqli_fetch_array($s1,MYSQLI_ASSOC);
	$bid = $r1['Bill_id'];
	$typ=$r1['Type'];
	$cst=$r1['Cost'];
	if(isset($_POST['confirm'])) 
	{ 
		$db = mysql_connect('localhost','root','','hostel management');
		$db1= mysql_select_db('hostel management', $db);
		$Utype = $_POST['Type'];
		$query = "UPDATE mess SET Meal_Type='$Utype' WHERE Username='$login_session'"; 
		$data = mysql_query ($query)or die(mysql_error()); 
		if($data) 
		{ header("location: mess.php"); } 
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
		<link rel="stylesheet" type="text/css" href="css/popup.css" />
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
		<script src="js/modernizr.custom.25376.js"></script>
	</head>
	<body>
		<div id="perspective" class="perspective effect-airbnb">
			<div class="container" style="left: 0px; top: 0px">
				<div class="wrapper" style="left: 0px; top: 0px"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
				  <header class="codrops-header">
					  <h1><button id="showMenu">Menu</button>Manage Mess</h1>	
					</header>
				  <div class="main clearfix" style="height: 250px">
						<div class="column">
							<br><br><br><br><h2>Mess details for <?php echo $login_session; ?></h2> 
						</div>
						<div class="column">
						 <br><br><br>
							<table>
								<tr><td class="auto-style1" style="width: 129px">Username </td>
									<td class="auto-style1"><?php echo $login_session; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Bill id</td>
									<td class="auto-style1"><?php echo $bid; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Meal Type</td>
									<td class="auto-style1"><?php echo $typ; ?>
									<!-- Trigger/Open The Modal -->
									<td><button id="myBtn">Change</button>
									<!-- The Modal -->
									<div id="myModal" class="modal">
										<!-- Modal content -->	
										<div class="modal-content">
										<span class="close">x</span>
										<form  action="" method="POST"> 
										<br><h3>Choose a new plan:</h3>
										<table><tr><td><select name="Type">
											<option value='Veg'>Veg</option>
											<option value='NonVeg'>NonVeg</option>
											<option value='Continental'>Continental</option>
											<option value='Italian'>Italian</option>
											</select></td></tr>
											<tr><td><button type="confirm" name="confirm" value="confirm">Confirm</button></td></tr>
										</table>
										</form>
										</div>
									</div></td></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Semester Cost</td>
									<td class="auto-style1"><?php echo $cst; ?></td></tr>
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
	</body>
</html>