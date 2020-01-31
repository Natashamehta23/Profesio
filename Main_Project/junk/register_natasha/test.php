<?php
	require('config.php');
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
		echo $username."<br />";
	}
	if(empty($first)){
		$f_err="Please enter a First name!";
	}
	else{
		echo $first."<br />";
	}
	if(empty($last)){
		$l_err="Please enter a Last name!";
	}
	else{
		echo $last."<br />";
	}
	if(empty($email)){
		$email_err="Please enter a E Mail!";
	}
	else{
		echo $email."<br />";
	}
	if(empty($dob)){
		$dob_err="Please enter Date of Birth!";
	}
	else{
		echo $dob."<br />";
	}
	if(empty($pass)){
		$pass_err="Please enter a password."."<br />";
	}

	$query= "SELECT * from client where cust_id_db='$username'";
	$count= mysqli_num_rows($query);
	if($count==0){
		$query0 = "INSERT into client (first_name_db, last_name_db, cust_id_db, email_db, pass_db, city_db, telephone_db, dob_db)";
		$query0 .= "VALUES ('$first', '$last', '$username', '$email', '$pass', '$city','$phone','$dob')";		   
  		 $query1 = mysqli_query($con, $query0);
  		 if(!$query1)
   		{
			die(mysqli_error($con));
  		}
		 else{ 
			   echo "You are all set. Go, Explore!";
		}
}
	else{
		echo "This Username already exists!";
	}
else{
	echo "";
}

   //Clear session variables 
  // $_SESSION['reg_fname'] = "";
  // $_SESSION['reg_lname'] = "";
  // $_SESSION['reg_email'] = "";
  // $_SESSION['reg_email2'] = "";
		
	//$_SESSION['']
?>


                                        