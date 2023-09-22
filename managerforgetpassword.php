<?php

$title = 'Recover Forgot Password';
include './templates/header.php';
include 'dbconnect.php';

if(isset($_POST['recover'])){
    
    $email=$_POST['email'];
    $password= md5($_POST['password']);
      
    $query = mysqli_query($con, "SELECT * FROM managers WHERE email='$email'");
    $rows = mysqli_num_rows($query);
   
    if($rows > 0){
   
           $query = "UPDATE managers SET password ='$password' WHERE email='$email'";
           $query_run = mysqli_query($con,$query);
           
           if($query)
           {
            echo '<script>alert("password changed successfully");
            window.location.href="login.php";</script>';  
           }
           else
           {
            echo '<script>alert("Password not changed")</script>';
           }
    }
    else
       echo '<script>alert("email not found")</script>';
    
    mysqli_close($con);
    }
   
?>


    
    <div class="main-container">
        <div class="container login-card">
            <div class="form-container" style="width:100%">
                <h2>Forget Password</h2>
                <form action="" method="post" class="login-form">
                    <div class="field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <i class="fas fa-envelope"></i>
                        <input type="password" name="password" id="password" placeholder="Enter new password" required>
                    </div>

                    <div class="submit-btn-sec">
                        <input type="submit" name="recover" value="Change Password" class="btn login-btn" id="submit-btn">
                    </div>
                </form>



                </div>

            </div>
        </div>

    </div>
    

<?php
include './templates/footer.php';
?>