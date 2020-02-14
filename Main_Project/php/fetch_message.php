<?php
require './../config/config.php';

    $from_id=$_SESSION['from_msg'];
    //echo $from_id;
    //echo $from_id;
    $to_id=$_SESSION['to_msg'];
    //echo $to_id;
    $query = mysqli_query($con, "SELECT * FROM  `messages` WHERE (from_id_db='$from_id' AND to_id_db='$to_id') OR (from_id_db='$to_id' AND to_id_db='$from_id') ORDER BY time_stanp_db
    ASC ");
    
    
		if(mysqli_num_rows($query) == 0)
			echo 'Send the First Message';
        else{
            while($row = mysqli_fetch_array($query))
            {
               /* echo $row['from_id_db'];
                echo "<br>";
                echo $row['to_id_db'];
                echo "<br>";
                echo $row['from_name_db'];
                echo "<br>";
                echo $row['to_name_db'];
                echo "<br>";
                echo $row['message_db'];
                echo "<br>";
                echo $row['time_stanp_db'];
                echo "<br>";
                echo "<hr>";*/
                if($from_id==$row['from_id_db'])
                    echo '<div class="message" id="blue">'.$row['message_db'].'</div><br><br>';
                else
                    echo '<div class="message" id="green">'.$row['message_db'].'</div><br><br>';
                echo "<hr>";

            }


        }
?>