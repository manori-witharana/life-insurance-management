<link rel="stylesheet" href="./css/agent_dashboard.css">
<h1>User Dashboard</h1>
<div class="admin-navigation user-navigation">

    <div class="button-container">
        <a href="clientdashboard.php" class="<?php echo ($title == "Dashboard" ? "active" : "")?> admin-btn btn">Dashboard</a>
        <a href="clientprofile.php" class="<?php echo ($title == "Profile Details" ? "active" : "")?> admin-btn btn">Profile Details</a>
        <a href="logout.php" class="<?php echo ($title == "Log out" ? "active" : "")?> admin-btn btn">Log Out</a>
    </div>


