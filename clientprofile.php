<?php

$title = 'Profile Details';
include 'dbconnect.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:clientlogin.php');
}

include './templates/user_header.php';

if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $sql = "DELETE FROM users WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if($result){
        echo '<script>alert("User Account Deleted Successfully!"); 
        window.location.href="userregistration.php";</script>';  
    } else {
        echo '<script>alert("User Account not deleted!")</script>';
    }
}




if(isset($_POST['update'])){

    $update_id = $_POST['update_id'];
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $occupation = mysqli_real_escape_string($con, $_POST['occupation']);
    $marital = mysqli_real_escape_string($con, $_POST['marital']);
    $height = $_POST['height'];
    $weight = $_POST['weight'];


    $update_sql = mysqli_query($con, "UPDATE users SET title = '$title', name = '$name', email = '$email', phone = '$phone', address = '$address', city = '$city', nic = '$nic', occupation = '$occupation', marital_status	 = '$marital', height = '$height', weight = '$weight', gender = '$gender', dob = '$dob' WHERE id = '$update_id'") or die('query failed');
    echo '<script>alert("User details updated!")</script>';

}





?>
<link rel="stylesheet" href="./css/clientregistration.css">

<div class="main-container dash-main">
    
<?php include './templates/user_nav.php'; 

?>


<div class="box-container" style="width:100%">


    <div class="form-container edit-container">
            <h2>Profile Details</h2>

            <?php
                $select_user = mysqli_query($con, "SELECT * FROM users WHERE id = '$user_id'") or die('query failed');

                if(mysqli_num_rows($select_user) > 0){
                    while($fetch_user = mysqli_fetch_assoc($select_user)) {
                ?>

            <form action="" method="post">
                <input type="hidden" name="update_id" value="<?php echo $fetch_user['id']; ?>">
                <div class="client-field">
                    <div class="label-col">
                        <p>Gender</p>
                    </div>
                    <div class="input-col radio-input-col">
                        <input type="radio" id="genderChoice1"
                        name="gender" value="Male" class="radio" <?php echo ((($fetch_user['gender']) == "Male") ? "checked" : "") ?>>
                        <label for="genderChoice1">Male</label>
    
                        <input type="radio" id="genderChoice2"
                        name="gender" value="Female" class="radio" <?php echo ((($fetch_user['gender']) == "Female") ? "checked" : "") ?>>
                        <label for="genderChoice2">Female</label>
    
                    </div>
                </div>

                <div class="client-field range-field">
                    <div class="label-col">
                        <label for="title">Title</label>
                    </div>
                    <div class="input-col">
                        <select name="title" id="payment">
                            <option value="<?php echo $fetch_user['title'];?>"><?php echo $fetch_user['title'];?></option>
                            <option value="Ms">Ms</option>
                            <option value="Ms">Mr</option>
                        </select>
                         
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="name" id="name" value="<?php echo $fetch_user['name']; ?>" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="dob">DOB</label>
                    </div>
                    <div class="input-col">
                        <input type="date" name="dob" id="dob" value="<?php echo $fetch_user['dob']; ?>" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="phone">Contact No.</label>
                    </div>
                    <div class="input-col">
                        <input type="tel" name="phone" id="phone" value="<?php echo $fetch_user['phone']; ?>" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-col">
                        <input type="email" name="email" id="email" value="<?php echo $fetch_user['email']; ?>" required>
                    </div>
                </div>
            


                <div class="client-field">
                    <div class="label-col">
                        <label for="name">NIC</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="nic" id="nic" value="<?php echo $fetch_user['nic']; ?>" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Address</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="address" id="address" value="<?php echo $fetch_user['address']; ?>" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">City</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="city" id="city" value="<?php echo $fetch_user['city']; ?>" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Occupation</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="occupation" id="occupation" value="<?php echo $fetch_user['occupation']; ?>" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Marital Status</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="marital" id="marital" value="<?php echo $fetch_user['marital_status']; ?>" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Height (cm)</label>
                    </div>
                    <div class="input-col">
                        <input type="number" name="height" id="height" value="<?php echo $fetch_user['height']; ?>" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Weight (kg)</label>
                    </div>
                    <div class="input-col">
                        <input type="number" name="weight" id="weight" value="<?php echo $fetch_user['weight']; ?>" required>
                    </div>
                </div>

                <div class="form-btn">
                    <input type="submit" name="update" value="Update Details" class="btn submit" id="submit">
                    <a href="clientprofile.php?delete=<?php echo $fetch_user['id']; ?>"><input type="submit" name="delete" value="Delete Account" class="s-btn" id="s-btn"></a>
                 </div> 
            </form>
            <?php
                    }
                    } else {
                        echo '<p>No user found</p>';
                    }
                ?>   
            
        </div>





</div>
    

</div>

</div>


<?php
include './templates/footer.php';
?>