<?php
require('config/config.php');
if(isset($_POST['login']))
{
    if(isset($_POST['notifications']))
    {
        $emp_id='E1';
        $query="SELECT message_db FROM notifications where emp_id='$emp_id'";
        $result=mysqli_query($con,$query);
        while($abc=mysqli_fetch_array($result))
        {
            echo $abc['message_db'];
        }

        
    }
}
?>