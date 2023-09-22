<?php
$title = 'Home';
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
  } else
    include './templates/header.php';


?>

<link rel="stylesheet" href="./css/contactus.css">
<link rel="stylesheet" href="./css/home.css">
<link rel="stylesheet" href="./css/aboutus.css">

    <div class="hero-section column home-hero">
        <div class="column" style="max-width: 1140px; margin: auto;">
            <h1 class="hero-title" style="font-size:60px">
                Glamorous Life Insurance
            </h1>
            <p style="color:white;"> Life Insurance is not just an intelligent decision you make to help you during times of uncertainty. At Ceylinco Life, through our solutions, we plan to De-Risk your life so that you can move forward in life with confidence and achieve the goals and dreams with total peace of mind.
Your family is the most treasured thing for you, hence you need to ensure that their hopes and dreams are met, leading to a promising future.</p>
<a href="lifeinsurance.php"><button>Life insurance</button></a>
        </div>

    </div>

    <div class="main-container">
        
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
            <a href="aboutus.php"><button>About Us</button></a>
        </div>

        <div class="about-column column">
            <img src="https://wallpaperaccess.com/full/1887306.jpg" alt="about us">
        </div>
    </div>

    </div>
    <div class="main-container column testimonial">
        <div class="test-title">
            <h3 style="text-align:center;">Testimonials</h3>
            <h1>What our clients say</h1>
        </div>

        <div class="test-cards">
            <div class="card1">
                <div class="div4 eachdiv">
                <div class="userdetails">
                <div class="imgbox">
                    <img src="./src/img/img2.jpg" alt="">
                </div>
                <div class="detbox">
                    <p class="name dark">Thilini Wijethunga
</p>
                    
                </div>
                </div>
                <div class="review dark">
                <h4>Customer</h4>
                <p>“ You are an excellent company and the Melsiripura branch which is in Kurunegala is very good. All the staff members are so friendly to their customers. We are very satisfied with your service. Thank you very much for the Manager…

”</p>
                </div>
                </div>
            </div>

            <div class="card2">
                <div class="div4 eachdiv">
                <div class="userdetails">
                <div class="imgbox">
                    <img src="./src/img/img1.jpg" alt="">
                </div>
                <div class="detbox">
                    <p class="name dark">Pramodth Fernando
</p>
                    
                </div>
                </div>
                <div class="review dark">
                <h4>Customer and Family Savari Winner
</h4>
                <p>“ It is with great pleasure I send this mail along with my parents to appreciate and enlighten few important factors we observed during our tour. We are very grateful to Ceylinco Life for giving us an opportunity to go on…

”</p>
                </div>
                </div>
            </div>

            <div class="card3">
                <div class="div4 eachdiv">
                <div class="userdetails">
                <div class="imgbox">
                    <img src="./src/img/img3.jpg" alt="">
                </div>
                <div class="detbox">
                    <p class="name dark">Jeanette Harmon</p>
                </div>
                </div>
                <div class="review dark">
                <h4>Customer</h4>
                <p>“ You are an excellent company and the Melsiripura branch which is in Kurunegala is very good. All the staff members are so friendly to their customers. We are very satisfied with your service. Thank you very much for the Manager… ”</p>
                </div>
                </div>
            </div>
        </div>
    


    </div>


    </div>






 <?php

include './templates/footer.php';

?>
