<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="/Assets/css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="/Assets/img/background.jpg">
	<div class="container">
		<div class="img">
			<img src="/Assets/img/login.svg">
		</div>
		
		<div class="login-content">
			<form action="form-input.php">
				<img src="/Assets/img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" class="input" id="username" placeholder="Username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" class="input" id="password" placeholder="Password">
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Login" onclick="validateForm()">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
