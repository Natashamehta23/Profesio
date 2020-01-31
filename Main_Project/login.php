

<!doctype html>
<html>
<head>
<meta charaset="utf-g">
</head>
<title>Welcome to Profesi&#243;</title>
<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
<body>
<div class = wrapper>
    <div class="login_box">    
        <form method="post" action="./php/login_handler.php">
            <div class="login_header">
				<h1>LOGIN</h1>
			</div>
            <div id="first">
                <br>
                <input type="text"placeholder ="Email" name="user_email">
            </div>
            <div id="first">    
                <input type="password" placeholder="Password" name="pass">
            </div>
            <div class="force-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="rememberme" class ="custom-control-input" id="customcontrolinline">
                    <label class="custom-control-label" for="customcontrolinline">Remember me</label>
                </div>
                <div class=first>
                    <input class="btn" type="submit" name="login" value="login">
                    <div class="d.flex justify-content-center links">don't have an account?
                        <a href="registration_type.php" class="ml-2">Sign Up </a>
                    </div>
                    <div  class ="d-flex justify-content-centre">
                        <a href="registration_type.php">forget your password?</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>