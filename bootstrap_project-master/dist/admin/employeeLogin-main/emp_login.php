<?php
    session_start();
    require_once '../php/config.php';

    $username=$password="";
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM employee_login WHERE emp_username='$username' AND emp_password='$password';";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['emp_username'] === $username && $row['emp_password'] === $password) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['emp_id'] = $row['emp_id'];

                header("Location: emp_time_chart.php");

                exit();

            }
            else{
                echo "incorrect username or password";
            }
            
         }
         else if($username == "admin"){
            if($password == "admin"){
                session_start();
                $_SESSION['username'] = $username;
                header("Location: ../Admin_form-main/admin/index.html");
            } else {
                $invalid = "Invalid Password!";
            }
        }else{
            $invalid = "Invalid username or password!";
        }
    }
?>




<html>
    <head>
        <title>EMPLOYEE LOGIN</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>
   <div class="container">
    <div class="login-box">
    <div class="row">
      
        <div class="col-md-6" login-left>
            <h2>LOGIN HERE</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control  <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" required value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" required value="<?php echo $password; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" >Login</button>
</form>

</div>



</div>
</body>
    </html>
