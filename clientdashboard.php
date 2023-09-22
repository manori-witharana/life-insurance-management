<?php

$title = 'Dashboard';
include 'dbconnect.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:clientlogin.php');
}

include './templates/user_header.php';

?>

<div class="main-container dash-main">
    
<?php include './templates/user_nav.php'; 

?>
  <div class="box-container dash-container">

<h2>My Insurance Details</h2>
<ol>
<?php   
        $select_agent= mysqli_query($con, "SELECT agent_name FROM agents INNER JOIN users ON agents.id = users.agent_id WHERE users.id = '$user_id'") or die('query failed');
        $fetch_agent = mysqli_fetch_assoc($select_agent);
        $agent_name = $fetch_agent['agent_name'];
        echo 'Agent Name - '. $agent_name;
?>  
</ol>
<?php   
        $select_user= mysqli_query($con, "SELECT * FROM users WHERE id = '$user_id'") or die('query failed');
        $fetch_user = mysqli_fetch_assoc($select_user);
        $term = $fetch_user['term_period'];
        $lifeCover = $fetch_user['life_cover'];

        echo 'Term - '.$term .' Years';
        echo '<br>Life Cover - Rs.'.$lifeCover;

?>  





</div>
    

</div>

</div>


<?php
include './templates/footer.php';
?>