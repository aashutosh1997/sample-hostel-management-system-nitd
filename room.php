<?php
	include('session.php');
	$s1 = mysqli_query($db,"select * from rooms inner join id on rooms.Room_no=id.Room_no inner join rtypes on rooms.Type_id=rtypes.Id inner join blocks on blocks.Block_no=rooms.Block_no inner join warden on warden.Warden_id=blocks.Warden_no where id.username = '$login_session' ");
	$r1 = mysqli_fetch_array($s1,MYSQLI_ASSOC);
	$rno = $r1['Room_no'];
	$rty=$r1['Type'];
	$rst=$r1['Seats'];
	$rnt=$r1['Rent'];
	$wrd=$r1['Name'];
	$blk=$r1['Block_no']
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Manage Your Room</title>
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
					  <h1><button id="showMenu">Menu</button>Room Details
						</h1>	
					</header>
				  <div class="main clearfix" style="height: 250px">
						<div class="column">
							<br><br><br><br><h2>Room details for <?php echo $login_session; ?></h2> 
						</div>
						<div class="column">
						 <br><br><br>
							<table>
								<tr><td class="auto-style1" style="width: 129px">Username </td>
									<td class="auto-style1"><?php echo $login_session; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Block no. </td>
									<td class="auto-style1"><?php echo $blk; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Room no. </td>
									<td class="auto-style1"><?php echo $rno; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Warden </td>
									<td class="auto-style1"><?php echo $wrd; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Type</td>
									<td class="auto-style1"><?php echo $rty; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Seats</td>
									<td class="auto-style1"><?php echo $rst; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Room Rent</td>
									<td class="auto-style1"><?php echo $rnt; ?></td></tr>
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
	</body>
</html>