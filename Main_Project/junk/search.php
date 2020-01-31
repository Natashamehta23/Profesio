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
	<link rel="stylesheet" href="./../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./../assets/css/style.css">
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
					<img src="./../assets/images/icons/magnifying_glass.png">
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







	<div class="wrapper">
<div class="main_column column" id="main_column">

	1 results found: <br> <br><p id="grey">Try searching for:</p><a href="#search.php?q=ritik&amp;type=name">Names</a>, <a href="#search.php?q=ritik&amp;type=username">Usernames</a><br><br><hr id="search_hr"><div class="search_result">
					<div class="searchPageFriendButtons">
						<form action="#search.php?q=ritik" method="POST">
							<input type="submit" name="ritik_miglani" class="danger" value="Remove Friend">
							<br>
							<input type="submit" class="default" value="Request Sent">
							<br>
							<input type="submit" name="ritik_miglani" class="success" value="Add Friend">
						</form>
					</div>


					<div class="result_profile_pic">
						<a href="#link_to_profile_ritik_miglani"><img src="./../assets/images/profile_pics/defaults/head_deep_blue.png" style="height: 100px;"></a>
					</div>

						<a href="#link_to_profile_ritik_miglani"> Ritik Miglani
						<p id="grey"> ritik_miglani</p>
						</a>
						<br> some usefull details such as
						0 friends in common<br>

				</div>
				<hr id="search_hr">


</div></div></body></html>