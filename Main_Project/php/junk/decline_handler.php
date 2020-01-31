<?php
require('./../config/config.php');
if($_POST['decline_request'])
{
    $emp_id='E1';
    $client='c5';
    $sql=mysqli_query($con,"DELETE from `services` where emp_id_db='$emp_id' AND cust_id_db='$client'");
    echo $sql;
    echo "Deleted Successfully";

}