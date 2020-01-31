<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Profesi&#243; (Skill Allocation System)</title>
	<!-- Javascript -->
	<!--<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.js"></script>
	<script src="./assets/js/bootbox.min.js"></script>
	<script src="./assets/js/demo.js"></script>
	<script src="./assets/js/jquery.jcrop.js"></script>
	<script src="./assets/js/jcrop_bits.js"></script>-->



	<!-- for new feeds -->
	<script type="text/javascript" src="./assets/js/jquery.min.js"></script>

	<?php 
	require('./../config/config.php');	
	require('./../config/client_or_employe.php');
	?>
	<!-- CSS -->
	<link rel="stylesheet" href="./../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./../assets/css/style.css">
	<!--<link rel="stylesheet" href="./assets/css/jquery.Jcrop.css" type="text/css">-->
	<?php 
		//$userLoggedIn="Nitin";
		//$Task_count='80';
		//$Upvotes='100';	 
	?>
</head>
<body>

<div class="top_bar"> 

<div class="logo">
	<a href="./../feeds_edited.php">Profesi&#243;</a>
</div>


<div class="search">

	<form action="./../php/search_handler.php" method="GET" name="search_form">
		<input type="text"  name="q" placeholder="Search..." autocomplete="off" id="search_text_input">

		<div class="button_holder">
			<img src="./../assets/images/icons/magnifying_glass.png">
		</div>

	</form>

	<div class="search_results">
	</div>

	<div class="search_results_footer_empty">
	</div>



</div>

<nav>
	
	<a href="./../feeds_edited.php"><?php echo $f_name.''.$l_name; ?></a>
	<a href="./../feeds_edited.php"><i class="fa fa-home fa-lg">Home</i></a>
	<a href="./../messages.php" ><i class="fa fa-envelope fa-lg">Message</i></a>
	<a href="./../notification.php" ><i class="fa fa-bell fa-lg"   >Notification</i></a>
	<?php  
			if($_SESSION['is_employee_logged_in']=="yes")
			{
				echo '<a href="./request.php"><i class="fa fa-users fa-lg">Request</i></a>';
				echo '<a href="./services_done.php"><i class="fa fa-users fa-lg">Complete Service</i></a>';
			}
			?>
	<a href="./../settings.php"><i class="fa fa-cog fa-lg">Settings</i></a>
	<a href="./../php/logout.php"><i class="fa fa-sign-out fa-lg">Logout</i></a>

</nav>

<div class="dropdown_data_window" style="height:0px; border:none;">


</div>

<input type="hidden" id="dropdown_data_type" value="">

</div>




<?php
//require('./../config/config.php');
		$S_var=$_GET['q'];
		$curr_log_in=$user_id;
        $query="SELECT * FROM  `profesio`.`employee` WHERE `first_name_db` LIKE '%$S_var%' OR `last_name_db` LIKE '%$S_var%' OR `address_db` LIKE '%$S_var%' OR `city_db` LIKE '%$S_var%' OR `telephone_db` LIKE '%$S_var%' OR`profession_db` LIKE '%$S_var%' ";
        $records=mysqli_query($con,$query);
        $num=mysqli_num_rows($records);
        
        echo '<div class="wrapper">';
        echo '<div class="main_column column" id="main_column">';  
        echo "$num results found:"."<br>";
		echo '<br>
				<p id="grey">Try searching for:</p>
				<a href="./search_handler.php?q='.$S_var.'">Names</a>, 
				<a href="./search.php?q='.$S_var.'">Usernames</a>
				<br>
				<br>
				<hr id="search_hr">
			';
        while($person=mysqli_fetch_array($records)){
         $employee_fname=$person['first_name_db'];
         $employee_lname=$person['last_name_db'];
         $employee_addr=$person['address_db'];
         $employee_city=$person['city_db'];
         $employee_tele=$person['telephone_db'];
         $employee_profession=$person['profession_db'];
		 $employee_id=$person['emp_id_db'];
		 //$employee_city=$person['experience_db'];
         $employee_charges=$person['charges_db'];
         //$employee_profession=$person['age_db'];
		 $employee_img_loc=$person['image_loc'];

		 //echo $employee_addr=$person['address_db'];
		 echo'<div class="search_result">
				 <div class="searchPageFriendButtons">';
				 //echo $curr_log_in;
				 //echo $employee_id;
		if($_SESSION['is_employee_logged_in']=="yes")
		{
			;
		}	
		else 
		{

			$sql=mysqli_query($con,"SELECT * FROM `services` WHERE (`cust_id_db`='$curr_log_in' AND `emp_id_db`='$employee_id') or (`emp_id_db`='$curr_log_in' AND `cust_id_db`='$employee_id')");
			$count=mysqli_num_rows($sql);
			//echo '________   '.$count.'heyyyyyyyyyyyyyyyyyyyyyyyyyfrom='.$employee_id.'&to='.$curr_log_in.'';
			if($count>=1)
			{
				 echo '<form action="./cancel_request_service_handler.php?from_client='.$curr_log_in.'&to_employee='.$employee_id.'" method="POST">';
				 echo'
							<input type="submit" name="'.$employee_id.'" class="danger" value="Request Sent">
						</form>';
			}
			else
			{
				echo '<form action="./request_service_handler.php?from_client='.$curr_log_in.'&to_employee='.$employee_id.'" method="POST">';
						 echo'
							<input type="submit" name="'.$employee_id.'" class="success" value="Request Service">
						</form>';
			}
		}
		
				echo '</div>
				<div class="result_profile_pic">
					<a href="./../profile_friend.php?cust_id='.$employee_id.'"><img src="./.'.$employee_img_loc.'" style="height: 100px;"></a>
				</div>
				 <a href="./../profile_friend.php?cust_id='.$employee_id.'"> '.$employee_fname.' '.$employee_lname.'
	                <p id="grey"> '.$employee_city.'</p>
    	            <p id="grey"> '.$employee_profession.'</p>
				</a>
				<br> '.$employee_tele.'<br>
			</div>
            <hr id="search_hr">';
		
	}
		echo '
		</div>
	</div>
</body>
</html>';
?>