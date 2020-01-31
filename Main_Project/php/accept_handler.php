<?php
require('./../config/config.php');
require('./../config/client_or_employe.php');
//$_GET['client_id_get']
$S_var=$_GET['client_id_get'];
$emp_id=$user_id;
global $val_n,$val_e,$val_add,$val_prof,$val_charges,$val_dos;
if($_POST['accept_request'])
{
    //$emp_id='E1';
    //$client='c5';
    //INSERT INTO `services` (`cust_id_db`, `emp_id_db`, `cust_name`, `emp_name`, `client_address`, `service_needed`, `charges`, `date_of_service`) VALUES ('c5', 'e1', '', '', '', '', '', '');
    $run=mysqli_query($con,"SELECT * FROM `services` where `emp_id_db`='$emp_id' AND `cust_id_db`='$S_var'");
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
            $q.="VALUES('$S_var','$emp_id','$val_n','$val_e','$val_add','$val_prof','$val_charges', CURRENT_TIMESTAMP )";
            $result0=mysqli_query($con,$q);
        }
        $query=mysqli_query($con,"DELETE FROM `services` WHERE `emp_id_db`='$emp_id' AND `cust_id_db`='$S_var'");
       
        /*
        $text='Your service request has been accepted by:'.$from_name.'';
        $sql="INSERT INTO `messages` (`from_id_db`, `to_id_db`, `from_name_db`, `to_name_db`, `message_db`, `time_stanp_db`)";
        $sql.=" VALUES ('$emp_id', '$client', '$from_name', '$to_name', '$text', CURRENT_TIMESTAMP)";
        $query1 = mysqli_query($con, $sql);
  	    if(!$query1)
   	    {
		    die(mysqli_error($con));
  	    }
	    else
	    { 
	        echo "message sent to customer!";
        }*/
        
        

        
    //sending msg to employee details about customer where he has to go for servicing
        
        $query1=mysqli_query($con,"SELECT * from `client` where `cust_id_db`='$S_var'");
        global $t_fname,$t_lname,$t_email,$t_dob,$t_city,$t_tel,$t_img_loc,$t_address,$t_del,$t_deact;
        while($results=mysqli_fetch_array($query1))
        {   
            //echo $_SESSION['c_user_logged_in']=$user_id;
            /*echo $t_fname=$results['first_name_db'];
            echo $t_lname=$results['last_name_db'];
            echo $t_email=$results['email_db'];
            echo $t_dob=$results['dob_db'];
            echo $t_city=$results['city_db'];
            echo $t_tel=$results['telephone_db'];
            echo $t_img_loc=$results['image_loc'];
            echo $t_address=$results['address_db'];
            echo $t_del=$results['deleted'];
            echo $t_deact=$results['deactivate_db'];*/
            $t_fname=$results['first_name_db'];
            $t_lname=$results['last_name_db'];
            $t_email=$results['email_db'];
            $t_dob=$results['dob_db'];
            $t_city=$results['city_db'];
            $t_tel=$results['telephone_db'];
            $t_img_loc=$results['image_loc'];
            $t_address=$results['address_db'];
            $t_del=$results['deleted'];
            $t_deact=$results['deactivate_db'];
            //$t_proff=$result['profession_db'];
            //echo $_SESSION['is_employee_logged_in']="no";
        }


        //sending notification to customer that service request has been accepted
        //echo "aandar aa gai mai";
        $noti_id='N'.rand(10,10000000);
        $text='Your service request has been accepted by:'.$val_e.'';
        $sql1="INSERT INTO `notification` (`noti_id_db`,`user_to_db`, `user_from_db`, `message_db`, `is_notification_db`, `date_time_db`, `opened_db`,`viewed_db`)";
        $sql1.=" VALUES ('$noti_id','$S_var','$emp_id', '$text','yes', CURRENT_TIMESTAMP,'no','no')";
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
        
        $noti_id='N'.rand(10,10000000);
        $text='Your client details are Name:'.$t_fname.' '.$t_lname.'<br> Location:'.$t_address.' '.$t_city.'<br>Customer Identification Code:'.$S_var;
        echo'<br>'.$text;
        $sql1="INSERT INTO `notification` (`noti_id_db`,`user_to_db`, `user_from_db`, `message_db`, `is_notification_db`, `date_time_db`, `opened_db`,`viewed_db`)";
        $sql1.=" VALUES ('$noti_id','$emp_id','$S_var', '$text','yes', CURRENT_TIMESTAMP,'no','no')";
        $query1 = mysqli_query($con, $sql1);
  	    if(!$query1)
   	    {
		    die(mysqli_error($con));
  	    }
	    else
	    { 
            //echo "<br>send notification to employee details about customer!";
            ;
        }
    }
    else
    {
        echo"NO such record found!!";
    }
}

?>