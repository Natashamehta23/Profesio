<?php
require('./config/config.php');
$user_id=$_SESSION['cust_id_session'];
$_SESSION['logged_in_session']='yes';
$query=mysqli_query($con,"SELECT * from `employee` where `emp_id_db`='$user_id'");
$num=mysqli_num_rows($query);
if ($num>=1)
while($result=mysqli_fetch_array($query))
{
    echo $_SESSION['e_user_logged_in']=$user_id;
    echo $_SESSION['e_first_session_logged_in']=$result['first_name_db'];
    echo $_SESSION['e_last_session_logged_in']=$result['last_name_db'];
    echo $_SESSION['e_exp_session_logged_in']=$result['experience_db'];
    echo $_SESSION['e_add_session_logged_in']=$result['address_db'];
    echo $_SESSION['e_city_session_logged_in']=$result['city_db'];
    echo $_SESSION['e_tele_session_logged_in']=$result['telephone_db'];
    echo $_SESSION['e_prof_session_logged_in']=$result['profession_db'];
    echo $_SESSION['e_charges_session_logged_in']=$result['charges_db'];
    echo $_SESSION['e_age_session_logged_in']=$result['age_db'];
    echo $_SESSION['e_gender_session_logged_in']=$result['gender_db'];
    $_SESSION['e_charge_session_logged_in']=$result['charges_db'];
    echo $_SESSION['e_dob_session_logged_in']=$result['dob_db'];
    echo $_SESSION['e_image_loc_session_logged_in']=$result['image_loc'];
    // $_SESSION['e_deleted_session_logged_in']=$result['deleted'];
    // $_SESSION['e_deactivate_db_session_logged_in']=$result['deactivate_db'];
    echo $_SESSION['is_employee_logged_in']="yes";
    $query2=mysqli_query($con,"SELECT * from `administration` where `cust_id_db`='$user_id'");
    while($result1=mysqli_fetch_array($query2))
    {
        $_SESSION['username_session']=$result1['username_db'];
        $_SESSION['e_email_session_logged_in']=$result1['email_db'];
        $_SESSION['e_pass_session_logged_in']=$result1['password_db'];
    }
}
$query1=mysqli_query($con,"SELECT * from `client` where `cust_id_db`='$user_id'");
$num=mysqli_num_rows($query1);
if ($num>=1)
while($results=mysqli_fetch_array($query1))
{   
    echo $_SESSION['c_user_logged_in']=$user_id;
    echo $_SESSION['c_first_session_logged_in']=$results['first_name_db'];
    echo $_SESSION['c_last_session_logged_in']=$results['last_name_db'];
    //echo $_SESSION['c_email_session_logged_in']=$results['email_db'];
    echo $_SESSION['c_dob_session_logged_in']=$results['dob_db'];
    echo $_SESSION['c_city_session_logged_in']=$results['city_db'];
    echo $_SESSION['c_tele_session_logged_in']=$results['telephone_db'];
    echo $_SESSION['c_image_loc_session_logged_in']=$results['image_loc'];
    echo $_SESSION['c_add_session_logged_in']=$results['address_db'];
    echo $_SESSION['c_deleted_session_logged_in']=$results['deleted'];
    echo $_SESSION['c_deactivate_db_session_logged_in']=$results['deactivate_db'];
    //$_SESSION['c_prof_sess_logged_in']=$result['profession_db'];
    echo $_SESSION['is_employee_logged_in']="no";
    $query2=mysqli_query($con,"SELECT * from `administration` where `cust_id_db`='$user_id'");
    while($result1=mysqli_fetch_array($query2))
    {
        echo 'inside';
        $_SESSION['username_session']=$result1['username_db'];
        echo $_SESSION['c_email_session_logged_in']=$result1['email_db'];
        $_SESSION['c_pass_session_logged_in']=$result1['password_db'];
    }

}
/*
$query2=mysqli_query($con,"SELECT * from `administration` where `cust_id_db`='$user_id'");
while($result1=mysqli_fetch_array($query2))
{
    $_SESSION['user_sess']=$result1['username_db'];
}*/
/*$query3=mysqli_query($con,"SELECT * from notification where cust_id_db='$user_session'");
while($results=mysqli_fetch_array($query1))
{
    $_SESSION['cust']=$result['cust_id_db'];
    $_SESSION['noti']=$result['noti_id_db'];
    $_SESSION['message']=$result['noti_msg_db'];
    $_SESSION['noti_date']=$result['noti_date_db'];
}
*/
header('location: ./feeds_edited.php');
?>