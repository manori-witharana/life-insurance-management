<?php

$title = 'Dashboard';
include 'dbconnect.php';
session_start();

$user_id = $_SESSION['agent_id'];

if(!isset($user_id)){
    header('location:login.php');
}

include './templates/agent_header.php';

?>


<div class="main-container dash-main">
    <?php include './templates/agent_nav.php'; 
    
    ?>
    <div class="box-container dash-container">

<h2>My Customers</h2>
<ol>
<?php
        $select_user= mysqli_query($con, "SELECT * FROM users WHERE agent_id = '$user_id'") or die('query failed');

        if(mysqli_num_rows($select_user) > 0){
            while($fetch_users = mysqli_fetch_assoc($select_user)){
        ?>
        <li><?php echo $fetch_users['name']. '<br>Mobile Number - '. $fetch_users['phone']
        . '<br>Gender - '. $fetch_users['gender']
        . '<br>Address - '. $fetch_users['address']
        . '<br>Term Period - '. $fetch_users['term_period']
        . '<br>Life Cover - '. $fetch_users['life_cover']
        . '<br>NIC - '. $fetch_users['nic'];?></li>
            
        <?php
            }}
            else {
                echo '<p class="empty">No Customers found!</p>';
            }
            ?>

</ol>
</div>
</div>
    
</div>
</div>

</div>


<?php
include './templates/footer.php';
?>