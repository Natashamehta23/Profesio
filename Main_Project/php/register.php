
<!doctype html>
<html>
<head>
<meta charaset="utf-g">
<title>Welcome to Profesi&#243;</title>
<link rel="stylesheet" href="./assets/css/log_reg_styles.css">
<body>
<form method="post" action="./php/register_handler.php">
<div class="login-box">
<h1>REGISTER<h1>
<div class ="textbox">
<input type="text "placeholder ="username" name="user_f">
</div>
<div class="textbox">
<input type="password" placeholder="password" name="pass">
</div>
<div class="textbox">
        <input type="text" name="first" placeholder="First Name">  
</div>
<div class="textbox">
        <input type="text" name="last" placeholder="Last Name" required>
 </div>
 <div class="textbox">
        <input type="email" name="email" placeholder="abc24@gmail.com" required>
 </div>
 <div class="textbox">
       <input type="text" name="city" placeholder="city" required>
</div>
<div class="textbox">
       <input type="int" name="phone" placeholder="Phone No." required>
</div>
 <div class="textbox">
        <input type="date" name="dob_f" placeholder="dd-mm-yyyy" required>
 </div>


<div class="force-group">
<div class="custom-control custom-checkbox">
<input type="checkbox" name="rememberme" class ="custom-control-input" id="customcontrolinline">
<label class="custom-control-label" for="customcontrolinline">Remember me</label>
</div>
<input class="btn" type="submit" name="register"value="Register">

</form>
</body>