<?php
require './../config/config.php';
require('./../config/client_or_employe.php');
    //$from_id=$_SESSION['from_msg'];
    //echo $from_id;
    //echo $from_id;
    //$to_id=$_SESSION['to_msg'];
    //echo $to_id;
    //$curr_view_page='c1';
    if(isset($_SESSION['page_view_user_id']))
	{
		//$S_var=$_GET['cust_id'];
        $curr_view_page=$_SESSION['page_view_user_id'];
        //echo 'everything seems fine';
        //$curr_view_page='c1';
	}
	else
	{
            //$S_var=$_SESSION['page_view_user_id'];
            echo 'internat error has occured using page viewer as c1';
            $curr_view_page='c1';
    }
    $emp_id=$user_id;
    //$curr_view_page=$_SESSION['page_view_user_id'];
    $query = mysqli_query($con, "SELECT * FROM  `posts` WHERE user_id_db='$curr_view_page' ORDER BY time_db   ASC ");
    
    
		if(mysqli_num_rows($query) == 0)
            //echo 'process failed';
            ;
        else{
            while($row = mysqli_fetch_array($query))
            {
                echo '
                <div class="main_column column" style="width: 100%;">
                    <!--<br>'.$row['user_id_db'].'-->
                    <br>'.$row['post_text_db'].'
                    <!--<br>'.$row['accept_link'].'-->
                    <hr>
                    '.$row['time_db'].'
                </div>';
                
            }


        }
?>