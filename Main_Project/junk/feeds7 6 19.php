<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Profesi&#243; (Skill Allocation System)</title>

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
	<?php 
		$userLoggedIn="Nitin";
		$Task_count='80';
		$Upvotes='100';	 ?>
</head>
<body>

	<div class="top_bar"> 

		<div class="logo">
			<a href="#index_page">Profesi&#243;</a>
		</div>


		<div class="search">

			<form action="#search.php" method="GET" name="search_form">
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
			

			<a href="#self_home_user">
				<?php echo $userLoggedIn; ?>username			</a>
			<a href="#home">
				<i class="fa fa-home fa-lg">home</i>
			</a>
			<a href="#" >
				<i class="fa fa-envelope fa-lg">message</i>
							</a>
			for implementing php
			&#39; is same as '
			<a href="#" >
				<i class="fa fa-bell fa-lg">notification</i>
							</a>
			<a href="#(connections)requests.php">
				<i class="fa fa-users fa-lg">request</i>
							</a>
			<a href="#settings.php">
				<i class="fa fa-cog fa-lg">settings</i>
			</a>
			<a href="./includes/handlers/logout.php">
				<i class="fa fa-sign-out fa-lg">logout</i>
			</a>

		</nav>

		<div class="dropdown_data_window" style="height:0px; border:none;"></div>
		<input type="hidden" id="dropdown_data_type" value="">


	</div>


	
	<div class="wrapper">	<div class="user_details column">
		<a href="#nitin_kumar">  <img src="./assets/images/profile_pics/defaults/head_emerald.png"> </a>
		
		<div class="user_details_left_right">
			<a href="#nitin_kumar">
			<?php echo $userLoggedIn; ?>	<br></a>
			<br>
			Task :<?php echo $Task_count; ?>
			
		<br>Upvotes: <?php echo $Upvotes; ?>	
		</div>

	</div>

	<div class="main_column column">
		<form class="post_form" action="#add posts index.php" method="POST">
			<textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
			<input type="submit" name="post" id="post_button" value="Post">
			<hr>

		</form>

		<div class="posts_area"><br>
<b>Message</b> <b>.message</b> message <b>message</b><br>
</div>
		<img id="loading" src="./assets/images/icons/loading.gif" style="display: none;">

	</div>

	<div class="user_details column">

		<h4>Popular</h4>

		<div class="trends">
			<div style="padding:1px;"><a href="./profession_handler.php?value=tutor">Tutor</a><br>
			</div>
			<div style="padding:1px;"><a href="./profession_handler.php?value=tech">Technician</a><br>
			</div>
			<div style="padding:1px;"><a href="./profession_handler.php?value=arch">Architect</a><br>
			</div>
			<div style="padding:1px;"><a href="./profession_handler.php?value=mid">Midwife</a><br>
			</div>
			<div style="padding:1px;"><a href="./profession_handler.php?value=plumb">Plumber</a><br>
			</div>
			</div>
			<div style="padding:1px;"><a href="./profession_handler.php?value=garden">Gardener</a><br>
			</div>
			<div style="padding:1px;"><a href="./profession_handler.php?value=labour">Labourer</a><br>
			</div>
			<div style="padding:1px;">Add More fields<br>
			</div>
			
		<br>
	</div>
</div>





	</div>

</body>
</html>