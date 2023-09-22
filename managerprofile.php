<?php

$title = 'Profile Details';
include 'dbconnect.php';
session_start();

$user_id = $_SESSION['manager_id'];

if(!isset($user_id)){
    header('location:managerlogin.php');
}

include './templates/manager_header.php';


if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $sql = "DELETE FROM managers WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if($result){
        echo '<script>alert("Manager Account Deleted Successfully!"); 
        window.location.href="managerregistration.php";</script>';  
    } else {
        echo '<script>alert("Manager Account not deleted!")</script>';
    }
}



if(isset($_POST['update'])){

    $update_id = $_POST['update_id'];
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $id_no = mysqli_real_escape_string($con, $_POST['id_no']);
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);


    $update_sql = mysqli_query($con, "UPDATE managers SET name = '$name', address = '$address', phone = '$phone', dob = '$dob', id_no = '$id_no', email = '$email' WHERE id = '$update_id'") or die('query failed');
    echo '<script>alert("Manager details updated!")</script>';

}

?>

<div class="main-container dash-main">
    
    <?php include './templates/manager_nav.php'; 
    
    ?>
    
    <div class="box-container" style="width:100%">

    <div class="form-container edit-container">
            <h2>Profile Details</h2>

            <?php
                $select_user = mysqli_query($con, "SELECT * FROM managers WHERE id = '$user_id'") or die('query failed');

                if(mysqli_num_rows($select_user) > 0){
                    while($fetch_user = mysqli_fetch_assoc($select_user)) {
                ?>

                <form action="" method="post">
                <input type="hidden" name="update_id" value="<?php echo $fetch_user['id']; ?>">
                <div class="field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" id="name" placeholder="Name*" value="<?php echo $fetch_user['name']; ?>" required>
                </div>

                <div class="field">
                    <i class="fa-solid fa-address-card"></i>
                    <input type="text" name="address" id="address" placeholder="Address*" value="<?php echo $fetch_user['address']; ?>" required>
                </div>

                <div class="field">
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" name="phone" id="phone" placeholder="Phone number*" value="<?php echo $fetch_user['phone']; ?>" required>
                </div>

                <div class="half-container">

                    <div class="field half-column">
                        <i class="fa-solid fa-calendar-days"></i>
                        <input type="date" name="dob" id="dob" placeholder="Birthday*" value="<?php echo $fetch_user['dob']; ?>" required>
                    </div>

                    <div class="field half-column">
                        <i class="fa-solid fa-fingerprint"></i>
                        <input type="text" name="idno" id="idno" placeholder="ID Number*" value="<?php echo $fetch_user['id_no']; ?>" required>
                    </div>

                </div>

                <div class="field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email Address*" value="<?php echo $fetch_user['email']; ?>" required>
                </div>

            
                <div class="form-btn">
                    <input type="submit" name="update" value="Update Details" class="s-btn" id="btn">
                    <a href="managerprofile.php?delete=<?php echo $fetch_user['id']; ?>"><input type="submit" name="delete" value="Delete Account" class="s-btn" id="s-btn" onclick="return confirm('Delete this account?')"></a>
                 </div> 
                </form>


            <?php
                    }
                    } else {
                        echo '<p>No manager found</p>';
                    }
                ?>   
            
        </div>





</div>
    

</div>

</div>


<?php
include './templates/footer.php';
?>