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
					  <h1><button id="showMenu">Menu</button>Hostel Staffs
						</h1>	
					</header>
							<div class="right_content">
						      <?php 
							include('session.php');
							$conn=new mysqli('localhost','root','','hostel management');
							if($conn->connect_error){
								die("Connection failed: ".$conn->connect_error);
							}
								$result=$conn->query("select * from ID where Access='Staff'");
								if ($result->num_rows>0){
									echo "<table id='rounded-corner' style='width:100%;'><thead><tr><th scope='col' class='rounded'>Name</th><th scope='col' class='rounded'>Username</th><th scope='col' class='rounded'>Date of Birth</th><th scope='col' class='rounded'>Access</th><th scope='col' class='rounded'>Permanent Address</th><th scope='col' class='rounded'>Phone no.</th><th scope='col' class='rounded'>Email ID</th><th scope='col' class='rounded' style='width:20px'>Edit</th><th scope='col' class='rounded-q4' style='width:20px'>Delete</th></tr></thead>";
									while($row=$result->fetch_assoc()){
										echo "<tbody><tr><td>".$row["Name"]."</td><td>".$row["Username"]."</td><td> ".$row["DOB"]."</td><td>".$row["Access"]."</td><td>".$row["Permanent_address"]."</td><td>".$row["Contact_no"]."</td><td>".$row["Email"]."</td><td><a href='staffedit.php?ref=".$row["Username"]."'><img src='images/user_edit.png' alt='' title='' border=0 /></a></td><td style='width:20px'><a href='staffdelete.php?ref=".$row["Username"]."' class='ask'><img src='images/trash.png' alt='' title='' border=0 /></a></td></tr></tbody>";
									}
									echo"<tr><td colspan=9><a href='staffreg.php'>Insert New record</a></td></tr></table></p></div>";
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