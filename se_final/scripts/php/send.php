<?php
	require('../../connect.db.php');
	require('../../chat.func.php');
		
		if(isset($_GET['message'])&&!empty($_GET['message'])){
			$message=$_GET['message'];
			$sender=$_GET['sender'];
			if(send_msg($sender,$message)){
				echo 'Message Sent'. ' '.$sender;
			}
			else
				echo 'Message was not send';
		}
		else{
			echo 'No Message was entered';
		}

?>