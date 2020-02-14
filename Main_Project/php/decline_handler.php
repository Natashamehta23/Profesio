<?php
require('./../config/config.php');
require('./../config/client_or_employe.php');

$S_var=$_GET['client_id_get'];
$emp_id=$user_id;
if($_POST['decline_request'])
{
    //$client='c5';
    //$S_var=$_POST['client_id'];
    //echo $client;
    //$emp_id='E1';
    //$client='c5';
	//$emp_id=$user_id;//only applicable if loggedin user is employee
    $sql=mysqli_query($con,"DELETE from `services` where emp_id_db='$emp_id' AND cust_id_db='$S_var'");
    //echo $sql;
    if($sql)
    echo "Deleted Successfully";

}