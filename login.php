<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>UtamaduniWears</title>
	<link rel="stylesheet"  href="css/style.css">
    <script type="text/javascript" src="jquerry.js"></script>
    <script type="text/javascript" src="JSS.jss"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
	 <div class="container">
        <header><h1>Utamaduni Wears Blog</h1></header>
        <nav>
            <ul>
                <a href="#"><li>Home</li></a>
                <a href="about.php"><li>About Us</li></a>
                <a href="services.php"><li>Services</li></a>
                <a href="contact.php"><li>Contact Us</li></a>
                <a href="signup.php"><li>Sign Up</li></a>
                <a href="login.php"><li>Login</li></a>
            </ul>
            <div class="handle">Menu</div>
        </nav>
    </div>

	<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
				<h2>LOGIN</h2>
				<input type="text" placeholder="Email">
				<input type="password" placeholder="Password">
				<input type="button" value="Login">
				<a href="">Forgot password?</a>
			</div>
			<div class="register-show">
				<h2>REGISTER</h2>
				<input type="text" placeholder="Email">
				<input type="password" placeholder="Password">
				<input type="password" placeholder="Confirm Password">
				<input type="button" value="Register">
			</div>

</body>
</html>