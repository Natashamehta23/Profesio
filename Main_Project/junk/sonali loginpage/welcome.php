<?php
require 'config/config.php';
$username=$_POST['user'];
$password=$_POST['pass'];
if(isset($_POST['login'])) 
{
    $_SESSION['email_session']=$username;
    $check_database_query = mysqli_query($con, "SELECT * FROM employee WHERE username='$username' AND password='$password'");
    $check_login_query = mysqli_num_rows($check_database_query);
    if($check_login_query == 1) {
        $row = mysqli_fetch_array($check_database_query);
        $user = $row['username'];
        $_SESSION['uname_session']=$user;
        echo $user;
        $fname = $row['First-name'];
        $_SESSION['fname_session']=$fname;
        echo $fname;
        $lname = $row['Last_name'];
        $_SESSION['lname_session']=$lname;
        echo $lname;
        $db = $row['DOB'];
        $_SESSION['dob']=$db;
        echo $db;
        $ps = $row['password'];
        $_SESSION['pass_session']=$ps;
        echo $ps;
        $occup = $row['occupation'];
        $_SESSION['occup_session']=$occup;
        echo $occup;
        $city = $row['city'];
        $_SESSION['city_session']=$city;
        echo $city;
        $tele = $row['telephone'];
        $_SESSION['tele_session']=$tele;

        echo $tele;
    
    

    
    }
else{
    echo "please register";
}
}

?>