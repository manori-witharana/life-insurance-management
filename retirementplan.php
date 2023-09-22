<?php
$title = 'Retirement Plans';
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
            Retirement Plans
            </h1>
            <p class="breadcrump">Home | Retirement Plans</p>
        </div>    

</div>
    

<div class="main-container" style="display:block;">

    <div class="about-container">
        <div class="about-column column">
            <p>
            Retirement is all about enjoying life with a peace of mind and without being a burden to your loved ones. You would already be planning for your retirement through government pensions, employment related sources or your own personal investments, but is that really enough?
Sri Lanka faces a crisis where increased aging and longer life expectancy is creating a “Grey Tsunami”, where the country would have relatively higher proportion of retirees and the dependency ratios will sky rocket.
With increasing expenses in goods and services and especially in health and medical sectors it is not prudent to have all your eggs in one or a few baskets.
Your retirement should be the best part of your life, therefore it is important to plan & arrange adequate finances to live the kind of retirement life style you envision while protecting the assets you have earned through hard work.

            </p>
            <h2 style="margin-bottom:10px;">
            HOW READY ARE YOU FOR YOUR RETIREMENT ?
            </h2>
            <h3 style="margin-bottom:20px;">HOW READY ARE YOU FOR YOUR RETIREMENT ?</h3>
            It is a simple financial product that you can locate money into so that you can build up a fund to use at retirement, Funds that have reached maturity can be withdrawn in either installments or as a lump sum as and when you retire.
            <ol style="margin-top:20px;">
                <li>How long do you have till you retire ?Your current age minus the age that you hope to retire.</li>
                <li>How much funds will you need for your retirement ?A projected sum of money needed, taking into account emergencies, inflation, and lifestyle.</li>
                <li>How much have you saved for your retirement ?Your current savings that can be utilized to meet your retirement requirements.</li>
                <li>What is the GAP? The difference between your retirement savings and your planned retirement fund. This is how much is required by you for your retirement.</li>
</ol>
<hr style="margin:20px 0;">
<h3 style="margin-bottom:20px;">HOW READY ARE YOU FOR YOUR RETIREMENT ?</h3>
<ol style="margin-top:20px;">
                <li>Adequate savings for a comfortable, independent retirement</li>
                <li>Tax-free returns</li>
                <li>Returns in regular instalments</li>
                <li>Peace of mind</li>
</ol>
        </div>

        <div class="about-column column">
            <img src="https://wallpaperaccess.com/full/1887306.jpg" alt="about us">
        </div>
    </div>


</div>




<?php

include './templates/footer.php';

?>

