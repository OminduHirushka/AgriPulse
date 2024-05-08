<?php
session_start();
require_once '../dbConnection.php';

function showAlert($message) {
    echo '<script>alert("' . $message . '");</script>';
}

$fname = $lname = $uname = $email = $mobile = $district = $pass = "";

if (isset($_POST['add-btn'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $district = $_POST["district"];
    $pass = $_POST["pass"];
    $confirm = $_POST["confirm"];

    if ($pass != $confirm) {
        showAlert("Passwords must be matched!");
    } else {
        $sql = "INSERT INTO farmars (fname, lname, uname, email, mobile, district, pass) 
                VALUES ('$fname', '$lname', '$uname', '$email', '$mobile', '$district', '$pass')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            showAlert("Succefully Added!");
        } else {
            echo mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | Add - Farmer</title>

    <!--css-->
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/style.css">

    <?php
    include '../includes/header.php';
    ?>
</head>

<body>
    <div class="main">
        <?php
        include 'includes/adminNavbar.php';
        ?>

        <div class="container">
            <form method="POST">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" name="fname" id="firstname" class="form-control" placeholder="First name"
                                Required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" name="lname" id="lastname" class="form-control" placeholder="Last Name"
                                Required>
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" name="uname" id="username" class="form-control" placeholder="Username" Required>
                </div>

                <div class="form-outline mb-4">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address"
                        Required>
                </div>

                <div class="form-outline mb-4">
                    <input type="number" name="mobile" id="contact" class="form-control" placeholder="Contact number"
                        Required>
                </div>

                <div class="form-outline mb-4">
                    <select name="district" class="form-control">
                        <option>--Select your district--</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Kalutara">Kalutara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Matale">Matale</option>
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Galle">Galle</option>
                        <option value="Matara">Matara</option>
                        <option value="Hambantota">Hambantota</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Kilinochchi">Kilinochchi</option>
                        <option value="Mannar">Mannar</option>
                        <option value="Vavuniya">Vavuniya</option>
                        <option value="Mullaitivu">Mullaitivu</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Ampara">Ampara</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Puttalam">Puttalam</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Monaragala">Monaragala</option>
                        <option value="Ratnapura">Ratnapura</option>
                        <option value="Kegalle">Kegalle</option>
                    </select>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" name="pass" id="pw" class="form-control" placeholder="Password" Required>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" name="confirm" id="pw2" class="form-control" placeholder="Password" Required>
                </div>

                <div class="text-center" style="margin-bottom: 2rem;">
                    <button class="btn btn-success btn-block fa-lg" type="submit" name="add-btn">Add New Farmer
                    </button>
                </div>

                <div class="d-flex align-items-center justify-content-center pb-4">
                    <a href="farmer-panel.php"><button type="button" class="btn btn-info">Go Back</button></a>
                </div>
            </form>
        </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>