<?php
$title = 'Branch Locator';
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


?>
<link rel="stylesheet" href="./css/aboutus.css">

<div class="hero-section column" >
        <div class="column" style="max-width: 1140px; margin: auto;">
            <h1 class="hero-title">
            Branch Locator
            </h1>
            <p class="breadcrump">Home | Branch Locator</p>
        </div>    

</div>
    

<div class="main-container" style="display:block;">

    <div class="about-container">
        
        
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15843.985635315881!2d79.86184183898843!3d6.891031700167979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sceylinco!5e0!3m2!1sen!2slk!4v1653227764089!5m2!1sen!2slk" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



    </div> 

</div>






<?php

include './templates/footer.php';

?>

