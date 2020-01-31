<?php
$connect=mysqli_connect('localhost','root','','profesio');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>