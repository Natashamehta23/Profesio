

<!doctype html>
<html>
<head>
<meta charaset="utf-g">
<title>Welcome to Prof@cio</title>
<link rel="stylesheet" href="styles.css">
<body>
<form method="post" action="welcome.php">
<div class="login-box">
<h1>LOGIN<h1>
<div class ="textbox">
<input type="text "placeholder ="username" name="user">
</div>
<div class="textbox">
<input type="password" placeholder="password" name="pass">
</div>
<div class="force-group">
<div class="custom-control custom-checkbox">
<input type="checkbox" name="rememberme" class ="custom-control-input" id="customcontrolinline">
<label class="custom-control-label" for="customcontrolinline">Remember me</label>
</div>
<input class="btn" type="submit" name="login"value="login">
<div class="d.flex justify-content-center links">don't have an account?<a href="registration.php" class="ml-2">Sign Up </div>
<div  class ="d-flex justify-content-centre">
<a href="fyp.php">forget your password?</a>
</div>
</div>
</form>
</body>