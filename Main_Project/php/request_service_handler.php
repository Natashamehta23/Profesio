<?php
require('./../config/config.php');
GLOBAL $cust_n,$cust_address, $cust_phone,$emp_n, $emp_prof,$emp_exp,$emp_address,$emp_phone, $emp_age,$emp_gender,$emp_charges,$client_id,$emp_id;
    $client_id=$_GET['from_client'];
    $emp_id=$_GET['to_employee'];
    echo $client_id;
    echo $emp_id;
    $query="SELECT * from `employee` where `emp_id_db`='$emp_id'";
    $empq=mysqli_query($con,$query);
    if(!$empq)
    {
        die(mysqli_error($con));
    }
    else
    {
        while($emp=mysqli_fetch_array($empq))
        {
          $emp_n=$emp['first_name_db']." ".$emp['last_name_db'];
            $emp_prof=$emp['profession_db'];
           $emp_exp=$emp['experience_db'];
          $emp_address=$emp['address_db'].$emp['city_db'];
           $emp_phone=$emp['telephone_db'];
            $emp_age=$emp['age_db'];
            $emp_gender=$emp['gender_db'];   
            $emp_charges=$emp['charges_db'];     
        }
        $query1="SELECT * from `client` where `cust_id_db`='$client_id'";
        $custq=mysqli_query($con,$query1);
        while($cust=mysqli_fetch_array($custq))
        {
             $cust_n=$cust['first_name_db'];
             $cust_address=$cust['address_db'].$cust['city_db'];
             $cust_phone=$cust['telephone_db'];
        }
    $q="INSERT INTO `services` (`cust_id_db`,`emp_id_db`,`cust_name`,`emp_name`,`client_address`,`service_needed`,`charges`,`date_of_service`)";
    $q.="VALUES('$client_id','$emp_id','$cust_n','$emp_n','$cust_address','$emp_prof','$emp_charges', CURRENT_TIMESTAMP )";
    $result0=mysqli_query($con,$q);
    if($result0)
    {

        //echo"Your request has been sent!";
        $noti='N'.rand(10,10000000);
        $msg="You have got a request from:". $cust_n;
        $query2="INSERT INTO `notification` (`noti_id_db`,`user_to_db`,`user_from_db`,`message_db`,`is_notification_db`,`date_time_db`,`opened_db`,`viewed_db`)";
        $query2.="VALUES('$noti','$emp_id','$client_id','$msg','yes',CURRENT_TIMESTAMP,'no','no')";
        //$query2="UPDATE `notifications` SET `noti_id_db`='$noti',`user_to_db`='$emp_id',`user_from_db`='$client_id',`message_db`='$msg',`date_time_db`='',`opened_db`='',`viewed_db`='' WHERE `user_to_db`='$emp_id' AND `user_from_db`='$client_id'";
        $ans=mysqli_query($con,$query2);
        if($ans==true)
        {
            //echo "executed";
            ;
        }
        else //echo "not executed";
            ;

        
        /*
        $noti_id='N'.rand(10,10000000);
        $text='Your service request has been accepted by:'.$t_fname.' '.$t_lname.'';
        $sql1="INSERT INTO `notification` (`noti_id_db`,`user_to_db`, `user_from_db`, `message_db`, `is_notification_db`, `date_time_db`, `opened_db`,`viewed_db`)";
        $sql1.=" VALUES ('$noti_id','$client','$emp_id', '$text','yes', CURRENT_TIMESTAMP,'no','no')";
        $query1 = mysqli_query($con, $sql1);
  	    if(!$query1)
        {
	        die(mysqli_error($con));
  	    }
	    else
	    { 
            //echo "send notification to customer that service request has been accepted!<br>";
            ;
        }




        */


        //inserting both the entries to circle table if not exist
        $check_database_query = mysqli_query($con, "SELECT * FROM `circle` WHERE (`user_1`='$emp_id' and `user_2`='$client_id') or (`user_1`='$client_id' and `user_2`='$emp_id')");
        $check_review_query = mysqli_num_rows($check_database_query);
        //echo '_______________________'.$check_review_query.'___________';
        if($check_review_query >= 1 )
        {
            echo 'entry exist';
        }
        else
        {
            $query10="INSERT INTO `circle`(`user_1`, `user_2`) VALUES ('$client_id','$emp_id')";
            $ans=mysqli_query($con,$query10);
            if($ans==true)
            {
                echo "executed";
                ;
            }
            else //echo "not executed";
            ;
        }
        
        /*
            //$noti='N'.rand(10,10000000);
        //$msg="You have got a request from:". $emp_n;
        $query10="INSERT INTO `circle`(`user_1`, `user_2`) VALUES ('c1','c2')";
        $query2="INSERT INTO `notification` (`noti_id_db`,`user_to_db`,`user_from_db`,`message_db`,`is_notification_db`,`date_time_db`,`opened_db`,`viewed_db`)";
        $query2.="VALUES('$noti','$emp_id','$client_id','$msg','yes',CURRENT_TIMESTAMP,'no','no')";
        //$query2="UPDATE `notifications` SET `noti_id_db`='$noti',`user_to_db`='$emp_id',`user_from_db`='$client_id',`message_db`='$msg',`date_time_db`='',`opened_db`='',`viewed_db`='' WHERE `user_to_db`='$emp_id' AND `user_from_db`='$client_id'";
        $ans=mysqli_query($con,$query2);
        if($ans==true)
        {
            //echo "executed";
            ;
        }
        else //echo "not executed";
            ;


        */
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>