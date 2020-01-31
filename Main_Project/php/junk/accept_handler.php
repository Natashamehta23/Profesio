<?php
require('./../config/config.php');
require('./../config/client_or_employe.php');
	
if($_POST['accept_request'])
{
    $client=$_POST['client_id'];
    $emp_id='c1';
    $client='c1';
	//$emp_id=$user_id;//only applicable if loggedin user is employee
    $run=mysqli_query($con,"SELECT * FROM `services` where `emp_id_db`='$emp_id' AND `cust_id_db`='$client'");
    $count=mysqli_num_rows($run);
    /*if($run)
    {
        die(mysqli_error($con));
        echo "hello";
    }*/
    echo $count;
    if($count>0)
    {
        while($val=mysqli_fetch_array($run))
        {
            $val_n=$val['cust_name'];
            $val_e=$val['emp_name'];
            $val_add=$val['client_address'];
            $val_prof=$val['service_needed']; 
            $val_charges=$val['charges'];  
            $val_dos=$val['date_of_service'];   
            $q="INSERT INTO `accept` (`from_db`,`to_db`,`cust_n`,`emp_n`,`client_address`,`service_needed`,`charges`,`date_of_service`)";
            $q.="VALUES('$client','$emp_id','$val_n','$val_e','$val_add','$val_prof','$val_charges', CURRENT_TIMESTAMP )";
            $result0=mysqli_query($con,$q);
        }
        $query=mysqli_query($con,"DELETE FROM `services` WHERE `emp_id_db`='$emp_id' AND `cust_id_db`='$client'");
    }
    else
    {
        echo"NO such record found!!";
    }
}

?>