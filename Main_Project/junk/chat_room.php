<?php include './config/config.php';?>
<head>
<link type="text/css" rel="stylesheet" href="./assets/css/chat_room.css" />
</head>
<?php
//$_SESSION['name']='Nitin';
function loginForm(){
    echo'
    <div id="loginform">
    <form action="chat_room.php" method="post">
        <p>Please enter your name to continue:</p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
    ';
}
if(isset($_GET['logout'])){ 
     
    //Simple exit message
    $fp = fopen("./messages/log.html", 'a');
    fwrite($fp, "<div class='lefts'><i>User <b>". $_SESSION['name'] ."</b> has left the chat session.</i><br></div>");

	
    fclose($fp);
	$temp=$_SESSION['name'];

	////NOT WORKING 
	mysqli_query($connect, "UPDATE  Online SET  `ACTIVE`='0' WHERE USER_NAME='$temp'");
    session_destroy();
    header("Location: ./feeds.php"); //Redirect the user
} 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
		$fp = fopen("./messages/log.html", 'a');
    fwrite($fp, "<div class='joins'><i>User <b>". $_SESSION['name'] ."</b> has joined the chat session.</i><br></div>");
    fclose($fp);
	$temp=$_SESSION['name']; 
		// mysqli_query($connect, "INSERT INTO Online(USER_NAME,ACTIVE) VALUES('$temp','1')");

		 mysqli_query($con, "INSERT INTO `online` ( `USER_NAME`, `ACTIVE`) VALUES ( '$temp', '1')"); 
} 
	
	
	
	
	
	
}
    else{
		echo "reload to see new online member";
        //echo '<span class="error">Please type in a name</span>'
		;
    }

if(!isset($_SESSION['name'])){
    loginForm(); 
	 
}

else{
?>
<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <b><?php echo $_SESSION['name'];   
	 ?></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>    
    <div id="chatbox"><?php
if(file_exists("./messages/log.html") && filesize("./messages/log.html") > 0){
    $handle = fopen("./messages/log.html", "r");
    $contents = fread($handle, filesize("./messages/log.html"));
    fclose($handle);
    echo $contents;
}
?>
</div>
     
    <form name="message" action="" method="post">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <button name="submitmsg" type="submit"  id="submitmsg" value="Send">Send</button>
    </form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user submits the form
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("./php/send_msg.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});
	
	//Load the file containing the chat log
	function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax({
			url: "./messages/log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
		});
	}
	setInterval (loadLog, 100);	//Reload file every 0.1 seconds
	
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = './chat_room.php?logout=true';}		
	});

	
});
</script>
<?php
}{$search = "SELECT USER_NAME,ACTIVE FROM Online WHERE  ACTIVE='1'"; 
    $result = $con->query($search);

	if ($result->num_rows > 0) {
    // output data of each row

	echo " <div class='online'><i>ONLINE USER.</i><br></div>";
    while($row = $result->fetch_assoc()) {
	
	     
		 echo $row["USER_NAME"];
		 echo "<br>";
		 
		 }
}else
{    echo "NO ONE IS ONLINE";    }}

?>
</body>
</html>