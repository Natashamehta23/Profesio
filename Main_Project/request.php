<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Profesi&#243; (Skill Allocation System)</title>
	<!-- CSS -->
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<!--<link rel="stylesheet" href="./assets/css/jquery.Jcrop.css" type="text/css">-->
	<!-- for new feeds -->

	<!-- Javascript -->
	<!--<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.js"></script>
	<script src="./assets/js/bootbox.min.js"></script>
	<script src="./assets/js/demo.js"></script>
	<script src="./assets/js/jquery.jcrop.js"></script>
	<script src="./assets/js/jcrop_bits.js"></script>-->


	<!-- CSS -->
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<!--<link rel="stylesheet" href="./assets/css/jquery.Jcrop.css" type="text/css">-->
	
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
<div class="main_column column" id="main_column">

	<h4>Service Requests</h4>
	<?php
	//$emp_id='c1';
	$emp_id=$user_id;
	//$emp_id=$user_id;//only applicable if loggedin user is employee
		$sql=mysqli_query($con,"SELECT * from `services` where `emp_id_db`='$emp_id'");
		$c=mysqli_num_rows($sql);
		if($c==0)
		{
			echo "You have no service requests at this time!";
			echo "<br>";
		}
		else
		{
				while($cout=mysqli_fetch_array($sql))
				{
					$from_id=$cout['cust_id_db'];
					$from_name=$cout['cust_name'];
					echo "$from_id"." (".$from_name.") has sent you a service request!";
					
				echo '<div><form action="./php/accept_handler.php?client_id_get='.$from_id.'" method="POST">';
				echo '<input type="submit" name="accept_request" id="accept_button" value="Accept">
				<input type="hidden" name="client_id"  value="'.$cout['cust_id_db'].'">
				</form>
				<form action="./php/decline_handler.php?client_id_get='.$from_id.'" method="POST">';
				echo '<input type="submit" name="decline_request" id="ignore_button" value="Decline">
				<input type="hidden" name="client_id"  value="'.$cout['cust_id_db'].'">';
				echo '</form></div><hr>';
				}
			}
//INSERT INTO `services` (`cust_id_db`, `emp_id_db`, `cust_name`, `emp_name`, `client_address`, `service_needed`, `charges`, `date_of_service`) VALUES ('c5', 'E1', 'hey', '', '', '', '', '');


?>

</div></div></body></html>