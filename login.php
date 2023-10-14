<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet"  href="style2.css">
  <script src="https://kit.fontawesome.com/c3e8725e16.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>

<?php
   
if(isset($_SESSION['logout'])){
    // echo "hii";
   
	?>
             <div class="alert hide">
         <span class="fas fa-exclamation-circle"></span>
         <span class="msg"><?php echo $_SESSION['logout']; ?></span>
         <div class="close-btn">
            <span class="fas fa-times"></span>
         </div>
      </div>
       <?php
	unset($_SESSION['logout']);
}

?>
<?php
    if(isset($_SESSION['status'])){
		?>
             <div class="alert hide">
         <span class="fas fa-exclamation-circle"></span>
         <span class="msg"><?php echo $_SESSION['status']; ?></span>
         <div class="close-btn">
            <span class="fas fa-times"></span>
         </div>
      </div>
       <?php
		
		unset($_SESSION['status']);
	}




?>

<?php
if(isset($_SESSION['log'])){
	?>
   
  <div class="alert hide">
         <span class="fas fa-exclamation-circle"></span>
         <span class="msg"><?php echo $_SESSION['log']; ?></span>
         <div class="close-btn">
            <span class="fas fa-times"></span>
         </div>
      </div>

   <?php
	
	unset($_SESSION['log']);


}
?>
<?php
if(isset($_SESSION['nameexist'])){
	?>
  <div class="alert hide">
         <span class="fas fa-exclamation-circle"></span>
         <span class="msg"> <?php echo $_SESSION['nameexist']; ?></span>
         <div class="close-btn">
            <span class="fas fa-times"></span>
         </div>
      </div>
   <?php
	
	unset($_SESSION['nameexist']);


}
?>
<div class="container" id="container">
	
<div class="form-container sign-up-container">

<form action="signup.php" method = "post">
	<h1>Create Account</h1>
	<div class="social-container">
		<a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your email for registration</span>
	<input type="text" id="name" name="name" placeholder="name" required>
	<input type="email" id="email" name="email" placeholder="email" required>
	<input type="password" id="password" name="password" placeholder="password" required>
	<button type="submit" >SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="signin.php" method="post">
		<h1>Sign In</h1>
		<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your account</span>
	<input type="email" name="email" placeholder="Email" required >
	<input type="password" name="password" placeholder="Password" required>
	<a href="#">Forgot Your Password</a>

	<button type="submit">Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>

<script>
        //  $('button').click(function(){
           $('.alert').addClass("show");
           $('.alert').removeClass("hide");
           $('.alert').addClass("showAlert");
           setTimeout(function(){
             $('.alert').removeClass("show");
             $('.alert').addClass("hide");
           },5000);
        //  });
         $('.close-btn').click(function(){
           $('.alert').removeClass("show");
           $('.alert').addClass("hide");
         });
      </script>
</body>
</html>