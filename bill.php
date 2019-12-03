<?php
	include('session.php');
   $se_sql = mysqli_query($db,"select bill.InvoiceNo,id.Username,bill.Due_date,mealtypes.Cost,rtypes.Rent,mess.Bill_id,(mealtypes.Cost+rtypes.Rent)AS Due_amount from bill inner join id on bill.Username=id.Username inner join rooms on rooms.Room_no=id.Room_no inner join rtypes on rtypes.Id=rooms.Type_id inner join mess on mess.Username=id.Username inner join mealtypes on mealtypes.Type=mess.Meal_Type WHERE id.Username='$login_session'");
   $ro = mysqli_fetch_array($se_sql,MYSQLI_ASSOC);
   $inv = $ro['InvoiceNo'];
   $dd = $ro['Due_date'];
   $da = $ro['Due_amount'];
   $cst = $ro['Cost'];
   $rnt=$ro['Rent'];
   $bid=$ro['Bill_id'];
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
		<style type="text/css">
</style>
	</head>
	<body>
		<div id="perspective" class="perspective effect-airbnb">
			<div class="container" style="left: 0px; top: 0px">
				<div class="wrapper" style="left: 0px; top: 0px;"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
					<header class="codrops-header">
					  <h1><button id="showMenu">Menu</button>Bill </h1>	
					</header>
				  <div class="main clearfix">
						<div class="column">
							<br><br><br><br><h2>Your Account Statement</h2> 
						</div>
						<div class="column">
						 <br><br><br>
							<table>
								<tr><td class="auto-style1" style="width: 129px">Invoice Number </td>
									<td class="auto-style1"><?php echo $inv; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Username </td>
									<td class="auto-style1"><?php echo $login_session; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Mess ID</td>
									<td class="auto-style1"><?php echo $bid; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Room Rent</td>
									<td class="auto-style1"><?php echo $rnt; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Mess Fee</td>
									<td class="auto-style1"><?php echo $cst; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Due Date</td>
									<td class="auto-style1"><?php echo $dd; ?></td></tr>
								<tr><td class="auto-style1" style="width: 129px">Total Due Amount</td>
									<td class="auto-style1"><strong><?php echo $da; ?></strong></td></tr>
							</table>
						</div>
						<div class="related">&nbsp;</div>
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