    <?php
    require("./../config/config.php");
    require('./../config/client_or_employe.php');
    $S_var=$user_id;
    //echo $S_var;
    global $from_id;
    //SELECT * FROM `circle` WHERE `user_1`='c1' or`user_2`='c1'
    $query1 = mysqli_query($con, "SELECT * FROM `circle` WHERE `user_1`='$S_var' OR `user_2`='$S_var'");
    $num=mysqli_num_rows($query1);
    while($res=mysqli_fetch_array($query1))
    {
        if($res['user_1']==$S_var)
        {
            $from_id=$res['user_2'];
           // echo $from_id.'<br>';
        }
        else //($res['from_id_db']==$S_var)
        {
            $from_id=$res['user_1'];
           // echo $from_id.'<br>';
        }
        $query="SELECT * FROM `messages` WHERE (`from_id_db`='$S_var' AND `to_id_db`='$from_id') OR (`from_id_db`='$from_id' AND `to_id_db`='$S_var') ORDER BY time_stanp_db DESC limit 1";
        $records=mysqli_query($con,$query);
        $num=mysqli_num_rows($records);
        if ($num>=1)
        {  $row=mysqli_fetch_array($records);
        //echo "<tr>";
       // echo "<td>" .$row['from_id_db']."</td>";
        //echo "<td>" .$row['to_id_db']."</td>";
        //echo "<td>" .$row['from_name_db']."</td>";
        //echo "<td>" .$row['to_name_db']."</td>";
        //echo "<td>" .$row['message_db']."</td>";
        //echo "<td>" .$row['time_stanp_db']."</td>";
        //echo "</tr>";
            echo '

        <div>
            
            <hr>
            
            <div class="main_column column" style="width: 100%;">
                <div class="user_details_left_right">
                    <a href="./profile_friend.php?cust_id='.$from_id.'">  
                        View Profile
                    </a>	<br>
                    To-'.$row['to_name_db'].'<br>
                    From- '.$row['from_name_db'].'<br>
                    Message-'.$row['message_db'].'<br>
                    ____________________________________________________________________________
                    <hr>'.$row['time_stanp_db'].'
                    <br>
                </div>
            </div>
            <a href="./message_redirect.php?cust_id='.$from_id.'"> 
                <input type="button" name="E3" class="success" value="Message" id="accept_button " style="width: 20%; height: 28px; border-radius: 5px; margin: 5px; border: none; color: #fff; background-color: #2ecc71;">
            </a>
            <br>
        </div>
        
        <hr>
        <br>
        
        '; 
        }
        else
        {
            //echo "No new message";
            //echo $res['user_1'];
            ;
        } 
    }
    ?>
   