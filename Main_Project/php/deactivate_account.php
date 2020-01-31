<?php
require('./../config/config.php');
require('./../config/client_or_employe.php');
    $userLoggedIn=$user_id;
    if($_SESSION['is_employee_logged_in']=="yes")
	{
        $query2=" UPDATE `employee` SET `deactivate_db`='yes' WHERE  `emp_id_db`= '$userLoggedIn' " ;
        $result=mysqli_query($con,$query2);
        if($result){
            echo"Account Deactivated Successfully";
        }
        else
        {
            echo "Please try again";
        }
    }
    else
    {
        
        $query2=" UPDATE `client` SET `deactivate_db`='yes' WHERE  `cust_id_db`= '$userLoggedIn' " ;
        $result=mysqli_query($con,$query2);
        if($result){
            echo"Account Deactivated Successfully";
        }
        else
        {
            echo "Please try again";
        }
    }
    //$username="087.nitinkumar@gmail.com";
    $query3="UPDATE `administration` SET `deactivate_db`='yes'  WHERE `cust_id_db`='$userLoggedIn' ";
    $result=mysqli_query($con,$query3);
    if($result){
        echo "<br>";
        echo"Done ";
    }
    else
    {
        "Please try again";
    }
?>