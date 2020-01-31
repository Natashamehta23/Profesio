<?php
	require('./../config/config.php');
if(isset($_POST['register'])){
	$username=$_POST['user_f'];
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$dob=$_POST['dob_f'];
	$phone=$_POST['phone'];
	$pass=$_POST['pass'];

	if(empty($username)){
		$name_err="Please enter a username!";
		echo $name_err;
	}
	else{
		//echo $username."<br />";
	}
	if(empty($first)){
		$f_err="Please enter a First name!";
	}
	else{
		//echo $first."<br />";
	}
	if(empty($last)){
		$l_err="Please enter a Last name!";
	}
	else{
		//echo $last."<br />";
	}
	if(empty($email)){
		$email_err="Please enter a E Mail!";
	}
	else{
		//echo $email."<br />";
	}
	if(empty($dob)){
		$dob_err="Please enter Date of Birth!";
	}
	else{
		//echo $dob."<br />";
	}
	if(empty($pass)){
		$pass_err="Please enter a password."."<br />";
	}

	$query_select= "SELECT * from client where cust_id_db='$username'";
	$query_select_op = mysqli_query($con, $query_select);
	$count= mysqli_num_rows($query_select_op);
	if($count==0)
	{
		$user_id='C'.rand(10,10000);
		$query0 = "INSERT into client (first_name_db, last_name_db, cust_id_db, email_db, pass_db, city_db, telephone_db, dob_db)";
		$query0 .= "VALUES ('$first', '$last', '$user_id', '$email', '$pass', '$city','$phone','$dob')";		   
  		 $query1 = mysqli_query($con, $query0);
  		 if(!$query1)
   		{
			die(mysqli_error($con));
  		}
		 else
		{ 
			   echo "You are all set. Go, Explore!";
		}
		$users=rand(10,1000);
		$username=$first.'_'.$last.'_'.$users;
		$query0 = "INSERT into administration (cust_id_db, email_db, password_db, username_db)";
		$query0 .= "VALUES ('$user_id', '$email', '$pass', '$username')";		   
  		 $query1 = mysqli_query($con, $query0);
  		 if(!$query1)
   		{
			die(mysqli_error($con));
  		}
		 else
		{ 
			   echo "You are all set. Go, Explore!";
			   header('Location: ./../login.php');
		}
	}
	else
	{
		echo "This Username already exists!";
	}
}
else
{
	echo "";
}
?>                    