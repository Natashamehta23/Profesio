<?php
require './../config/config.php';
require('./../config/client_or_employe.php');
if(null!=($_SESSION['from_msg'] and $_SESSION['to_msg']))
{
    $text = $_POST['text'];
    $from_id=$_SESSION['from_msg'];
    //$from_id=$user_id;
    echo $from_id;
    $to_id=$_SESSION['to_msg'];
    //$to_id=$user_id;
    echo $to_id;
    $from_name=$f_name.'_'.$l_name;
    //$from_name='Nitin';
    $to_name=$_SESSION['to_msg_f_name'].'_'.$_SESSION['to_msg_l_name'];
    $sql="INSERT INTO `messages` (`from_id_db`, `to_id_db`, `from_name_db`, `to_name_db`, `message_db`, `time_stanp_db`)";
    $sql.=" VALUES ('$from_id', '$to_id', '$from_name', '$to_name', '$text', CURRENT_TIMESTAMP)";
    $query1 = mysqli_query($con, $sql);
  	if(!$query1)
   	{
		die(mysqli_error($con));
  	}
	else
	{ 
	   echo "You are all set. Go, Explore!";
    }


    
    $user_from='c1';
    $user_to='E1';
    $msg="You have a message from ".$from_id;
    $check_database_query = mysqli_query($con, "SELECT * FROM `notification` WHERE `user_to_db`='$user_to' and `user_from_db`='$user_from' and `is_notification_db`='no'");
    $check_review_query = mysqli_num_rows($check_database_query);
    //echo '_______________________'.$check_review_query.'___________';
    if($check_review_query >= 1 )
    {
        $row = mysqli_fetch_array($check_database_query);
        $user_to_=$row['user_to_db'];
        $user_from_=$row['user_from_db'];
        //$user_from_=$row['is_notification_db'];
        $query2="UPDATE `notification` SET `user_to_db`='$user_to_', `user_from_db`='$user_from_', `message_db`='$msg', `is_notification_db`='no', `date_time_db`='CURRENT_TIMESTAMP' WHERE `user_to_db`='$user_to' or `user_from_db`='$user_from'";
        $query3=mysqli_query($con, $query2);
        if(!$query3)
        {
            die(mysqli_error($con));
        }
        else
        { 
            echo "ho gya";
        }
    }
    else if($check_review_query == 0 )
    {
        //echo "aandar aa gai mai";
        $noti_id='N'.rand(10,10000);
        $msg="You have a message from".$from_id;
        $sql1="INSERT INTO `notification` (`noti_id_db`,`user_to_db`, `user_from_db`, `message_db`, `is_notification_db`, `date_time_db`, `opened_db`,`viewed_db`)";
        $sql1.=" VALUES ('$noti_id','$user_to','$user_from', '$msg','no', CURRENT_TIMESTAMP,'no','no')";
        $query1 = mysqli_query($con, $sql1);
  	    if(!$query1)
        {
	        die(mysqli_error($con));
  	    }
	    else
	    { 
	        echo "You are all set. Go, Explore!";
	    }
    }
}
?>