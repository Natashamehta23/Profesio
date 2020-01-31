<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Profesi&#243; (Skill Allocation System)</title>

	<!-- Javascript -->
	<script src="./profesio/assets/js/jquery.min.js"></script>
	<script src="./profesio/assets/js/bootstrap.js"></script>
	<script src="./profesio/assets/js/bootbox.min.js"></script>
	<script src="./profesio/assets/js/demo.js"></script>
	<script src="./profesio/assets/js/jquery.jcrop.js"></script>
	<script src="./profesio/assets/js/jcrop_bits.js"></script>


	<!-- CSS -->
	<link rel="stylesheet" href="./profesio/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./profesio/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./profesio/assets/css/style.css">
	<link rel="stylesheet" href="./profesio/assets/css/jquery.Jcrop.css" type="text/css">
	<?php 
		$userLoggedIn="Nitin";
		$Task_count='80';
		$Upvotes='100';	 ?>
</head>
<body>

	<div class="top_bar"> 

		<div class="logo">
			<a href="http://localhost/Social-Network-using-PHP-MySQL-master/social_media/index.php">Profesi&#243;</a>
		</div>


		<div class="search">

			<form action="http://localhost/Social-Network-using-PHP-MySQL-master/social_media/search.php" method="GET" name="search_form">
				<input type="text" onkeyup="getLiveSearchUsers(this.value, &#39;nitin_kumar&#39;)" name="q" placeholder="Search..." autocomplete="off" id="search_text_input">

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
			

			<a href="http://localhost/Social-Network-using-PHP-MySQL-master/social_media/nitin_kumar">
				<?php echo $userLoggedIn; ?>username			</a>
			<a href="http://localhost/Social-Network-using-PHP-MySQL-master/social_media/index.php">
				<i class="fa fa-home fa-lg">home</i>
			</a>
			<a href="javascript:void(0);" onclick="getDropdownData('nitin_kumar', 'message')">
				<i class="fa fa-envelope fa-lg">message</i>
							</a>
			not for implementing php
			&#39; is same as '
			<a href="javascript:void(0);" onclick="getDropdownData('nitin_kumar','notification')">
				<i class="fa fa-bell fa-lg">notification</i>
							</a>
			<a href="http://localhost/Social-Network-using-PHP-MySQL-master/social_media/requests.php">
				<i class="fa fa-users fa-lg">request</i>
							</a>
			<a href="http://localhost/Social-Network-using-PHP-MySQL-master/social_media/settings.php">
			<a href="setting_handler.php?type=settings">Settings</a>
				<i class="fa fa-cog fa-lg">request</i>
			</a>
			<a href="./includes/handlers/logout.php">
				<i class="fa fa-sign-out fa-lg">logout</i>
			</a>

		</nav>

		<div class="dropdown_data_window" style="height:0px; border:none;"></div>
		<input type="hidden" id="dropdown_data_type" value="">


	</div>


	<script>
	var userLoggedIn = 'nitin_kumar';

	$(document).ready(function() {

		$('.dropdown_data_window').scroll(function() {
			var inner_height = $('.dropdown_data_window').innerHeight(); //Div containing data
			var scroll_top = $('.dropdown_data_window').scrollTop();
			var page = $('.dropdown_data_window').find('.nextPageDropdownData').val();
			var noMoreData = $('.dropdown_data_window').find('.noMoreDropdownData').val();

			if ((scroll_top + inner_height >= $('.dropdown_data_window')[0].scrollHeight) && noMoreData == 'false') {

				var pageName; //Holds name of page to send ajax request to
				var type = $('#dropdown_data_type').val();


				if(type == 'notification')
					pageName = "ajax_load_notifications.php";
				else if(type = 'message')
					pageName = "ajax_load_messages.php"


				var ajaxReq = $.ajax({
					url: "includes/handlers/" + pageName,
					type: "POST",
					data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
					cache:false,

					success: function(response) {
						$('.dropdown_data_window').find('.nextPageDropdownData').remove(); //Removes current .nextpage 
						$('.dropdown_data_window').find('.noMoreDropdownData').remove(); //Removes current .nextpage 


						$('.dropdown_data_window').append(response);
					}
				});

			} //End if 

			return false;

		}); //End (window).scroll(function())


	});

	</script>


	<div class="wrapper">	<div class="user_details column">
		<a href="http://localhost/Social-Network-using-PHP-MySQL-master/social_media/nitin_kumar">  <img src="./assets/images/profile_pics/defaults/head_emerald.png"> </a>
		
		<div class="user_details_left_right">
			<a href="http://localhost/Social-Network-using-PHP-MySQL-master/social_media/nitin_kumar">
			<?php echo $userLoggedIn; ?>	<br></a>
			<br>
			Task :<?php echo $Task_count; ?>
			
		<br>Upvotes: <?php echo $Upvotes; ?>	
		</div>

	</div>

	<div class="main_column column">
		<form class="post_form" action="http://localhost/Social-Network-using-PHP-MySQL-master/social_media/index.php" method="POST">
			<textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
			<input type="submit" name="post" id="post_button" value="Post">
			<hr>

		</form>

		<div class="posts_area"><br>
<b>Warning</b>:  mysqli_num_rows() expects parameter 1 to be mysqli_result, bool given in <b>C:\xampp\htdocs\Social-Network-using-PHP-MySQL-master\social_media\includes\classes\Post.php</b> on line <b>163</b><br>
</div>
		<img id="loading" src="./assets/images/icons/loading.gif" style="display: none;">

	</div>

	<div class="user_details column">

		<h4>Popular</h4>

		<div class="trends">
			<div style="padding:1px;"><a href="./feed_handler.php?value=tutor">Tutor</a><br>
			</div>
			<div style="padding:1px;"><a href="./feed_handler.php?value=technician">Technician</a><br>
			</div>
			<div style="padding:1px;"><a href="./feed_handler.php?value=architect">Architect</a><br>
			</div>
			<div style="padding:1px;"><a href="./feed_handler.php?value=midwife">Midwife</a><br>
			</div>
			<div style="padding:1px;"><a href="./feed_handler.php?value=plumber">Plumber</a><br>
			</div>
			</div>
			<div style="padding:1px;"><a href="./feed_handler.php?value=gardener">Gardener</a><br>
			</div>
			<div style="padding:1px;"><a href="./feed_handler.php?value=labourer">Labourer</a><br>
			</div>
			<div style="padding:1px;">Add More fields<br>
			</div>
			
		<br>
	</div>
</div>




	<script>
	var userLoggedIn = 'nitin_kumar';

	$(document).ready(function() {

		$('#loading').show();

		//Original ajax request for loading first posts 
		$.ajax({
			url: "includes/handlers/ajax_load_posts.php",
			type: "POST",
			data: "page=1&userLoggedIn=" + userLoggedIn,
			cache:false,

			success: function(data) {
				$('#loading').hide();
				$('.posts_area').html(data);
			}
		});

		$(window).scroll(function() {
			var height = $('.posts_area').height(); //Div containing posts
			var scroll_top = $(this).scrollTop();
			var page = $('.posts_area').find('.nextPage').val();
			var noMorePosts = $('.posts_area').find('.noMorePosts').val();

			if ((document.body.scrollHeight == document.body.scrollTop + window.innerHeight) && noMorePosts == 'false') {
				$('#loading').show();

				var ajaxReq = $.ajax({
					url: "includes/handlers/ajax_load_posts.php",
					type: "POST",
					data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
					cache:false,

					success: function(response) {
						$('.posts_area').find('.nextPage').remove(); //Removes current .nextpage 
						$('.posts_area').find('.noMorePosts').remove(); //Removes current .nextpage 

						$('#loading').hide();
						$('.posts_area').append(response);
					}
				});

			} //End if 

			return false;

		}); //End (window).scroll(function())


	});

	</script>




	</div>

</body></html>