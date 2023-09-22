<?php
$title = 'Contact Us';
include 'dbconnect.php';
session_start();

if(isset($_SESSION['agent_id'])){
    $user_id = $_SESSION['agent_id'];
    include './templates/agent_header.php';
  } elseif(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    include './templates/user_header.php';
    } elseif (isset($_SESSION['manager_id'])){
    $user_id = $_SESSION['manager_id'];
    include './templates/agent_header.php';
  }  else
    include './templates/header.php';

if(isset($_POST['submit'])){

    $Fname = mysqli_real_escape_string($con, $_POST['Fname']);
    $Lname = mysqli_real_escape_string($con, $_POST['Lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $telNo = mysqli_real_escape_string($con, $_POST['telNo']);
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $enquiry = mysqli_real_escape_string($con, $_POST['enquiry']);
    $Message = mysqli_real_escape_string($con, $_POST['Message']);

    $sql = "INSERT INTO contact_form (firstName, lastName, email, phone, nic, enquiry, Message) VALUES ('$Fname', '$Lname', '$email', '$telNo', '$nic', '$enquiry', '$Message')";
    $result = mysqli_query($con, $sql);
    if($result){
        echo '<script>alert("Message sent successfully!")</script>';
    } else {
        echo '<script>alert("Message sending failed!")</script>';
    }

}

?>

<link rel="stylesheet" href="./css/contactus.css">

    <div class="hero-section column">
        <div class="column" style="max-width: 1140px; margin: auto;">
            <h1 class="hero-title">
                Contact Us
            </h1>
            <p class="breadcrump">Home | Contact Us</p>
        </div>

    </div>

    <div class="main-container">
        <div class="form-container">
            <div class="column">
                <form action="" method="post"  enctype="multipart/form-data">
                <div class="half-container">

                    <div class="field half-column">
                        <i class="fas fa-user"></i>
                        <input type="text" name="Fname" id="Fname" placeholder="First Name*" required>
                    </div>

                    <div class="field half-column">
                        <i class="fas fa-user"></i>
                        <input type="text" name="Lname" id="Lname" placeholder="Last Name*" required>
                    </div>

                </div>

                <div class="half-container">

                    <div class="field half-column">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email Address*" required>
                    </div>

                    <div class="field half-column">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" name="telNo" id="telNo" placeholder="Phone*" required>
                    </div>

                </div>

                <div class="half-container">

                    <div class="field half-column">
                        <i class="fa-solid fa-address-card"></i>
                        <input type="text" name="nic" id="nic" placeholder="NIC/ Passport*" required>
                    </div>

                    <div class="field half-column">
                        <i class="fa-solid fa-list"></i>
                        <select id="enquiry" name="enquiry" required>
                            <option value="" disable selected>General Enquiry*</option>
                            <option value="Enquiry 1">Enquiry 1</option>
                            <option value="Enquiry 2">Enquiry 2</option>
                            <option value="Enquiry 3">Enquiry 4</option>
                            <option value="Enquiry 4">Enquiry 4</option>
                        </select>
                    </div>

                </div>
                <div class="field f-textarea">
                    <textarea rows="10" cols="100" name="Message" placeholder="Message"></textarea>


                </div>

                <input type="submit" name="submit" value="Submit" class="s-btn" id="s-btn" style="width: 180px;">
            </form>
            </div>
        </div>


        <div class="social column">
            <p>Feel free to contact us</p>
            <ul type="none">
                <li>
                    <img src="./src/img/phone.png" alt="">011-12345678</i>
                </li>
                <li>
                    <img src="./src/img/gmail.png" alt="">glamorouslifeinsurance@gmail.com</i>
                </li>
                <li>
                    <img src="./src/img/fax.png" alt="">011-12345678</i>
                </li>
                <li>
                    <img src="./src/img/whatsapp.png" alt="">011-12345678</i>
                </li>
                <li>
                    <img src="./src/img/facebook.png" alt="">011-12345678</i>
                </li>

            </ul>
        </div>




    </div>






 <?php

include './templates/footer.php';

?>
