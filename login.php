<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['Username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']); 
	  $acc=mysqli_real_escape_string($db,$_POST['Access']);
	  $db1 = mysql_connect('localhost','root','','hostel management');
	  $db2= mysql_select_db('hostel management', $db1);
      $sql = "SELECT username FROM id WHERE Username = '$myusername' and Password = '$mypassword' and Access='$acc'";
	  $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
	  $data = mysql_query ("insert into login (Username,Access) values('$myusername','$acc')")or die(mysql_error());
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		
         $_SESSION['login_user'] = $myusername;
         if ($acc=='resident')
		 {
			 header("location: welcome.php");
		 }
		 elseif ($acc=='staff')
		 {
			 header("location: staffhome.php");
		 }
		 elseif ($acc=='admin')
		 {
			 header("location: adminHome.php");
		 }
         else{$error="";}
		 
      }else {
         $error = " ";
      }
   }
?>
<!doctype html>

<head>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	<style type="text/css">
	body {
	background-image: url(NIT-Delhi.jpg);
}
    .auto-style1 {
	margin-left: 0;
}
.auto-style2 {
	text-align: center;
}
    .auto-style4 {
	text-align: center;
	font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
	font-size: x-large;
}
    </style>
</head>


	
<body>
	
	
	
	<div id="container">
		
		 <div style = "font-size:11px; color:#cc0000; margin-top:10px">
		
		<form action="" method="post">
		
		<label for="name">Username:</label>
		
		<input type="name" name="Username">
		<label for="username">Password:</label>
		
		<p><a href="#">Forgot your password?</a>
		
		<input type="password" name="Password">
		
		<label for="name">Access:</label>
		
		<select name="Access">
			<option value="admin">Admin</option>
			<option value="staff">Staff</option>
			<option value="resident">Resident</option>
		</select>
		<div id="lower">
		
		<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		 </div>
		
	</div>
	
	
	
	<p>&nbsp;</p>
	<p class="auto-style2">
	<img alt="" class="auto-style1" height="63" src="logo.png" width="527"></p>
	<p class="auto-style2">
	&nbsp;</p>
	<p class="auto-style4">
	&nbsp;</p>
	<p class="auto-style4">
	Hostel Management System</p>
	
	
	
</body>

</html>
	
	
	
	
	
		
	