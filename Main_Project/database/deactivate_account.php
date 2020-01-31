<?php
require('./../config/config.php');
require('./../config/client_or_employe.php');
    $userLoggedIn=$user_id;
    $query2=" UPDATE `client` SET `deactivate_db`='yes' WHERE  `cust_id_db`= '$userLoggedIn' " ;
    $result=mysqli_query($con,$query2);
    if($result){
        echo"Account Deactivated Successfully";
    }
    else
    {
        "Please try again";
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