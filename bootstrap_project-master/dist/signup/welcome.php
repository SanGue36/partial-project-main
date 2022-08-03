<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link href="../css/styles.css" rel="stylesheet" />
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="https://freepngimg.com/download/donate_blood/106743-save-donate-lives-blood-free-download-png-hd.png"alt="..." style="width: 130px;height: 80px;"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" dhttps: aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">campaigns</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Photo Gallary</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <br><br><br><br>

    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <div>


    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>