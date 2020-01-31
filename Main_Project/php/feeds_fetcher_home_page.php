<?php
require './../config/config.php';
require('./../config/client_or_employe.php');
    //$from_id=$_SESSION['from_msg'];
    //echo $from_id;
    //echo $from_id;
    //$to_id=$_SESSION['to_msg'];
    //echo $to_id;
    $curr_log_in=$user_id;
    global $friend_id;
    $query1 = mysqli_query($con, "SELECT * FROM  `circle` WHERE user_1='$curr_log_in' OR user_2='$curr_log_in' ");
    while($res=mysqli_fetch_array($query1))
    {
        if($res['user_1']==$curr_log_in)
        {
            $friend_id=$res['user_2'];
        }
        else if($res['user_2']==$curr_log_in)
        {
            $friend_id=$res['user_1'];
        }


        $sql=mysqli_query($con,"SELECT * FROM `services` WHERE (cust_id_db='$curr_log_in' AND emp_id_db='$friend_id') or (emp_id_db='$curr_log_in' AND cust_id_db='$friend_id')");
        $count=mysqli_num_rows($sql);
        if($count>=1)
        {
            // echo "hello_entry will not be shown";
            ;
        }
        else
        {
            
            $query = mysqli_query($con, "SELECT * FROM  `posts` WHERE `user_id_db`='$friend_id' ORDER BY time_db   ASC ");
                if(mysqli_num_rows($query) == 0)
                    ;
                else{
                    while($row = mysqli_fetch_array($query))
                    {
                        echo '

                            <div>
                                <br>
                                <br>
                                <hr>
                                <form action="./php/request_service_handler.php?from_client='.$curr_log_in.'&to_employee='.$friend_id.'" method="POST">
                                <div class="main_column column" style="width: 100%;">
                                    <div class="feeds_user_details column" style="width: 22%; height: 29%; padding:10px; margin:15px;">
                        
                                        <a href="./profile_friend.php?cust_id='.$row['user_id_db'].'">  

                                        
                                            <!--<img src="./.'.$row['image_loc'].'"> -->
                                            <img src="'.$row['image_loc'].'"> 
                                        </a>
                                        <div class="user_details_left_right">
                                            <a href="'.$row['accept_link'].'">
                                            <?php echo $userLoggedIn; ?>	
                                            <br>
                                            </a>
                                            <br>
                                            <br>	
                                        </div>
                                    </div><!--'.$row['user_id_db'].'-->
                                    <br>';


        $t_var=$row['user_id_db'];
        global $person_name;
        $query__="SELECT * FROM  `employee` WHERE `emp_id_db`='$t_var' ";
		$query__1="SELECT * FROM  `client` WHERE `cust_id_db`='$t_var' ";
        $records__=mysqli_query($con,$query__);
        $records__1=mysqli_query($con,$query__1);
        $num_=mysqli_num_rows($records__);
        $num_1=mysqli_num_rows($records__1);
        if($num_>=1)
        {
            $ename=mysqli_fetch_array($records__);
            $person_name=$ename['first_name_db'].' '.$ename['last_name_db'];
            //header('location: ./profile_employee_message.php?cust_id='.$S_var);
        }
        else if($num_1>=1)
        {
            $cname=mysqli_fetch_array($records__1);
            $person_name=$cname['first_name_db'].' '.$cname['last_name_db'];
			//header('location: ./profile_client_message.php?cust_id='.$S_var);
		}














                                    echo $person_name.'<br>'.
                                    $row['post_text_db'].'<hr>'.$row['time_db'].'<br>
                                    <br>
                                    <!--
                                    <input type="submit" name="E3" class="danger" value="Remove Friend">
                                    <br>
                                    <input type="submit" class="default" value="Request Sent">
                                    <br>
                                    -->';
    if($_SESSION['is_employee_logged_in']=="yes")
	{
       ;
    }	
    else {
        echo '
                                    <input type="submit" name="E3" class="success" value="Request Service" id="accept_button " style="width: 20%; height: 28px; border-radius: 5px; margin: 5px; border: none; color: #fff; background-color: #2ecc71;">';
    }
                                    echo '
                                    </div>
                            </div>
                            </form>
                            <br>
                            <br>
                            
                        ';   
                    }
                }
            }
    }
?>