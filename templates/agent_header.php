<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/user_header.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link rel="stylesheet" type="text/css" href="./css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="./js/password.js" defer></script>

    <title>
        <?php echo $title; ?>
    </title>
</head>

<body>

    <header>
        <div class="header">
            <div class="top-container">
                <div class="logo">
                    <a href="../index.php" class="brand-logo">
                        <img src="./src/img/logo.png" alt="logo" id="logo" class="header-logo">
                    </a>
                </div>

                <div class="login">
                    <a href="login.php"><button>Buy Online</button></a>
                    <a href="login.php"><button>Pay Premium Online</button></a>
                </div>
                <div class="user-button">
                        <span>
                        <i class="fa-solid fa-circle-user" style=" font-size:30px; height:auto "></i>
                        </span><a href="agentdashboard.php"><?php echo $_SESSION['agent_name']; ?></a>
                </div>

            </div>

            <div class="bottom-container">
                <nav>
                    <div class="nav-links">
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="lifeinsurance.php">Life Insurance</a></li>
                            <li><a href="retirementplan.php">Retirement Plans</a></li>
                            <li><a href="branchlocator.php">Branch Locator</a></li>
                            <li><a href="contactus.php">Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
</header>