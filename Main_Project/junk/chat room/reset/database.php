<?php
$connect=mysqli_connect('localhost','user','123','Chat');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>