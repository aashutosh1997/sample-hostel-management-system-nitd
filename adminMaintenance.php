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
		<link rel="stylesheet" type="text/css" href="css/table.css" />
		<style type="text/css">
		.no-js body .container .wrapper .right_content {
	text-align: center;
}
        .maintenanceT {
	font-size: 16px;
	font-weight: bold;
}
        </style>
	</head>
	<body>
		<div id="perspective" class="perspective effect-airbnb">
			<div class="container" style="left: 0px; top: 0px">
				<div class="wrapper" style="left: 0px; top: 0px"><!-- wrapper needed for scroll -->
					<!-- Top Navigation -->
				  <header class="codrops-header">
					  <h1><button id="showMenu">Menu</button>Current Requests
						</h1>	
					</header>
							<div class="right_content">
						      <?php 
							include('session.php');
							$conn=new mysqli('localhost','root','','hostel management');
							if($conn->connect_error){
								die("Connection failed: ".$conn->connect_error);
							}
								$result=$conn->query("select * from maintenance_request");
								if ($result->num_rows>0){
									echo "<table id='rounded-corner' style='width:100%;'><thead><tr><th scope='col' class='rounded'>RID</th><th scope='col' class='rounded'>Username</th><th scope='col' class='rounded'>Type</th><th scope='col' class='rounded'>Date Modified</th><th scope='col' class='rounded'>Current Status</th><th scope='col' class='rounded'>Staff</th><th scope='col' class='rounded-q4' style='width:20px'>Delete</th></tr></thead>";
									while($row=$result->fetch_assoc()){
										echo "<tbody><tr><td style='width:60px'>".$row["RID"]."</td><td>".$row["Username"]."</td><td style='width:18%'> ".$row["Type"]."</td><td style='width:18%'>".$row["Date_and_time"]."</td><td style='width:18%'>".$row["Status"]."</td><td>".$row["Staff_involved"]."</td><td style='width:20px'><a href='delete.php?ref=".$row["RID"]."' class='ask'><img src='images/trash.png' alt='' title='' border=0 /></a></td></tr></tbody>";
									}
									echo"</table></p></div>";
								} else {
									echo"<br>No requests registered";
								}
							$conn->close();
							?>
						   
							  </span>
			      </div>
			</div><!-- /container -->
			<nav class="outer-nav left vertical">
				<a href="adminHome.php">Home</a>
				<a href="allresidents.php">Manage Residents</a>
				<a href="allstaff.php">Manage Staff</a>
				<a href="allwardens.php">Manage Wardens</a>
				<a href="adminMaintenance.php">Maintenance Requests</a>
				<a href="logout.php">Sign Out</a>
			</nav>
		</div><!-- /perspective -->
		<script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
	</body>
</html>