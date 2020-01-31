<?php
require('./../config/config.php');
if(isset($_POST['delete_details']))
{
    $from_id_db="e1";
    $to_id_db=$_POST['cust_id'];
    $query2=" DELETE FROM `accept` WHERE `from_db`='$from_id_db' AND `to_db`='$to_id_db' " ;
    $result=mysqli_query($con,$query2);
    if($result)
    {
        echo"Service Completed";
    }
    else
    {
        "Please try again";
    }
}
?>