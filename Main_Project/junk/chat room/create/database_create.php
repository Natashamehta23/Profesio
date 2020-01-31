<?php
$connect=mysql_connect('localhost','user','123');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>