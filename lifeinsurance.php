<?php
$title = 'Life Insurance';
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
            Life Insurance
            </h1>
            <p class="breadcrump">Home | Life Insurance</p>
        </div>    

</div>
    

<div class="main-container" style="display:block;">

    <div class="about-container">
        <div class="about-column column">
            <p>
            Life Insurance is not just an intelligent decision you make to help you during times of uncertainty. At Ceylinco Life, through our solutions, we plan to De-Risk your life so that you can move forward in life with confidence and achieve the goals and dreams with total peace of mind.
Your family is the most treasured thing for you, hence you need to ensure that their hopes and dreams are met, leading to a promising future.
<br><br>
Life insurance is not just another investment that you should consider; rather it is a strong financial backup & support plan that you have to have for your loved ones & yourself. The protection and the wealth creation opportunity will allow you and your family to confidently follow your dreams.
<br><br>

No matter whether your needs are short term or long term we can assure you that Ceylinco Life, the Market Leader in Life Insurance, will provide the greatest financial security for your loved ones when they need it the most. So let us assist you to select the right plan for you.
            </p>
            <h2 style="margin-bottom:20px;">
            WHY SHOULD YOU GET A LIFE INSURANCE COVER?
            </h2>
            <ul>
                <li>In the unfortunate event of your sudden demise, the future of your loved ones will be free of worry.</li>
                <li>The undisturbed continuation of your child’s education.</li>
                <li>Coverage of critical illnesses, should you or a family member contract a serious illness.</li>
                <li>A monthly income in the event you or a dependant were to fall victim to a total or permanent disability.</li>
                <li>To release you from your loan debts.</li>
                <li>To release you from your loan debts.</li>
            </ul>
        </div>

        <div class="about-column column">
            <img src="https://wallpaperaccess.com/full/1887306.jpg" alt="about us">
        </div>
    </div>


</div>




<?php

include './templates/footer.php';

?>

