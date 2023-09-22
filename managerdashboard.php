<?php

$title = 'Dashboard';
include 'dbconnect.php';
session_start();

$user_id = $_SESSION['manager_id'];

if(!isset($user_id)){
    header('location:login.php');
}

include './templates/manager_header.php';

?>

<div class="main-container dash-main">
    
<?php include './templates/manager_nav.php'; 

?>

<div class="box-container dash-container">

<h2>My Insurance Agents</h2>
<ol>
<?php
        $select_agent= mysqli_query($con, "SELECT agent_name FROM agents WHERE manager_id = '$user_id'") or die('query failed');

        if(mysqli_num_rows($select_agent) > 0){
            while($fetch_agents = mysqli_fetch_assoc($select_agent)){
        ?>
        <li><?php echo $fetch_agents['agent_name'];?></li>
            
        <?php
            }}
            else {
                echo '<p class="empty">No Agents found!</p>';
            }
            ?>

</ol>

</div>
    
    
</div>
</div>

</div>


<?php
include './templates/footer.php';
?>