<?php
    session_start();

?>

<!DOCTYPE html>
<html>

<!-- Made by Schinda -->

<head>
	<!-- meta makes it look better on phones-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A website made to assist carers with their appointments with their patients.">

	<!--stylesheets-->
	<link rel="stylesheet" type="text/css" href="home_page_stylesheet.css">
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->


	<title> Home </title>

	<style>
	</style>

</head>

<body>
	<header>
		<div class="topnav" id="myTopnav">
			<a href="Logo">*website name*</a>
			<a href="home_page.php" class="active">Home</a>
			<a href="schedule_page.php">Schedule</a>
			<div class="dropdown">
				<button class="dropbtn"><?php
                include("appointmentdetail1.php");
                echo $carer;
                ?></button>
				<div class="dropdown-content">
					<a href="my_profile_page.html">My Profile</a>
					<a href="help_policies_page.html">Help</a>
					<a href="time_off_page.html">Time Off</a>
					<a href="login_page.html">Sign Out</a>
				</div>
			</div>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">

				<i class="bars"></i>
			</a>
		</div>
	</header>

	<div class="asideleft">
		<h1>Welcome</h1>
	</div>


	<main>
		<h2> Your appointments for today: </h2>
	</main>
	<aside>
		<table>
			<thead>
				<tr>
					<th class="time-1"><?php
						include("appointmentdetail1.php");
						echo $start_time;
						echo " - ";
						echo $end_time;
						?>
					</th>
					<th class="time-2"><?php
						include("appointmentdetail2.php");
						echo $start_time;
						echo " - ";
						echo $end_time;
						?></th>
					<th class="time-3">13:00-14:45</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="schedule_page.html"><?php
						include("appointmentdetail1.php");
						echo $Patient;
						?></td>
					<td><a href="schedule_page.html"><?php
						include("appointmentdetail2.php");
						echo $Patient;
						?></td>
					<td><a href="schedule_page.html">Mr James Bong</td>
				</tr>

			</tbody>
		</table>
	</aside>
	<footer>
		<div class="footer-content">
			<p>*website name* <br> </p>
			<a href="home_page.php">Home</a>
			<a href="schedule_page.php">Schedule</a>
			<a href="help_policies_page.html">Help</a>
			<a href="time_off_page.html">Time Off</a>
			<p>&copy; 2024. All rights reserved.</p>
		</div>
	</footer>

</body>

</html>