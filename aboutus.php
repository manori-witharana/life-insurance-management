<?php
$title = 'About Us';
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
                About Us
            </h1>
            <p class="breadcrump">Home | About Us</p>
        </div>    

</div>
    

<div class="main-container" style="display:block;">

    <div class="about-container">
        <div class="about-column column">
            <p>
            Glamorous Life Insurance is a largest and undisputed leader in life insurance. 
            Going from strength to strength with innovative products and services, 
            whilst reinforcing our trust and reputation amongst the people, 
            we have grown to become a household name in every corner of the country and a benchmark 
            of life insurance in the world.<br><br>
            With our vast reach and through our highly specialised sales force we have managed to protect 
            the lives and forge life-long relationships with almost 1 million citizens, and we will continue 
            to aim higher until we have achieved our vision of protecting every Sri Lankan family with life 
            insurance and retirement solutions.
            </p>
        </div>

        <div class="about-column column">
            <img src="https://wallpaperaccess.com/full/1887306.jpg" alt="about us">
        </div>
    </div>

    <div class="slider-container column">
        <img src="./src/img/slider1.webp" alt="" class="slider">
        <img src="./src/img/slider2.webp" alt="" class="slider">
        <img src="./src/img/slider3.webp" alt="" class="slider">
        <img src="./src/img/slider4.jpg" alt="" class="slider">

        <button class="s-button left-btn" onclick="slider(-1)">&#10094</button>
        <button class="s-button right-btn" onclick="slider(1)">&#10095</button>
    </div> 

</div>

<script>
    var slideIndex = 1;
    sliderShow(slideIndex);

    function slider(n) {
    sliderShow(slideIndex += n);
    }

    function sliderShow(n) {
    var i;
    var x = document.getElementsByClassName("slider");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
    }
</script>





<?php

include './templates/footer.php';

?>

