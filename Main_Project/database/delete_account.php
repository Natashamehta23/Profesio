<?php
require('./../config/config.php');
require('./../config/client_or_employe.php');
    $userLoggedIn=$user_id;
    //$userLoggedIn="nitin_kumar";
    $query2=" Update `client` set `deleted`='yes' where  `cust_id_db`= '$userLoggedIn' " ;
    $result=mysqli_query($con,$query2);
    if($result){
        echo"Account Deleted Successfully";
    }
    else
    {
        "Please try again";
    }
    //$username="087.nitinkumar@gmail.com";
    $query3="Update `administration` set `deleted`='yes'  where `cust_id_db`='$user_id' ";
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