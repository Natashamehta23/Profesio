<?php
require('config.php');
//session_start();
$_SESSION['LoggedIn']=true;
$_SESSION['cust_id_db']=$userLoggedIn;
if(isset($_POST['update_details'])){
    $first=$_POST['first_name'];
    $last=$_POST['last_name'];
    $email=$_POST['email'];
    $email_check = mysqli_query($con, "SELECT * FROM client WHERE email_db='$email'");
	$row = mysqli_fetch_array($email_check);
    $matched_user = $row['cust_id_db'];
    //$userLoggedIn="natasha_mehta";

	if($matched_user == "" || $matched_user == $userLoggedIn) {
        $query = mysqli_query($con, "UPDATE client SET first_name_db='$first', last_name_db='$last', email_db='$email' WHERE cust_id_db='$userLoggedIn'");
        $message = "Details updated!"."<br>";
        echo $message;
	}
	else 
		$message = "That email is already in use!"."<br>";
}
else 
    $message = "";
if(isset($_POST['update_password'])){
    $pass=$_POST['old_password'];
    $new_pass1=$_POST['new_password_1'];
    $new_pass2=$_POST['new_password_2'];
    $query="SELECT password_db from client where cust_id_db=$userLoggedIn";
    $result=mysqli_query($con,$query);
    $db_password=$result['password_db'];

    if($old_password == $db_password) {

		if($new_password_1 == $new_password_2) {


			if(strlen($new_password_1)<= 4) {
                $password_message = "Sorry, Password must be greater than 4 characters."."<br>";
                echo $password_message;
			}	
			else {
				$new_password=($new_password_1);
				$password_query = mysqli_query($con, "UPDATE client SET password_db='$new_password' WHERE cust_id_db='$userLoggedIn'");
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
if(isset($_POST['close_account'])){
    $query2="DELETE * from client where cust_id_db='$username' ";
    $result=mysqli_query($con,$query2);
    if($result){
        echo"Account Deleted Successfully";
    }
    else
    {
        "Please try again";
    }
}
?>