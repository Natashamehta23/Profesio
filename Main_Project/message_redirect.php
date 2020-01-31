<?php
		require('./config/config.php');
		require('./config/client_or_employe.php');
		global $S_var;
		if(isset($_GET['cust_id']))
		{
			$S_var=$_GET['cust_id'];
			$_SESSION['page_view_user_id']=$S_var;
		}
		else
		{
			$S_var=$_SESSION['page_view_user_id'];
		}
        
		$query="SELECT * FROM  `employee` WHERE `emp_id_db`='$S_var' ";
		$query1="SELECT * FROM  `client` WHERE `cust_id_db`='$S_var' ";
        $records=mysqli_query($con,$query);
        $records1=mysqli_query($con,$query1);
        $num=mysqli_num_rows($records);
        $num1=mysqli_num_rows($records1);
        if($num>=1)
        {
            header('location: ./profile_employee_message.php?cust_id='.$S_var);
        }
        else if($num1>=1)
        {
			header('location: ./profile_client_message.php?cust_id='.$S_var);
		}
		else echo 'Wrong User Id';
?>
