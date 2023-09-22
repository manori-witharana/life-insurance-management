<?php

$title = 'Sign Up';
include './templates/header.php';

?>

<style>
    .signup-main{
        display:grid;
        grid-template-columns:40% 60%;
        align-items:center;
        gap:30px;
    }

    .col-1{
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .col-1 button{
        width:100%;
        padding:30px 0;
    }

    .col-1 a{
        width:100%;
    }

    .signup-main .col-1 button{
        font-size:18px;
    }

</style>
    
    <div class="main-container signup-main">
        <div class="containers col-1">
            <a href="clientregistration.php"><button>Create User Account</button></a>
            <a href="agentregistration.php"><button>Register Agent</button></a>
            <a href="managerregistration.php"><button>Register Manager</button></a>
        </div>
        <div class="containers col-2">
            <img src="./src/img/signup.jpg" alt="" style="width:100%; height:auto; float:right; border-radius:5px;">

        
        </div>

    </div>
    

<?php
include './templates/footer.php';
?>