<?php

$title = 'Client Sign In';
include './templates/header.php';
include 'dbconnect.php';
session_start();




if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = md5($_POST['password']);

    $select_users = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND password = '$password'") or die('query failed');

    if(mysqli_num_rows($select_users) > 0){
    
        $row = mysqli_fetch_assoc($select_users);

            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            header('location:clientdashboard.php');
    
    }else{
        echo '<script>alert("Incorrect email or password!")</script>';
    }
    
} 

?>
    
    <div class="main-container">
        <div class="container login-card">
            <div class="form-container" style="width:100%">
                <h2>User Log In</h2>
                <form action="" method="post" class="login-form">

                    <div class="field">
                        <i class="fas fa-envelope "></i>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="field">
                        <i class="fas fa-key"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <i class="far fa-eye" id="togglePassword"></i>
                    </div>
                    
                    <div class="submit-btn-sec">
                        <input type="submit" name="submit" value="Log In" class="btn login-btn" id="submit-btn">
                    </div>
                </form>

                <div class="form-b">
                    <p>Don't have an account? <a href="clientregistration.php">Create Account</a></p>
                    <p style="font-style: italic;"><a href="userforgetpassword.php">Forgot your password?</a></p>

                </div>

            </div>
        </div>

    </div>
    

<?php
include './templates/footer.php';
?>