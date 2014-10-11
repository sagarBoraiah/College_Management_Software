<?php
$host='localhost';
$user='root';
$pass='';
$error='Could not connect to Database';
$db='chat';

mysql_connect($host,$user,$pass) or die($error);
mysql_select_db($db) or die($error);


?>

