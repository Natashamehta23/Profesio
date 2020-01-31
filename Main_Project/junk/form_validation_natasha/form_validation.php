<html>
<body>
<?php
	$username=$_POST['user_id'];
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$pass=$_POST['pass'];
	if(isset($_POST['submit'])){
		if(empty($username)){
			$name_err="Please enter Username!";
			echo $name_err;
		}
		else{
			echo $username"<br />";
		}
		if(empty($first)){
			$f_err="Please enter First name!";
		}
		else{
			echo $first "<br />";
		}
		if(empty($last)){
			$l_err="Please enter Last name!";
		}
		else{
			echo $last"<br />";
		}
		if(empty($email)){

			$email_err="Please enter a E Mail!";
		}
		elseif(!fiter_var($email,FILTER_VALIDATE_EMAIL)){
			echo $error .="Please enter a valid EMAil!";
		}
			else{
			echo $email"<br />";
			}
		if(empty($dob)){
			$dob_err="Please enter Date of Birth!";
		}
		else{
			echo $dob"<br />";
		}
		/*if(empty($gender)){
			$gen_err="Please select a gender!";
		}
		else{
			echo $gender"<br />";
		}*/
		if(empty($pass)){
			$pass_err="Please enter a password";
		}
		elseif(strlen($pass)<=5){
			echo "Password must be greater than 5 characters.";
		}
			else{
				echo "";
			}
	}
	else{
		echo "";
	}
	function test_input($check){
		$check=trim($check);
		$check=stripslashes($check);
		$check=htmlspecialchars($check);
		return $check;
	}
?>
</body>
</html>

                                        