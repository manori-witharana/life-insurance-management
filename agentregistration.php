<?php
$title = 'Agent Registration';
include 'dbconnect.php';

include './templates/header.php';

  if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $idNo = mysqli_real_escape_string($con, $_POST['idno']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = md5($_POST['password']);
    $manager = $_POST['manager'];

    $select_users = mysqli_query($con, "SELECT * FROM agents WHERE id_no = '$idno'") or die('query failed');

    if(mysqli_num_rows($select_users) > 0){
        echo '<script>alert("Agent already exists!"); 
        window.location.href="agentlogin.php";</script>';
    }else{
        $sql = "INSERT INTO agents (agent_name, address, phone, dob, id_no, email, password, manager_id) 
        VALUES ('$name', '$address', '$phone', '$dob', '$idNo', '$email', '$password', '$manager')";
        echo '<script>alert("Agent Registration Successful!"); 
        window.location.href="agentlogin.php";</script>';
    }
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
}

?>

<link rel="stylesheet" href="./css/form.css">
<link rel="stylesheet" href="./css/contactus.css">
<script src="./js/password.js" defer></script>


    <div class="hero-section column">
        <div class="column" style="max-width: 1140px; margin: auto;">
            <h1 class="hero-title">
                Agent Registration
            </h1>
            <p class="breadcrump">Home | Agent Registration</p>
        </div>

    </div>

    <div class="main-container">
        <div class="form-container">
            
            <div class="column">
            <h2 style="text-align:center; margin-bottom:20px;">Agent Registration</h2>
                <form action="" method="post">

                <div class="field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" id="name" placeholder="Name*" required>
                </div>

                <div class="field">
                    <i class="fa-solid fa-address-card"></i>
                    <input type="text" name="address" id="address" placeholder="Address*" required>
                </div>

                <div class="field">
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" name="phone" id="phone" placeholder="Phone number*" required>
                </div>

                <div class="half-container">
    
                    <div class="field half-column">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="date" name="dob" id="dob" placeholder="Birthday*" required>
                    </div>
    
                    <div class="field half-column">
                        <i class="fa-solid fa-fingerprint"></i>
                        <input type="text" name="idno" id="idno" placeholder="ID Number*" required>
                    </div>
    
                </div>

                <div class="field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email Address*" required>
                </div>

                <div class="field agent-field">

                    <div class="input-col">
                        <select name="manager" id="manager" required>
                            <option value=" " disable selected>- Select Assigned Manager -</option>
                            <?php
                                $select_managers= mysqli_query($con, "SELECT * FROM managers") or die('query failed');
                                if(mysqli_num_rows($select_managers) > 0){
                                    while($fetch_managers = mysqli_fetch_assoc($select_managers)){
                                ?>
                                <option value="<?php echo $fetch_managers['id'];?>"><?php echo $fetch_managers['name']; ?></option>
                            <?php
                                    }
                                } else {
                                    echo '<p class="empty">No Managers found!</p>';
                                }
                            ?>
                          </select>
                    </div>
                </div>
    
                <div class="half-container">
    
                    <div class="field half-column showpassword">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="password" id="password" placeholder="Password*" required>
                        <i class="far fa-eye" id="togglePass"></i>
                    </div>
    
                    <div class="field half-column">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Retype Password*" required>
                    </div>
    
                </div>
    
                <input type="submit" name="submit" value="Register" class="s-btn" id="s-btn">
                </form>
            </div>
        </div>
        
    
    </div>



<?php

include './templates/footer.php';

?>
