<?php
	session_start();
	if(!isset($_SESSION["sess_user"])){
		header("location:login.php");
	}
	else
	{
		require 'core.inc.php';
		$sender=$_SESSION['sess_user'];
		?>

		<!DOCTYPE html>
		<html lang="en">
		<head>
		  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		   
			<meta name="viewport" content="width=device-width, initial-scale=1">
		   
		   

			<title>College Management System</title>

			<link href="bootstrap.css" rel="stylesheet">

		  </head>

		  <body style="">

			<!-- Static navbar -->
			<div class="navbar navbar-inverse navbar-static-top" role="navigation">
			  <div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="main.php">College Management System</a>
				</div>
				<div class="navbar-collapse collapse">
				  <ul class="nav navbar-nav">
					<li ><a href="main.php">Announcements</a></li>
					<li><a href="attendance.php">Attendance</a></li>
					<li><a href="timetable.php">Timetable</a></li>
					<li class="active"><a href="calendar.php">Calendar</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="#">About</a></li>
					
					<li><a href="logout.php">Log Out</a></li>
				  </ul>
				</div>
			  </div>
			</div>


			<div class="container">

			 
			  <div class="jumbotron">
				<h2 style="margin-left:40%;">Calendar</h2>
			  </div>
			  <iframe src="acad.pdf" width="1100" height="800" style="border: none;"></iframe>

			</div> 


		   
			<script src="jquery.js"></script>
			<script src="bootstrap.js"></script>
		  

		</body></html>
	<?php
	}
?>