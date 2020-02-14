
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

	</head>

    <?php
        require('./config/config.php');
		require('./config/client_or_employe.php');
        global $S_var;
        $S_var=$_GET['cust_id'];
        global $employee_id,$employee_fname,$employee_lname,$employee_addr,$employee_city,$employee_tele,$employee_profession;
        $query="SELECT * FROM  `employee` WHERE emp_id_db='$S_var' ";
        $records=mysqli_query($con,$query);
        $num=mysqli_num_rows($records);
        if($num==1)
         {
            $person=mysqli_fetch_array($records);
            $employee_id=$person['emp_id_db'];
            $employee_fname=$person['first_name_db'];
            $employee_lname=$person['last_name_db'];
            $employee_addr=$person['address_db'];
            $employee_city=$person['city_db'];
            $employee_tele=$person['telephone_db'];
            $employee_profession=$person['profession_db'];            
         }
         ?>
<body>

<div class="top_bar"> 

    <div class="logo">
        <a href="#index_page">Profesi&#243;</a>
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
<div class="dropdown_data_window" style="height:0px; border:none;"></div>
<input type="hidden" id="dropdown_data_type" value="">


</div>
<div class="wrapper">
<?php echo '
<form method="GET" action="./php/review_handler.php" > 
          ';?>                  
	<table>                      
            <tr>
            <td><h2>Review</h2></td>
            </tr>
            <tr>
               <td><h3>Rate the Person on the following basis:<h3> </td>
            </tr>
            <tr>
                <td><br><h4>Behaviour:<h4></td>
                <td>
                  <input type = "radio" name = "review" value = "5">5
                  <input type = "radio" name = "review" value = "4">4
                  <input type = "radio" name = "review" value = "3">3
                  <input type = "radio" name = "review" value = "2">2
                  <input type = "radio" name = "review" value = "1">1

               </td>
            </tr>
                    
            
            <tr>
            <td><br><h4>Punctuality:<h4></td>
               <td>
                  <input type = "radio" name = "review1" value = "5">5
                  <input type = "radio" name = "review1" value = "4">4
                  <input type = "radio" name = "review1" value = "3">3
                  <input type = "radio" name = "review1" value = "2">2
                  <input type = "radio" name = "review1" value = "1">1

               </td>
            </tr>
    
       
            <tr>
            <td><br><h4>Working Skill:<h4></td>
               <td>
                  <input type = "radio" name = "review2" value = "5">5
                  <input type = "radio" name = "review2" value = "4">4
                  <input type = "radio" name = "review2" value = "3">3
                  <input type = "radio" name = "review2" value = "2">2
                  <input type = "radio" name = "review2" value = "1">1

               </td>
            </tr>
   
            <?php        
            echo  '<input type = "hidden" name = "cust_id" value = "'.$S_var.'">';
              ?>      
      
           <tr>
               <td><br><h4>Comment:<h4></td>
               <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
            </tr>
            
            
         </table>
         

		
		<input type="submit" name="Submit"  value="Submit" class="info settings_submit"><br>
	

	
	</form>


</div></body></html>