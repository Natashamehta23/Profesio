<?php
//echo "hey";

if($_SESSION['logged_in_session']=="yes")
{
    ;
}
else
{
    header('Location: ./login.php');
}
    if($_SESSION['is_employee_logged_in']=="yes")
	{
        //echo 'user logged in is employee';
    $user_id=$_SESSION['e_user_logged_in'];
    $f_name=$_SESSION['e_first_session_logged_in'];
    $l_name=$_SESSION['e_last_session_logged_in'];
    $expri=$_SESSION['e_exp_session_logged_in'];
    $user_adder=$_SESSION['e_add_session_logged_in'];
    $user_city=$_SESSION['e_city_session_logged_in'];
    $user_tele=$_SESSION['e_tele_session_logged_in'];
    $user_profession=$_SESSION['e_prof_session_logged_in'];
    $service_charges=$_SESSION['e_charges_session_logged_in'];
    $user_age=$_SESSION['e_age_session_logged_in'];
    $user_gender=$_SESSION['e_gender_session_logged_in'];
    $user_dob=$_SESSION['e_dob_session_logged_in'];
    $user_image_link=$_SESSION['e_image_loc_session_logged_in'];
    $user_email=$_SESSION['e_email_session_logged_in'];
    //$user_charges=$_SESSION['e_charge_session_logged_in'];
    $user_name=$_SESSION['username_session'];
    }	
    else 
    {
        //echo 'no its is not';
        $user_id=$_SESSION['c_user_logged_in'];
        $f_name=$_SESSION['c_first_session_logged_in'];
        $l_name=$_SESSION['c_last_session_logged_in'];
        $user_adder=$_SESSION['c_add_session_logged_in'];
        $user_city=$_SESSION['c_city_session_logged_in'];
        $user_tele=$_SESSION['c_tele_session_logged_in'];
        $user_dob=$_SESSION['c_dob_session_logged_in'];
        $user_image_link=$_SESSION['c_image_loc_session_logged_in'];
        $user_email=$_SESSION['c_email_session_logged_in'];
        $user_name=$_SESSION['username_session'];
        //$_SESSION['c_email_session_logged_in']=$result['email_db'];
        //$_SESSION['c_image_loc_session_logged_in']=$result['image_loc'];
        //$_SESSION['c_add_session_logged_in']=$result['address_db'];
        //$_SESSION['c_deleted_session_logged_in']=$result['deleted'];
        //$_SESSION['c_deactivate_db_session_logged_in']=$result['deactivate_db'];    
    }