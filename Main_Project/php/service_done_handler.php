<?php
require('./../config/config.php');
require('./../config/client_or_employe.php');
$from_id_db="c1";
$to_id_db=$_POST['cust_id'];
$query2="DELETE FROM `accept` WHERE (`from_db`='$from_id_db' AND `to_db`='$to_id_db') OR (`from_db`='$to_id_db' AND `to_db`='$from_id_db')";
//DELETE FROM `accept` WHERE (`from_db`='c1' AND `to_db`='c1') OR (`from_db`='c1' AND `to_db`='c1')
echo $query2;
$result=mysqli_query($con,$query2);
if($result)
{
    echo"Service Completed";
}
else
{
    echo "Please try again";
}
?>