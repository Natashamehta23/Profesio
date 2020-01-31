<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Profesi&#243; (Skill Allocation System)</title>
	<!-- CSS -->
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<!--<link rel="stylesheet" href="./assets/css/jquery.Jcrop.css" type="text/css">-->

	<!-- Javascript -->
	<!--<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.js"></script>
	<script src="./assets/js/bootbox.min.js"></script>
	<script src="./assets/js/demo.js"></script>
	<script src="./assets/js/jquery.jcrop.js"></script>
	<script src="./assets/js/jcrop_bits.js"></script>-->
	<!-- for new feeds -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
	<?php 
	require('./config/config.php');	
	require('./config/client_or_employe.php');
	?>
</head>
<body>

<div class="top_bar"> 

		<div class="logo">
			<a href="./feeds_edited.php">Profesi&#243;</a>
		</div>


		<div class="search">

			<form action="./php/search_handler.php" method="GET" name="search_form">
				<input type="text"  name="q" placeholder="Search..." autocomplete="off" id="search_text_input">

				<div class="button_holder">
					<img src="./assets/images/icons/magnifying_glass.png">
				</div>

			</form>

			<div class="search_results">
			</div>

			<div class="search_results_footer_empty">
			</div>



		</div>

		<nav>
			
			<a href="./feeds_edited.php"><?php echo $f_name.''.$l_name; ?></a>
			<a href="./feeds_edited.php"><i class="fa fa-home fa-lg">Home</i></a>
			<a href="./messages.php" ><i class="fa fa-envelope fa-lg">Message</i></a>
			<a href="./notification.php" ><i class="fa fa-bell fa-lg"   >Notification</i></a>
			<?php  
			if($_SESSION['is_employee_logged_in']=="yes")
			{
				echo '<a href="./request.php"><i class="fa fa-users fa-lg">Request</i></a>';
				echo '<a href="./services_done.php"><i class="fa fa-users fa-lg">Complete Service</i></a>';
			}
			?>
			<a href="./settings.php"><i class="fa fa-cog fa-lg">Settings</i></a>
			<a href="./php/logout.php"><i class="fa fa-sign-out fa-lg">Logout</i></a>

		</nav>

		<div class="dropdown_data_window" style="height:0px; border:none;">


		</div>

		<input type="hidden" id="dropdown_data_type" value="">

	</div>
	


	<div class="wrapper">
<div class="main_column column">

	<h4>Account Settings</h4>
	<img src="<?php echo $user_image_link; ?>" class="small_profile_pic">	<br>
	<a href="./upload_profile.php">Upload new profile picture</a> <br><br><br>
	
	Modify the values and click 'Update Details'

	
	<form action="./php/settings_handler.php" method="POST">
	
		First Name: <input type="text" name="first_name" value="<?php echo $f_name; ?>" id="settings_input"><br>
		Last Name: <input type="text" name="last_name" value="<?php echo $l_name; ?>" id="settings_input"><br>
		Email: <input type="text" name="email" value="<?php echo $user_email; ?>" id="settings_input"><br>
		<?php
		//$_SESSION['is_employee_logged_in']="no";
		if($_SESSION['is_employee_logged_in']=="yes")
		{
			echo 'Charges: <input type="text" name="Charge" value="" id="settings_input"><br>';
		}
		?>
		

		<?php
		//$_SESSION['is_employee_logged_in']="no";
		if($_SESSION['is_employee_logged_in']=="yes")
		{
			echo '<input type="submit" name="update_details_employee" id="save_details" value="Update Details" class="info settings_submit">';
		}
		else
		{
			echo '<input type="submit" name="update_details_client" id="save_details" value="Update Details" class="info settings_submit">';
		}
		?>
		<br>
	</form>

	<h4>Change Password</h4>
	<form action="./php/settings_handler.php" method="POST">
		Old Password: <input type="password" name="old_password" id="settings_input"><br>
		New Password: <input type="password" name="new_password_1" id="settings_input"><br>
		New Password Again: <input type="password" name="new_password_2" id="settings_input"><br>

		<?php
		if($_SESSION['is_employee_logged_in']=="yes")
		{
			echo '<input type="submit" name="update_password" id="save_details" value="Update Password" class="info settings_submit">';
		}
		else
		{
			echo '<input type="submit" name="update_password" id="save_details" value="Update Password" class="info settings_submit">';
		}
		?>
		<br>
	</form>

	<h4>Close Account</h4>
	<form action="./php/delete_account.php" method="POST">
		<input type="submit" name="close_account" id="close_account" value="Close Account" class="danger settings_submit">
	</form>
	<h4>Deactivate Account</h4>
	<form action="./php/deactivate_account.php" method="POST">
		<input type="submit" name="deactivate_account" id="deactivate_account" value="Deactivate Account" class="danger settings_submit">
	</form>


</div></div></body></html>