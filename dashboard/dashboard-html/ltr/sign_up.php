<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/iTracer_logo_small .png">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient" style="background-image: url(assets/img/2153948.png);">
        <div class="container"><a class="navbar-brand logo" href="index.html">iTracer</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
    <div>
        <?php
        if(isset($_POST['create'])){
            $name        = $_POST['name'];
            $designation = $_POST['designation'];
            $email       = $_POST['email'];
            $password    = $_POST['password'];
            $phoneNumber    = $_POST['phoneNumber'];
            $address    = $_POST['address'];
            
            $sql = "INSERT INTO user (name, email, designation, password, phoneNumber, address ) VALUES (?,?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$name,$email,$designation,$password, $phoneNumber, $address]);
        }
        ?>
    </div>
   
    <div class="article-clean"></div>
    <div class="register-photo" style="height: 100%;background-image: url(assets/img/2153948.png);">
        <div class="form-container">
            <div class="image-holder" style="background-image: url(assets/img/2153948.png);height: 750px;"></div>
            <form action="sign_up.php" method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <h5 class="text-center">All tabs must be filled</h5>
                <div class="form-row">
                    <div class="col offset-lg-0" style="padding-bottom: 15px;"><input  name="name" class="form-control" type="text" style="padding-right: 10px;" placeholder="Name"required></div>
                </div>
                <div class="form-group">
                    <div class="form-row" style="padding-bottom: 15px;">
                        <div class="col offset-lg-0"><input class="form-control" name="designation" type="text" placeholder="Designation"required></div>
                    </div><input class="form-control" type="email" name="email"  name="email" placeholder="Email"required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"required></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"required></div>
                <div class="form-group"><input class="form-control" type="text" name="phoneNumber" placeholder="Phone number"required></div>
                <div class="form-group"><input class="form-control" type="text" name="address" placeholder="Addess"required></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><input class="btn btn-primary btn-block" type="submit" id="register" name="create" value="Sign Up" ></div>
                <a class="already" href="login.html">You already have an account? Login here.</a></form>
        </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script> 
    $(function(){
        $('#register').click(function(e){
            Swal.fire(
                'Registration Complete',
                'Return to Login Page',
                'success'
                )
        });
    });
</script>
</body>

</html>