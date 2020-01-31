<?php
	require('inhouse/config.php');
	if(isset($_POST['register'])){
		$username=$_POST['user_f'];
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$dob=$_POST['dob_f'];
	$phone=$_POST['phone'];
	$pass=$_POST['pass'];
	
	$query0 = "INSERT INTO customers (first, last, user_id, email, pass, city, phone, dob)";
	$query0 .= "VALUES ('$first', '$last', '$username', '$email', '$pass', '$city',$phone,'$dob')";
				   
   $query = mysqli_query($con, $query0);
   if(!$query)
   {
		die(mysqli_error($con));
   }
   else{ echo "Success"; }


   //Clear session variables 
  // $_SESSION['reg_fname'] = "";
  // $_SESSION['reg_lname'] = "";
  // $_SESSION['reg_email'] = "";
  // $_SESSION['reg_email2'] = "";
		/*if(empty($username)){
			$name_err="Please enter a username!";
			echo $name_err;
		}
		else{
			echo $username;
		}
		if(empty($first)){
			$f_err="Please enter a First name!";
		}
		else{
			echo $first;
		}
		if(empty($last)){
			$l_err="Please enter a Last name!";
		}
		else{
			echo $last;
		}
		if(empty($email)){
			$email_err="Please enter a E Mail!";
		}
		else{
			echo $email;
		}
		if(empty($dob)){
			$dob_err="Please enter Date of Birth!";
		}
		else{
			echo $dob;
		}
		if(empty($pass)){
			$pass_err="Please enter a password";
		}
	}
	else{
		echo "Please enter username.";
	}*/
	//$_SESSION['']
	}
?>


                                        