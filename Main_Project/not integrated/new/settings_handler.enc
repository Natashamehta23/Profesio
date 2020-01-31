<?php
require('./../config/config.php');
require('./../config/client_or_employe.php');
//session_start();
//$_SESSION['LoggedIn']=true;
//$_SESSION['email_session']=$userLoggedIn;

if(isset($_POST['update_details_client']))
{
    $first=$_POST['first_name'];
    $last=$_POST['last_name'];
    $email=$_POST['email'];
    $email_check = mysqli_query($con, "SELECT * FROM `client` WHERE `email_db`='$email'");
	$row = mysqli_fetch_array($email_check);
    $matched_user = $row['cust_id_db'];
    //$userLoggedIn="nitin_kumar";
    $userLoggedIn=$user_id;
    if($matched_user == "" || $matched_user == $userLoggedIn)
     {
        $query = mysqli_query($con, "UPDATE `client` SET `first_name_db`='$first', `last_name_db`='$last', `email_db`='$email' WHERE `cust_id_db`='$userLoggedIn'");
        $message = "Details updated!"."<br>";
        echo $message;
	}
	else 
		$message = "That email is already in use!"."<br>";
}
else 
    $message = "";
    if(isset($_POST['update_details_employee']))
{
    $first=$_POST['first_name'];
    $last=$_POST['last_name'];
    $email=$_POST['email'];
    if(isset($_POST['Charge']))
    {
        $charges=$_POST['Charge'];
    }
    global $charges;
    $email_check = mysqli_query($con, "SELECT * FROM `employee` WHERE `email_db`='$email'");
	$row = mysqli_fetch_array($email_check);
    $matched_user = $row['email_db'];
    $userLoggedIn="natasha@gmail.com";

    if($matched_user == "" || $matched_user == $userLoggedIn)
     {
        $query = mysqli_query($con, "UPDATE `employee` SET `first_name_db`='$first', `last_name_db`='$last',`Charges`='$charges' WHERE `email_db`='$userLoggedIn'");
        if(!$query)
        {
         die(mysqli_error($con));
       }
      else
     { 
            echo "  ";
     }
        $message = "Details updated!"."<br>";
        echo $message;
	}
	else 
		$message = "That email is already in use!"."<br>";
}
else 
    $message = "";
if(isset($_POST['update_password_client'])){
    $userLoggedIn="nitin_kumar";
    $pass=$_POST['old_password'];
    $new_pass1=$_POST['new_password_1'];
    $new_pass2=$_POST['new_password_2'];
   // $query="SELECT * from client where cust_id_db='$userLoggedIn'";
    $result=mysqli_query($con,"SELECT * FROM `client` WHERE `cust_id_db`='$userLoggedIn'");
    $row = mysqli_fetch_array($result);
    $db_password=$row['pass_db'];

    if($pass == $db_password) {

		if($new_pass1 == $new_pass2) {


			if(strlen($new_pass1)<= 4) {
                $password_message = "Sorry, Password must be greater than 4 characters."."<br>";
                echo $password_message;
			}	
			else {
				$new_password=($new_pass1);
				$password_query = mysqli_query($con, "UPDATE `client` SET `pass_db`='$new_password' WHERE `cust_id_db`='$userLoggedIn'");
                $password_message = "Password has been updated!";
                echo $password_message;
			}


		}
		else {
            echo $password_message = "Entered Password didnot match!";
            echo $password_message;   
		}

	}
	else {
            $password_message = "The old password is incorrect!";
            echo $password_message;
	}

}
else {
	$password_message = "";

}
if(isset($_POST['update_password_employee'])){
    $userLoggedIn="nitin_kumar";
    $pass=$_POST['old_password'];
    $new_pass1=$_POST['new_password_1'];
    $new_pass2=$_POST['new_password_2'];
   // $query="SELECT * from client where cust_id_db='$userLoggedIn'";
    $result=mysqli_query($con,"SELECT * FROM `client` WHERE `cust_id_db`='$userLoggedIn'");
    $row = mysqli_fetch_array($result);
    $db_password=$row['pass_db'];

    if($pass == $db_password) {

		if($new_pass1 == $new_pass2) {


			if(strlen($new_pass1)<= 4) {
                $password_message = "Sorry, Password must be greater than 4 characters."."<br>";
                echo $password_message;
			}	
			else {
				$new_password=($new_pass1);
				$password_query = mysqli_query($con, "UPDATE `client` SET `pass_db`='$new_password' WHERE `cust_id_db`='$userLoggedIn'");
                $password_message = "Password has been updated!";
                echo $password_message;
			}


		}
		else {
            echo $password_message = "Entered Password didnot match!";
            echo $password_message;   
		}

	}
	else {
            $password_message = "The old password is incorrect!";
            echo $password_message;
	}

}
else {
	$password_message = "";

}
/*
if(isset($_POST['close_account'])){
    $userLoggedIn=$user_id;
    $query2="DELETE  from client where cust_id_db='$userLoggedIn' ";
    $result=mysqli_query($con,$query2);
    if($result){
        echo"Account Deleted Successfully";
    }
    else
    {
        "Please try again";
    }*/
}
?>