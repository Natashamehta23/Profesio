<?php
require './../config/config.php';
$mail_id=$_POST['user_email'];
$password=$_POST['pass'];
if(isset($_POST['login'])) 
{
    
    $check_database_query = mysqli_query($con, "SELECT * FROM `administration` WHERE `email_db`='$mail_id' AND `password_db` ='$password'");
    $check_login_query = mysqli_num_rows($check_database_query);
    if($check_login_query == 1) {
        $row = mysqli_fetch_array($check_database_query);
        $_SESSION['email_session']=$mail_id;
        $user_name = $row['username_db'];
        $_SESSION['username_session']=$user_name;
        $cust_id_loged_in = $row['cust_id_db'];
        $_SESSION['cust_id_session']=$cust_id_loged_in;
    header('location: ./../session.php');
    }
else{
       // header('location: ./../register.php');
       header('location: ./../registration_type.php');
    }
}

?>