
<!DOCTYPE html>
<html>
<head>
	<title>SignIN</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/loginpage.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#"><span>Travel</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="destination" class="nav-link">Destination</a></li>
	          <li class="nav-item"><a href="hotelresto" class="nav-link">Hotels</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
	          <li class="nav-item cta"><a href="loginpage" class="nav-link">Sign In</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

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
			 <form action="loginme" method="POST">
			 	@csrf
			 	<div class="login-show">
					<h2>LOGIN</h2>
					<input type="text" name="email" placeholder="Email">
					<input type="password" name="userPass" placeholder="Password">
					<input type="submit" name="login" value="Login">
					<a href="">Forgot password?</a>
				</div>
			 </form>
			

			<form action="signUpMe" method="POST">
		 		@csrf
		 		<div class="register-show">
					<h2>REGISTER</h2>
					<input type="text" name="user_name" placeholder="Name">
					<input type="text" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<input type="password" placeholder="Confirm Password">
					<input type="submit" name="register" value="Register">
				</div>
	 		</form>
			
		</div>
	</div>

	<script type="text/javascript">
		
		$(document).ready(function(){
			$('.login-info-box').fadeOut();
			$('.login-show').addClass('show-log-panel');
		});


		$('.login-reg-panel input[type="radio"]').on('change', function() {
			if($('#log-login-show').is(':checked')) {
				$('.register-info-box').fadeOut(); 
				$('.login-info-box').fadeIn();

				$('.white-panel').addClass('right-log');
				$('.register-show').addClass('show-log-panel');
				$('.login-show').removeClass('show-log-panel');

			}
			else if($('#log-reg-show').is(':checked')) {
				$('.register-info-box').fadeIn();
				$('.login-info-box').fadeOut();

				$('.white-panel').removeClass('right-log');

				$('.login-show').addClass('show-log-panel');
				$('.register-show').removeClass('show-log-panel');
			}
		});


	</script>

</body>
</html>