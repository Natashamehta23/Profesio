<?php
	require('./../config/config.php');
if(isset($_POST['register'])){
	$f_name=$_POST['first_name'];
	$l_name=$_POST['last_name'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$dob=$_POST['dob'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$profession=$_POST['profession'];
	$experience=$_POST['experience'];
	$charges=$_POST['charges'];

	
	
	if(empty($f_name)){
		$f_err="Please enter a First name!";
	}
	else{
		//echo $first."<br />";
	}
	if(empty($l_name)){
		$l_err="Please enter a Last name!";
		echo $name_err;
	}
	else{
		//echo $username."<br />";
	}
	
	if(empty($email)){
		$email_err="Please enter a E Mail!";
	}
	else{
		//echo $email."<br />";
	}
	if(empty($pass)){
		$pass_err="Please enter a password."."<br />";
    }
	if(empty($dob)){
		$dob_err="Please enter Date of Birth!";
	}
	else{
		//echo $dob."<br />";
	}
	if(empty($city)){
		$city_err="Please enter a City."."<br />";
    }
	if(empty($address)){
		$add_err="Please enter a Address."."<br />";
	}
	if(empty($phone)){
		$phone_err="Please enter a Phone_no."."<br />";
    }
    if(empty($profession)){
		$pass_err="Please enter a Profession."."<br />";
	}

	$query_select= "SELECT * from `employee` where `email_db`='$email'";
	$query_select_op = mysqli_query($con, $query_select);
	$count= mysqli_num_rows($query_select_op);
	if($count==0)
	{











//`age_db`,`gender_db`,`image_loc`,`deleted`,`deactivated`




		$user_id='E'.rand(10,1000000);
		$query0 = "INSERT into `employee` (`emp_id_db`, `first_name_db`, `last_name_db`,`experience_db`, `email_db`, `pass_db`, `dob_db`, `address_db`, `city_db`,`telephone_db`,`profession_db`,`charges_db`,`age_db`,`gender_db`,`image_loc`,`deleted`,`deactivated`)";
		$query0 .= " Values  ('$user_id','$f_name', '$l_name','$experience','$email','$pass','$dob', '$address', '$city','$phone','$profession','$charges','0','male','./assets/images/profile_pics/defaults/head_emerald.png','no','no')";		   
  		$query1 = mysqli_query($con, $query0);
  		 if(!$query1)
   		{
			die(mysqli_error($con));
			//echo 'error';
  		}
		 else
		{ 
			  // echo "You are all set. Go, Explore!";
		}
		$username=$first.'_'.$last.'_';
		$query0 = "INSERT into `administration` ( `email_db`, `username_db`, `password_db`,`cust_id_db`,`deleted`,`deactivate_db`)";
		$query0 .= "VALUES ('$email', '$username',  '$pass','$user_id','no','no')";		   	   
  		 $query1 = mysqli_query($con, $query0);
  		 if(!$query1)
   		{
			die(mysqli_error($con));
  		}
		 else
		{ 
			  // echo "You are all set. Go, Explore!";
			   header('Location: ./../login.php');
		}
		//$username=$first.'_'.$last.'_';
		$query0 = "INSERT into `rating` ( `emp_id_db`)";
		$query0 .= "VALUES ('$user_id')";		   	   
  		 $query1 = mysqli_query($con, $query0);
  		 if(!$query1)
   		{
			die(mysqli_error($con));
  		}
		 else
		{ 
			  echo "rating table updates!";
			  // header('Location: ./../login.php');
		}
	}
	else
	{
		echo "This Account already exists!";
	}
}
else
{
	echo "";
}
?>                    