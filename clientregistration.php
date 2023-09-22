<?php
$title = 'Client Registration';
include 'dbconnect.php';

include './templates/header.php';


  if(isset($_POST['submit'])){

    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $term = $_POST['term'];
    $lifeCover = $_POST['lifeCover'];
    $paymentMode = mysqli_real_escape_string($con, $_POST['payment']);
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $occupation = mysqli_real_escape_string($con, $_POST['occupation']);
    $marital = mysqli_real_escape_string($con, $_POST['marital']);
    $agent = $_POST['agent'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $password = md5($_POST['password']);

    $select_users = mysqli_query($con, "SELECT * FROM users WHERE nic = '$nic'") or die('query failed');

    if(mysqli_num_rows($select_users) > 0){
        echo '<script>alert("User already exists!"); 
        window.location.href="clientlogin.php";</script>';
    }else{
        $sql = "INSERT INTO users (title, name, email, phone, address, city, nic, occupation, marital_status, height, weight, gender, dob, term_period, life_cover, paymentMode, password, agent_id) 
        VALUES ('$title', '$name', '$email', '$phone', '$address', '$city', '$nic', '$occupation', '$marital', '$height' , '$weight' , '$gender' , '$dob', '$term', '$lifeCover', '$paymentMode', '$password' ,' $agent')";
        echo '<script>alert("Registration Successful!"); 
        window.location.href="clientlogin.php";</script>';
    }
    $result = mysqli_query($con, $sql);
    mysqli_close($con);

}
?>

<link rel="stylesheet" href="./css/clientregistration.css">

    <div class="hero-section column">
        <div class="column" style="max-width: 1140px; margin: auto;">
            <h1 class="hero-title">
            <?php echo $title ?>
            </h1>
            <p class="breadcrump">Home | <?php echo $title ?></p>
        </div>

    </div>

    <div class="main-container">
        <div class="form-container">
            <h2>Registration</h2>
            <form action="" method="post">

                <div class="client-field">
                    <div class="label-col">
                        <p>Gender</p>
                    </div>
                    <div class="input-col radio-input-col">
                        <input type="radio" id="genderChoice1"
                        name="gender" value="Male" class="radio">
                        <label for="genderChoice1">Male</label>
    
                        <input type="radio" id="genderChoice2"
                        name="gender" value="Female"  class="radio">
                        <label for="genderChoice2">Female</label>
    
                    </div>
                </div>

                <div class="client-field range-field">
                    <div class="label-col">
                        <label for="title">Title</label>
                    </div>
                    <div class="input-col">
                        <select name="title" id="payment">
                            <option value="Mr">Mr</option>
                            <option value="Ms">Ms</option>
                        </select>
                         
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="name" id="name" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="dob">DOB</label>
                    </div>
                    <div class="input-col">
                        <input type="date" name="dob" id="dob" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="phone">Contact No.</label>
                    </div>
                    <div class="input-col">
                        <input type="tel" name="phone" id="phone" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-col">
                        <input type="email" name="email" id="email" required>
                    </div>
                </div>
            
                <div class="client-field range-field">
                    <div class="label-col">
                        <label for="term">Term</label>
                    </div>
                    <div class="input-col range-input-col">
                        <input type="range" min="10" max="30" value="10" name="term" id="term" class="slider" required>
                        <p><span id="term-value"></span> Years</p>
                    </div>
                </div>

                <div class="client-field range-field">
                    <div class="label-col">
                        <label for="lifeCover">Life Cover</label>
                    </div>
                    <div class="input-col range-input-col">
                        <input type="range" min="1200000" max="50000000" value="1200000" step="10000" name="lifeCover" id="lifeCover" class="slider" required>
                        <p>Rs.<span id="lifeCover-value"></span></p>
                    </div>
                </div>

                <div class="client-field range-field">
                    <div class="label-col">
                        <label for="payment">Premium Payment Mode</label>
                    </div>
                    <div class="input-col">
                        <select name="payment" id="payment">
                            <option value="monthly">Monthly</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="anually">Anually</option>
                          </select>

                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="nic">NIC</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="nic" id="nic" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Address</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="address" id="address" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">City</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="city" id="city" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Occupation</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="occupation" id="occupation" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Marital Status</label>
                    </div>
                    <div class="input-col">
                        <input type="text" name="marital" id="marital" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Height (cm)</label>
                    </div>
                    <div class="input-col">
                        <input type="number" name="height" id="height" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Weight (kg)</label>
                    </div>
                    <div class="input-col">
                        <input type="number" name="weight" id="weight" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="payment">Agent Name</label>
                    </div>
                    <div class="input-col">
                        <select name="agent" id="agent">
                            <option value=" " disable selected>- Select Agent -</option>
                            <?php
                                $select_agent_names= mysqli_query($con, "SELECT * FROM agents") or die('query failed');
                                if(mysqli_num_rows($select_agent_names) > 0){
                                    while($fetch_agent_names = mysqli_fetch_assoc($select_agent_names)){
                                ?>
                                <option value="<?php echo $fetch_agent_names['id'];?>"><?php echo $fetch_agent_names['agent_name']; ?></option>
                            <?php
                                    }
                                } else {
                                    echo '<p class="empty">No Agents found!</p>';
                                }
                            ?>
                          </select>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Password</label>
                    </div>
                    <div class="input-col">
                        <input type="password" name="password" id="password" required>
                    </div>
                </div>

                <div class="client-field">
                    <div class="label-col">
                        <label for="name">Confirm Password</label>
                    </div>
                    <div class="input-col">
                        <input type="password" name="confirmPassword" id="confirmPassword" required>
                    </div>
                </div>



                <input type="submit" name='submit' value="Register" class="btn submit" id="submit">

            </form>
            
        </div>


    </div>



<script>
    var slider = document.getElementById("term");
    var output = document.getElementById("term-value");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
    }

    var sliderCover = document.getElementById("lifeCover");
    var outputCover = document.getElementById("lifeCover-value");
    outputCover.innerHTML = sliderCover.value;
    

    sliderCover.oninput = function() {
        outputCover.innerHTML = this.value;
    }




    


</script>


<?php

include './templates/footer.php';

?>
