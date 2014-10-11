<?php
	require('../../connect.db.php');
	require('../../chat.func.php');
	
	$messages=get_msg();
	foreach($messages as $msg)
	{
		echo '<strong>'.$msg['sender'].' '.'Sent</strong><br/>';
		echo $msg['message'].'<br/><hr ><br/>';
	}
?>