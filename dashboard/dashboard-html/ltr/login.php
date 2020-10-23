<?php

session_start();
if(isset($_SESSION['userlogin'])){
	header("Location: dashboard.php");
} 

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/iTracer_logo_small .png">
    <title>iTracer</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient" style="background-image: url(assets/img/2153948.png);">
    <div class="container"><a class="navbar-brand logo" href="#">iTracer</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
            id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="index.html">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="projects-grid-cards.html">Companies</a></li>
                <li class="nav-item" role="presentation"><a class="btn  btn-block" href="login.php" style="background-color: #fff;color: #3566b5;">Sign In</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="sign_up.php">Sign Up</a></li>
            </ul>
        </div>
    </div>
  </nav>
    <div class="login-clean">
        <form action="login.php" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="assets/img/iTracer%20logo.png">
                <h1>iTracer</h1>
            </div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="email" required></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" id="password" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" id="login">Login</button> 
            </div><a class="forgot" href="sign_up.php">Already Have an account</a></form>
    </div>
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Profile</h3>
                        <ul>
                            <li><a href="#">Project Manager</a></li>
                            <li><a href="#">Developer</a></li>
                            <li><a href="#">CEO</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">iTracer Inc</a></li>
                            <li><a href="#">MZ corporation</a></li>
                            <li><a href="#">ULAB</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Help</h3>
                        <ul>
                            <li><a href="#">Email</a></li>
                            <li><a href="#">Phone number</a></li>
                            <li>Location</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">itracer © 2020</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <script>
  $(function(){
    $('#login').click(function(e){
		
		var  valid = this.form.checkValidity();

		if (valid){
			var email =$('#email').val();
			var password =$('#password').val();
		}

		e.preventDefault();
		
		$.ajax({
			type: 'POST',
			url: 'jslogin.php',
			data: {email: email, password: password},
			success: function(data){
				alert(data);
				if($.trim(data) ===  "1"){
					setTimeout(' window.location.href = "dashboard.php" ', 2000);
				}
			},
			error:function(data){
				alert('not success');
			},
		});

	});
  });
</script>
</body>

</html>