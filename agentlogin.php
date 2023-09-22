<?php

$title = 'Sign In';
include './templates/header.php';
include 'dbconnect.php';
session_start();

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = md5($_POST['password']);


    $select_agents = mysqli_query($con, "SELECT * FROM agents WHERE email = '$email' AND password = '$password'") or die('query failed');


    if(mysqli_num_rows($select_agents) > 0){
    
        $row = mysqli_fetch_assoc($select_agents);

            $_SESSION['agent_name'] = $row['name'];
            $_SESSION['agent_email'] = $row['email'];
            $_SESSION['agent_id'] = $row['id'];
            header('location:agentdashboard.php');
    
    }else{
        echo '<script>alert("Incorrect email or password!")</script>';
    }
    
} 

?>
    
    <div class="main-container">
        <div class="container login-card">
            <div class="form-container" style="width:100%">
                <h2>Agent Log In</h2>
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
                    <p>Don't have an account? <a href="agentregistration.php">Create Account</a></p>
                    <p style="font-style: italic;"><a href="agentforgetpassword.php">Forgot your password?</a></p>

                </div>

            </div>
        </div>

    </div>
    

<?php
include './templates/footer.php';
?>