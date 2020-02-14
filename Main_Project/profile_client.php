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
	<!-- CSS -->
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<!--<link rel="stylesheet" href="./assets/css/jquery.Jcrop.css" type="text/css">-->
	<?php
		require('./config/config.php');
		require('./config/client_or_employe.php');
		global $S_var;
		if(isset($_GET['cust_id']))
		{
			$S_var=$_GET['cust_id'];
			$_SESSION['page_view_user_id']=$S_var;
		}
		else
		{
			$S_var=$_SESSION['page_view_user_id'];
		}
		//











        global $client_id,$client_fname,$client_lname,$client_addr,$client_city,$client_tele,$client_profession;
        //global $emp_id,$behaviour,$punctuality,$working_skill,$rating;
        //global $emp_id,$comment, $timestamp,$person2,$records2;
        $query="SELECT * FROM  `client` WHERE `cust_id_db`='$S_var' ";
        //$query1="SELECT * FROM `rating` WHERE `emp_id_db`='$S_var'";
        //$query2="SELECT * FROM `review_db` WHERE `emp_id_db`='$S_var'";
        $records=mysqli_query($con,$query);
        //$records1=mysqli_query($con,$query1);
        //$records2=mysqli_query($con,$query2);
        $num=mysqli_num_rows($records);
        //$num1=mysqli_num_rows($records1);
        //$num2=mysqli_num_rows($records2);
        if($num>=1)
         {
            $person=mysqli_fetch_array($records);
            $client_id=$person['cust_id_db'];
            $client_fname=$person['first_name_db'];
            $client_lname=$person['last_name_db'];
            $client_addr=$person['address_db'];
			$client_city=$person['city_db'];
			$client_dob=$person['dob_db'];
            $client_tele=$person['telephone_db'];
			$client_profession=$person['profession_db'];
			$client_email=$person['email_db'];
            $client_img=$person['image_loc'];
            $client_deleted=$person['deleted'];
			$client_pass=$person['pass_db'];
			$client_deactivate=$person['deactivate_db'];
            
            
         }
         /*if($num1>=1)
         {
           $person1=mysqli_fetch_array($records1);
           $emp_id=$person1['emp_id_db'];
           $behaviour=$person1['Behaviour'];
           $punctuality=$person1['Punctuality'];
           $working_skill=$person1['Working_Skill'];
           $rating=$person1['Rating'];
         }
         while($person2=mysqli_fetch_array($records2))
         {
           $emp_id=$person2['emp_id_db'];
           $comment=$person2['Comment'];
           $timestamp=$person2['timestamp'];

         }*/
         ?>
	<?php 
		//$userLoggedIn="Nitin";
		//$Task_count='80';
		//$Upvotes='100';	 
		echo '<input type="hidden" value='.$client_id.' id="user_id_feeds">'?>
		
	<!-- for new feeds -->
	<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
	<script type="text/javascript">
	// jQuery Document
	$(document).ready(function(){
		//Load the file containing the feeds log
	function loadLog(){		
		//var clientmsg = document.getElementById("user_id_feeds").value;
		//var link="./php/feeds_fetcher_profile_friend.php?get="+clientmsg;
		//alert(link);
		//document.getElementById("demo").innerHTML=link;
		$.ajax({
			url: "./php/feeds_fetcher_profile_friend.php",
			cache: false,
			success: function(html){		
				$("#fetch_feeds").html(html); //Insert chat log into the #chatbox div							
		  	},
		});
	}
	setInterval (loadLog, 1000);	//Reload file every 30 seconds	
});
</script>
<!-- for new feeds -->
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
	
	<a href="./feeds_edited.php"><?php echo $f_name.' '.$l_name; ?></a>
	<a href="./feeds_edited.php"><i class="fa fa-home fa-lg">Home</i></a>
	<a href="./messages.php" ><i class="fa fa-envelope fa-lg">Message</i></a>
	<a href="./notification.php" ><i class="fa fa-bell fa-lg"   >Notification</i></a>
	<?php  
	//$_SESSION['is_employee_logged_in']="no";
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
 	<style type="text/css">
	 	.wrapper {
	 		margin-left: 0px;
			padding-left: 0px;
	 	}

 	</style>
	
 	<div class="profile_left" style="	position: fixed; 
	 									top: 50px;
										width: 14%; 
										max-width: 200px;
										min-width: 130px; 
										height: 100%;
										z-index: 1"		>
		<?php
		 $query3="SELECT * FROM `client` WHERE `cust_id_db`='$S_var'";
		 $records3=mysqli_query($con,$query3);
		 $result=mysqli_fetch_array($records3);
		 $img=$result['image_loc'];
		 echo '<img src="'.$img.'">';
		 ?>
 		<!--<img src="./assets/images/profile_pics/defaults/head_deep_blue.png">-->
 		

 		<div class="profile_info">
		 	<?php echo "<p>".$client_fname." ".$client_lname."</p><br>"?>

 		</div>

		 <?php
		 /*$emp_id=$user_id;
		 //$emp_id="E1";//current loged_in user
		 $client_id=$S_var;
		 //$client_id="c1";
		 $query="SELECT * FROM `services` where `emp_id_db`='$emp_id' AND `cust_id_db`='$client_id'";
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
			//echo '<input type="submit" class="deep_blue" data-toggle="modal" data-target="post_form" value="Give Instructions">';
			echo '<br>
			<a href="./message.php" style="width: 90%;
			height: 5%;
			border: none;
			border-radius: 3px;
			background-color: #0043f0;
			margin-left: 3.9%;
			padding-left:15%;
			padding-right:15%;
			padding-top:5%;
			padding-bottom:5%;"
			>
			Give Instructions
			
			</a>';
			echo '</form>';
		 }*/
		?>
	 <div class="profile_info_bottom">      </div>
   
   
   
   
    <?php 
    /*while($person2=mysqli_fetch_array($records2))
    {
      $comment=$person2['Comment'];
      echo "$comment"." ";
      $timestamp=$person2['timestamp'];
      echo "$timestamp"."<br>";
      
	}*/
	?>




<?php /*echo' <form action="review.php" method="GET">
			 <button type="submit" name="cust_id" class="deep_blue" value="'.$S_var.'" style="width: 91%;
			 height: 5%;
			 border: none;
			 border-radius: 3px;
			 background-color: #0043f0;
			 margin-left: 3%;">Rating
			 </button><br> 
       </form>*/
	 echo'</div>';
	 ?>


	<div class="profile_main_column column" style="margin-left: 25%;">

    <ul class="nav nav-tabs" role="tablist" id="profileTabs">
		<li role="presentation" class="active">
  			<a href="./profile_friend.php" aria-controls="newsfeed_div" role="tab" data-toggle="tab">Description</a>
		</li>
  		<li role="presentation" >
  			<a href="./profile_client_message.php" aria-controls="messages_div" role="tab" data-toggle="tab">Messages</a>
		</li>
    </ul>

    <div class="tab-content">

      <div role="tabpanel" class="tab-pane fade in active" id="newsfeed_div">
        <div class="posts_area"><br>
<b>Recent Posts...</b>:<br>
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






	









      <!--<div role="tabpanel" class="tab-pane fade" id="messages_div">
        <h4>You and <a href="#ritik_miglani">Ritik Miglani</a>
		</h4>
		<hr>
		<br>
		<div class="loaded_messages" id="scroll_messages">
			<div class="message" id="blue">
			sgvsdfg
			</div>
			<br>
			<br>
		</div>


        <div class="message_post">
          <form action="#ritik_miglani" method="POST">
              <textarea name="message_body" id="message_textarea" placeholder="Write your message ..."></textarea>
              <input type="submit" name="post_message" class="info" id="message_submit" value="Send">
          </form>

        </div>-->

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