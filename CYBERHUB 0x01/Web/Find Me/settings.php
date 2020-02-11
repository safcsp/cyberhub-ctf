<?php

session_start();

if ( $_SESSION['true'] != 1 ) {

	header("Location: index.php");

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		a{text-decoration: none;color: #676767;}
		input[type='text']{border: 50px;}
		body
		{
		    font-family: 'Open Sans', sans-serif;
		}

		.fb-profile img.fb-image-lg{
		    z-index: 0;
		    width: 100%;  
		    margin-bottom: 10px;
		}

		.fb-image-profile
		{
		    margin: -90px 10px 0px 50px;
		    z-index: 9;
		    width: 20%; 
		}

		@media (max-width:768px)
		{
		    
		.fb-profile-text>h1{
		    font-weight: 700;
		    font-size:16px;
		}

		.fb-image-profile
		{
		    margin: -45px 10px 0px 25px;
		    z-index: 9;
		    width: 20%; 
		}
		}
	</style>
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--======================================================= ========================================-->
	<link rel="stylesheet" type="text/javascript" href="16897b180581f697a96038336219b3c5/newFolder/f!le.js"> <!-- remember to delete this line -->
</head>
<body>

</body>
	</html>
<!------ Include the above in your HEAD tag ---------->

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="images/bg.jpeg" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail" src="images/user.png" alt="Profile image example"/>

        <div>
        	<ul>
        		<li><a href="settings.php"> Settings</a></li>
        		<li><a href="profile.php">Profile</a></li>
        		<li><a href="logout.php">Logout</a></li>
        	</ul>
        </div>
        <br><br><hr>
        <div>
        	
        	<form>
        		<label>User Name: </label>
        		<input type="text" name="uname" placeholder="Username">
        	</form>

        </div>

    </div>
</div> <!-- /container -->  













