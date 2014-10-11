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
			   <link type="text/css" rel="stylesheet" href="main.css"/>
			   

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
					  <a class="navbar-brand" href="main.html">College Management System</a>
					</div>
					<div class="navbar-collapse collapse">
					  <ul class="nav navbar-nav">
						<li class="active"><a href="main.php">Announcements</a></li>
						<li><a href="attendance.php">Attendance</a></li>
						<li><a href="timetable.php">Timetable</a></li>
						<li><a href="calendar.php">Calendar</a></li>
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
					<h2 style="margin-left:40%;">Announcements</h2>
				  </div>
				  <div id="feedback"> </div>
				   <form class="box box-success" method="POST" id="form_input">
						
						<div id="messages" >
					
						</div><!-- /.chat -->
						<div class="box-footer">
							<div class="input-group">
								<input class="form-control" placeholder="Type message..." name="message" id="message"/>
								<div id="sender"><?=$sender;?></div>
								<div class="input-group-btn">
									<input class="btn btn-success" name="send" type="submit" id="send" style="margin-left:15%;" value="send"/>
								</div>
							</div>
						</div>
						<label id="sender1"></label>
						<script type="text/javascript" src="scripts/js/jquery.js"></script>
						<script type="text/javascript" src="scripts/js/auto_chat.js"></script>
						<script type="text/javascript" src="scripts/js/send.js"></script>
					</form><!-- /.box (chat box) -->
				   

				</div> 

				<script src="jquery.js"></script>
				<script src="bootstrap.js"></script>
			
			</body></html>
	<?php
	}
?>