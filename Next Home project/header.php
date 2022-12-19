<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/resido-live-02/resido/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 01:45:05 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>Next Home</title>	
		
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
        
        <?php
        //require functions.php
        require('functions.php');

		if(isset($_POST['submitted']))
			{		
				$fullName = $_POST['fullName'];
				$email = $_POST['email'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$phone = $_POST['phone'];
				$role = $_POST['role'];

				$insert = $db->con->query("INSERT INTO `users`(`fullName`, `email`, `username`, `passwords`, `phone`, `urole`) 
				VALUES ('$fullName','$email','$username','$password','$phone','$role')");

				if(!$insert)
				{
					echo mysqli_error();
				}
				else
				{
					echo '<script>alert("Sign up successfull")</script>';
				}
			}
        ?>


<?php

if(isset($_POST['submitted2']))
	{		
		$Name = $_POST['Name'];
		$Location = $_POST['Location'];
		$Adress = $_POST['Adress'];
		$Image1 = $_POST['Image1'];
		$Image2 = $_POST['Image2'];
		$Image3 = $_POST['Image3'];
		$Image4 = $_POST['Image4'];
		$Image5 = $_POST['Image5'];
		$Image6 = $_POST['Image6'];
		$Description = $_POST['Description'];
		$Price = $_POST['Price'];
		$Area = $_POST['Area'];
		$Property_type = $_POST['Property_type'];
		$Status = $_POST['Status'];
		$Bedrooms = $_POST['Bedrooms'];
		$Garage = $_POST['Garage'];
		$Kitchen_features = $_POST['Kitchen_features'];
		$Elevator = $_POST['Elevator'];
		$Bathrooms = $_POST['Bathrooms'];
		$Cooling = $_POST['Cooling'];
		$Exterior = $_POST['Exterior'];
		$Fireplace = $_POST['Fireplace'];
		$Year = $_POST['Year'];
		$Heating_type = $_POST['Heating_type'];
		$Swimming_pool = $_POST['Swimming_pool'];
		$Free_wifi = $_POST['Free_wifi'];

		$insert2 = $db->con->query("INSERT INTO `properties`(`Name`, `Location`, `Adress`, `Image1`, `Image2`, `Image3`, `Image4`, `Image5`, `Image6`, `Description`, `Price`, `Area`, `Property_type`, `Status`, `Bedrooms`, `Garage`, `Kitchen_features`, `Elevator`, `Bathrooms`, `Cooling`, `Exterior`, `Fireplace`, `Year`, `Heating_type`, `Swimming_pool`, `Free_wifi`) VALUES 
		('$Name','$Location','$Adress','$Image1','$Image2','$Image3','$Image4','$Image5','$Image6',
		'$Description','$Price','$Area','$Property_type','$Status','$Bedrooms','$Garage','$Kitchen_features','$Elevator',
		'$Bathrooms','$Cooling','$Exterior','$Fireplace','$Year','$Heating_type','$Swimming_pool','$Free_wifi')");

		if(!$insert2)
		{
			echo mysqli_error();
		}
		else
		{
			echo '<script>alert("Property upload successfull")</script>';
			header("location:index.php");

		}
	}
?>
    </head>
    <header class="blue-skin">

    </header>
	
    <body class="blue-skin">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light head-shadow">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="assets/img/logo.png" style="width: 70%;" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li class="active"><a href="index.php">Home<span class="submenu-indicator"></span></a>
								</li>
								
								<li><a href="multi-property.php">Properties<span class="submenu-indicator"></span></a>
								</li>
								
								<li><a href="profile.php">Account<span class="submenu-indicator"></span></a>
								</li>
								
								<li><a href="#" data-bs-toggle="modal" data-bs-target="#signup">Sign Up</a></li>
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
								<li>
									<a href="submitProperty.php" class="text-success"><img src="assets/img/submit.svg" width="20" alt="" class="mr-2" />Add Property</a>
								</li>
								<li class="add-listing">
									<a href="#" data-bs-toggle="modal" data-bs-target="#login"><img src="assets/img/user-light.svg" width="12" alt="" class="mr-2" />Sign In</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
            <div class="clearfix"></div>
			
			<!-- End Navigation -->