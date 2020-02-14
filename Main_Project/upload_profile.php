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
	<div id="Overlay" style=" width:100%; height:100%; border:0px #990000 solid; position:absolute; top:0px; left:0px; z-index:2000; display:none;"></div>
	<div class="main_column column">


	<div id="formExample">
		
	    <p><b>  </b></p>
	    
	    <form action="./assets/images/profile_upload.php" method="post" enctype="multipart/form-data">
	        Upload something<br><br>
			<input type="file" name="fileToUpload" id="fileToUpload" style="width:200px; height:30px; "><br><br>
	        <input type="submit" value="Submit" style="width:85px; height:25px;">
	    </form><br><br>
	    
	</div> <!-- Form-->  


    </div>
 
 
 
 
 
  
 
    <br><br>
</div></body></html>