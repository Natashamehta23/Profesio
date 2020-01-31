
    <?php
    require("./../config/config.php"); 
    require('./../config/client_or_employe.php');
    $S_var=$user_id;
    $query="SELECT * FROM  `notification` WHERE `user_to_db`='$S_var'  and `is_notification_db`='yes'";
    $records=mysqli_query($con,$query);
    $num=mysqli_num_rows($records);
    if ($num>=1)
    {   while($row=mysqli_fetch_array($records))
       { //echo "<tr>";
        //echo "<td>". $row['noti_id_db']."</td>";
        //echo "<td>".$row['user_to_db']."</td>";
        //echo "<td>".$row['user_from_db']."</td>";
        //echo "<td>".$row['message_db']."</td>";
        //echo "<td>".$row['date_time_db']."</td>";
        //echo "</tr>";
        /*if($row['user_to_db']==$S_var)
        {
            $from_id=$res['user_from_db'];
            //$from_name
           // echo $from_id.'<br>';
        }
        else //($res['from_id_db']==$S_var)
        {
            $from_id=$res['user_to_db'];
           // echo $from_id.'<br>';
        }*/
        echo  '

        <div>
            
            <div class="main_column column" style="width: 100%;">
                    <a href="./profile_friend.php?cust_id='.$row['user_from_db'].'">  
                        View profile
                    </a>
                    <br>
                    <div class="user_details_left_right">	
                    </div>
                    '.$row['message_db'].'
                    <br> From:'.$row['user_from_db'].'
                    ____________________________________________________________________________
                <br>
                '.$row['date_time_db'].'
                ';
                echo '
            </div>
        </div>
        
    ';   
        }
    
    }
    else
    {
        echo "No new notification";
    }       
    ?>