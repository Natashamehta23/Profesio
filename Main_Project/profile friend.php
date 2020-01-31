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
	<!-- for new feeds -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<script type="text/javascript">
	// jQuery Document
	$(document).ready(function(){
		//Load the file containing the feeds log
	function loadLog(){		
		var oldscrollHeight = $("#fetch_feeds").attr("scrollHeight") - 20;
		$.ajax({
			url: "./php/feeds_fetcher_profile_friend.php",
			cache: false,
			success: function(html){		
				$("#fetch_feeds").html(html); //Insert chat log into the #chatbox div							
		  	},
		});
	}
	setInterval (loadLog, 100);	//Reload file every 0.1 seconds
	
});
</script>
<!-- for new feeds -->
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





	<div class="wrapper">
 	<style type="text/css">
	 	.wrapper {
	 		margin-left: 0px;
			padding-left: 0px;
	 	}

 	</style>
	
 	<div class="profile_left" style="position: fixed; top: 50px;
	width: 17%; max-width: 200px;
	min-width: 130px; height: 100%;
	z-index: 1">
 		<img src="./assets/images/profile_pics/defaults/head_deep_blue.png">

 		<div class="profile_info">
 			<p>Task: <?php echo  $Task_count ?></p>
             <p>Upvotes: <?php echo $Upvotes ?></p>
            <?php echo $userLoggedIn?>
	

 		</div>

 		<!--<form action="#ritik_miglani" method="POST">
 			<input type="submit" name="deny_service" class="danger" value="Cancel Service"><br> 
			 <input type="submit" name="req_service" class="success" value="Request Service"><br>		</form>-->

		 <?php
		 require('./config/config.php');
		 $emp_id="E1";
		 $client_id="c1";
		 $query="SELECT * FROM services where emp_id_db='$emp_id' AND cust_id_db='$client_id'";
		 $exe=mysqli_query($con,$query);
		 $run= mysqli_num_rows($exe);
		 //echo $run;
		 if($run>=1)
		 {
			echo '<form action="./php/cancel_request_service_handler.php?from='.$emp_id.'&to='.$client_id.'" method="POST">';
			echo '<input type="submit" name="deny_service" class="danger" value="Cancel Service">'."<br>";	
			echo '</form>';
		 }
		 else
		 {
			echo '<form action="./php/request_service_handler.php?from='.$emp_id.'&to='.$client_id.'" method="POST">';
			echo '<input type="submit" name="req_service" class="success" value="Request Service"><br>';
			echo '<input type="submit" class="deep_blue" data-toggle="modal" data-target="post_form" value="Give Instructions">';
			echo '</form>';
		 }
		?>
    <div class="profile_info_bottom">Some usefull text</div>
 	</div>


	<div class="profile_main_column column" style="margin-left: 25%;">

    <ul class="nav nav-tabs" role="tablist" id="profileTabs">
      <li role="presentation" class="active"><a href="#newsfeed_div" aria-controls="newsfeed_div" role="tab" data-toggle="tab">Description</a></li>
      <li role="presentation"><a href="#messages_div" aria-controls="messages_div" role="tab" data-toggle="tab">Messages</a></li>
    </ul>

    <div class="tab-content">

      <div role="tabpanel" class="tab-pane fade in active" id="newsfeed_div">
        <div class="posts_area"><br>
<b>Message</b>:  Message <b>Message</b> Message <b>Message</b><br>
</div>
        <img id="loading" src="./assets/images/icons/loading.gif" style="display: none;">
      </div>
	  



	  
	<div id="fetch_feeds">
		<br>
		<br>
		<hr>
    	<form action="./request_handler.php?q=#refer" method="POST">
    	<div class="main_column column" style="width: 100%;">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<hr>
			<br>
			<input type="submit" name="E3" class="success" value="Request Service" id="accept_button " style="width: 20%; height: 28px; border-radius: 5px; margin: 5px; border: none; color: #fff; background-color: #2ecc71;">

		</div>
		</form>

		<form action="./request_handler.php?q=#refer" method="POST">
    	<div class="main_column column" style="width: 100%;">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<hr>
			<br>
			<input type="submit" name="E3" class="success" value="Request Service" id="accept_button " style="width: 20%; height: 28px; border-radius: 5px; margin: 5px; border: none; color: #fff; background-color: #2ecc71;">
		</div>
		</form>
	</div>
	
	<br>
	<br>






	









      <div role="tabpanel" class="tab-pane fade" id="messages_div">
        <h4>You and <a href="#ritik_miglani">Ritik Miglani</a></h4><hr><br><div class="loaded_messages" id="scroll_messages"><div class="message" id="blue">sgvsdfg</div><br><br></div>


        <div class="message_post">
          <form action="#ritik_miglani" method="POST">
              <textarea name="message_body" id="message_textarea" placeholder="Write your message ..."></textarea>
              <input type="submit" name="post_message" class="info" id="message_submit" value="Send">
          </form>

        </div>

        <script>
          var div = document.getElementById("scroll_messages");
          div.scrollTop = div.scrollHeight;
        </script>
      </div>


    </div>


	</div>

<!-- Modal -->
<div class="modal fade" id="post_form" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="postModalLabel">Post something!</h4>
      </div>









      <div class="modal-body">
      	<p>This will appear on the user's profile page and also their newsfeed for your friends to see!</p>

      	<form class="profile_post" action="#ritik_miglani" method="POST">
      		<div class="form-group">
      			<textarea class="form-control" name="post_body"></textarea>
      			<input type="hidden" name="user_from" value="nitin_kumar">
      			<input type="hidden" name="user_to" value="ritik_miglani">
      		</div>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="post_button" id="submit_profile_post">Post</button>
      </div>
    </div>
  </div>
</div>


	</div>

</body></html>