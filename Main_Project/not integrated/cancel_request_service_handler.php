<?php
require('./../config/config.php');
    $emp_id=$_GET['from'];
    $client_id=$_GET['to'];
    $query="DELETE from `services` where `cust_id_db`='$client_id' AND `emp_id_db`='$emp_id'";
    $success=mysqli_query($con,$query);
    if($success)
    {
        echo "Your request has been successfully withdrawn";
    }

?>