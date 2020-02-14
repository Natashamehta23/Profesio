<?php
require './../config/config.php';
require('./../config/client_or_employe.php');
    //$user_id='c1';
    $curr_log_in=$user_id;
    $text = $_POST['text'];
    //$text='hello';
    //echo $user_id;
    if(null!=($text))
    {    
        $sql="INSERT INTO `posts` (`user_id_db`, `post_text_db` , `time_db`)";
        $sql.=" VALUES ('$curr_log_in', '$text', CURRENT_TIMESTAMP)";
        $query1 = mysqli_query($con, $sql);
  		if(!$query1)
   		{
			die(mysqli_error($con));
  		}
		 else
		{ 
			   echo "You are all set. Go, Explore!";
		}
}
?>