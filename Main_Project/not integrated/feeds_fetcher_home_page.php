<?php
require './../config/config.php';
    echo '';
    echo '';
    //$from_id=$_SESSION['from_msg'];
    //echo $from_id;
    //echo $from_id;
    //$to_id=$_SESSION['to_msg'];
    //echo $to_id;
    $curr_log_in='e1';
    global $friend_id;
    $query1 = mysqli_query($con, "SELECT * FROM  `circle` WHERE user_1='$curr_log_in' OR user_2='$curr_log_in' ");
    while($res= mysqli_fetch_array($query1))
    {
        if($res['user_1']==$curr_log_in)
        {
            $friend_id=$res['user_2'];
        }
        else if($res['user_2']==$curr_log_in)
        {
            $friend_id=$res['user_1'];
        }

        
            $sql=mysqli_query($con,"SELECT * FROM `services` WHERE cust_id_db='$curr_log_in' AND emp_id_db='$friend_id'");
            $count=mysqli_num_rows($sql);
            if($count>=1)
            {
               // echo "hello_entry will not be shown";
                ;
            }
            else{
                $query = mysqli_query($con, "SELECT * FROM  `posts` WHERE user_id_db='$friend_id' ORDER BY time_db   ASC ");
                if(mysqli_num_rows($query) == 0)
                {
                    echo 'process failed';
                }
                else{
                    while($row = mysqli_fetch_array($query))
                    {
                        echo '<div><br><br><hr>';
                        echo '<form action="./php/request_service_handler.php?from='.$row['user_id_db'].'&to='.$curr_log_in.'" method="POST">';
                        echo '<div class="main_column column">';
                        echo $row['user_id_db'];
                        echo "<br>";
                        echo $row['post_text_db'];
                        echo "<br>";
                        echo $row['time_db'];
                        echo '<input type="submit" name="E3" class="success" value="Request Service" id="accept_button " style="width: 20%; height: 28px; border-radius: 5px; margin: 5px; border: none; color: #fff; background-color: #2ecc71;">';
                        echo "<br>";
                        echo "<br><br><br><br><hr><br></div></div>";
                        echo '<div class="feeds_user_details column">
                        <a href="'.$row['accept_link'].'">  <img src="./assets/images/profile_pics/defaults/head_emerald.png"> </a>
                        
                        <div class="user_details_left_right">
                            <a href="'.$row['accept_link'].'">
                            <?php echo $userLoggedIn; ?>	<br></a>
                            <br>
                            
                            
                        <br>	
                        </div>
                
                    </div>';
                    echo'<!--<input type="submit" name="E3" class="danger" value="Remove Friend">
                    <br>
                    <input type="submit" class="default" value="Request Sent">
                    <br>-->
                    <input type="submit" name="E3" class="success" value="Request Service" id="accept_button " style="width: 20%; height: 28px; border-radius: 5px; margin: 5px; border: none; color: #fff; background-color: #2ecc71;">
                </form><br><br>
        ';
                        
                    }
        
        
                }
            }
        }

    
    
    
    
    
?>