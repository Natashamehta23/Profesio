
<!doctype html>
<html>
<head>
<meta charaset="utf-g">
<style>
.dob_f:hover,.phone:hover
{
	border-color: #3498db;
}
</style>
</head>
<title>Welcome to Profesi&#243;</title>
<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
<body>
<div class="wrapper">
<form method="post" action="./php/register_handler_client.php">
<div class="login_box">
       <div class="login_header">
              <h1>Register<h1>
       </div>
       <div class="textbox"><br>
              <input type="text" name="first" placeholder="First Name">  
       </div>
       <div class="textbox">
              <input type="text" name="last" placeholder="Last Name" required>
       </div>
       <div class="textbox">
              <input type="email" name="email" placeholder="example@gmail.com" required>
       </div>
       <div class="textbox">
              <input type="password" placeholder="Password" name="pass">
       </div>
       <div class="textbox">
              <input type="date" class="dob_f" name="dob_f" placeholder="dd-mm-yyyy" required style="
                     border: 1px solid #e5e5e5;
	              margin-top: 5px;
	              width: 70%;
	              height: 35px;
	              margin-bottom: 10px;
                     padding-left: 5px;
                     ">
       </div>
       <div class="textbox">
              <input type="text" name="city" placeholder="City" required>
       </div>
       <div class="textbox">
              <input type="int" class="phone" name="phone" placeholder="Phone No." required style="
                     border: 1px solid #e5e5e5;
	              margin-top: 5px;
	              width: 70%;
	              height: 35px;
	              margin-bottom: 10px;
                     padding-left: 5px;
                     hover {
	              border-color: #3498db;
                     }
                     ">
       </div>
       <div class="textbox">
              <input type="text" name="address" placeholder="Address" required>
       </div>
       <div class="force-group">
              <div class="custom-control custom-checkbox">
                     <input type="checkbox" name="rememberme" class ="custom-control-input" id="customcontrolinline">
                     <label class="custom-control-label" for="customcontrolinline">Remember me</label>
              </div>
              <input class="btn" type="submit" name="register"value="Register">
       </div>
</div>
</form>
</body>
</html>