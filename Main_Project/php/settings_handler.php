<?php
require('./../config/config.php');
require('./../config/client_or_employe.php');
//session_start();
//$_SESSION['LoggedIn']=true;
//$_SESSION['email_session']=$userLoggedIn;

if(isset($_POST['update_details_client']))
{
    /*$first=$_POST['first_name'];
    $last=$_POST['last_name'];
    $email=$_POST['email'];
    $email_check = mysqli_query($con, "SELECT * FROM `client` WHERE `email_db`='$email'");
	$row = mysqli_fetch_array($email_check);
    $matched_user = $row['cust_id_db'];
    $userLoggedIn=$user_id;
    if($matched_user == "" || $matched_user == $userLoggedIn)
     {
        $query = mysqli_query($con, "UPDATE client SET first_name_db='$first', last_name_db='$last' WHERE email_db='$userLoggedIn'");
        $message = "Details updated!"."<br>";
        echo $message;
	}
	else 
        $message = "That email is already in use!"."<br>";*/
    $first=$_POST['first_name'];
    $last=$_POST['last_name'];
    $email=$_POST['email'];
    //$username_db=$first.'_'.$last.'_';
    $query = mysqli_query($con, "UPDATE `client` SET `first_name_db`='$first', `last_name_db`='$last' WHERE `cust_id_db`='$user_id'");
    $message = "Details updated!"."<br>";
    if($query)
            echo $message.'done1';
    $email_check = mysqli_query($con, "SELECT * FROM `administration` WHERE `email_db`='$email' and `cust_id_db`!='$user_id'");
    $count = mysqli_num_rows($email_check);
    if($count==0)
    {
        $query = mysqli_query($con, "UPDATE `administration` SET `email_db`='$email' WHERE `cust_id_db`='$user_id'");
        $message = "Details updated!"."<br>";
        if($query)
                echo $message.'done2';
    }
    else 
        echo 'email id already taken by someone else';
        

}
else if(isset($_POST['update_details_employee']))
    {
    $first=$_POST['first_name'];
    $last=$_POST['last_name'];
    $email=$_POST['email'];
    $charges=$_POST['Charge'];
    global $charges;
    //$query = mysqli_query($con, "UPDATE `client` SET `first_name_db`='$first', `last_name_db`='$last',`email_db`='$email' WHERE `cust_id_db`='$user_id'");
    $query = mysqli_query($con, "UPDATE `employee` SET `first_name_db`='$first', `last_name_db`='$last',`charges_db`='$charges' WHERE`emp_id_db`='$user_id' ");
    $message = "Details updated!"."<br>";
    if($query)
            echo $message.'done3';
    else
    {
        die(mysqli_error($con));
    }
    $email_check = mysqli_query($con, "SELECT * FROM `administration` WHERE `email_db`='$email'  and `cust_id_db`!='$user_id'");
    $count = mysqli_num_rows($email_check);
    //$query = mysqli_query($con, "UPDATE `employee` SET `first_name_db`='$first', `last_name_db`='$last',`Charges`='$charges' WHERE `email_db`='$userLoggedIn'");
    if($count==0)
    {   
        $query = mysqli_query($con, "UPDATE `administration` SET `email_db`='$email' WHERE `cust_id_db`='$user_id'");
        $message = "Details updated!"."<br>";
        if($query)
            echo $message.'done4';
        else
        {
            die(mysqli_error($con));
        }
    }
    else 
        echo 'email id already taken by someone else';        
}


else if(isset($_POST['update_password'])){
    $userLoggedIn=$user_id;
    $pass=$_POST['old_password'];
    $new_pass1=$_POST['new_password_1'];
    $new_pass2=$_POST['new_password_2'];
   // $query="SELECT * from client where cust_id_db='$userLoggedIn'";
    $result=mysqli_query($con,"SELECT * FROM `administration` WHERE `cust_id_db`='$userLoggedIn'");
    $row = mysqli_fetch_array($result);
    $db_password=$row['password_db'];

    if($pass == $db_password) {

		if($new_pass1 == $new_pass2) {


			if(strlen($new_pass1)<= 4) {
                $password_message = "Sorry, Password must be greater than 4 characters."."<br>";
                echo $password_message;
			}	
			else {
				$new_password=($new_pass1);
				$password_query = mysqli_query($con, "UPDATE `administration` SET `password_db`='$new_password' WHERE `cust_id_db`='$userLoggedIn'");
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


/*if(isset($_POST['close_account'])){
    $userLoggedIn="nitin_kumar";
    $query2=" Update client set deleted='yes' where  cust_id_db= '$userLoggedIn' " ;
    $result=mysqli_query($con,$query2);
    if($result){
        echo"Account Deleted Successfully";
    }
    else
    {
        "Please try again";
    }
    $username="087.nitinkumar@gmail.com";
    $query3="Update administration set deleted='yes'  where email_db='$username' ";
    $result=mysqli_query($con,$query3);
    if($result){
        echo "<br>";
        echo"Done ";
    }
    else
    {
        "Please try again";
    }
}
if(isset($_POST['deactivate_account'])){
    $userLoggedIn="nitin_kumar";
    $query2=" UPDATE client SET deactivate_db='yes' WHERE  cust_id_db= '$userLoggedIn' " ;
    $result=mysqli_query($con,$query2);
    if($result){
        echo"Account Deactivated Successfully";
    }
    else
    {
        "Please try again";
    }
    $username="087.nitinkumar@gmail.com";
    $query3="UPDATE administration SET deactivate_db='yes'  WHERE email_db='$username' ";
    $result=mysqli_query($con,$query3);
    if($result){
        echo "<br>";
        echo"Done ";
    }
    else
    {
        "Please try again";
    }
}*/
?>