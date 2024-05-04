<?php
session_start();
require_once '../dbConn.php';

function showAlert($message) {
    echo '<script>alert("' . $message . '");</script>';
}

$id = $_GET['updatedid'];
$sql = "SELECT * FROM admins WHERE Admin_ID = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
    $lname = $row['lname'];
    $uname = $row['uname'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $district = $row['district'];
    $pass = $row['pass'];

if (isset($_POST['update-btn'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $district = $_POST["district"];
    $pass = $_POST["pass"];
    $confirm = $_POST["confirm"];

    $sql = "UPDATE admins SET Admin_ID = $id, fname = '$fname', lname = '$lname', uname = '$uname', email = '$email', mobile = '$mobile', district = '$district', pass = '$pass' WHERE Admin_ID = $id";

    $result = mysqli_query($conn, $sql);
    if($result){
                showAlert("Succefully Updated!");      
        }
    else {
        echo mysqli_error($conn);
    }      
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | Administrator - Update User Account</title>

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
                            <input type="text" name="fname" id="firstname" class="form-control" value=<?php echo $fname;?>>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <input type="text" name="lname" id="lastname" class="form-control"
                                value=<?php echo $lname;?>>
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" name="uname" id="username" class="form-control" value=<?php echo $uname;?>>
                </div>

                <div class="form-outline mb-4">
                    <input type="email" name="email" id="email" class="form-control" value=<?php echo $email;?>>
                </div>

                <div class="form-outline mb-4">
                    <input type="number" name="mobile" id="contact" class="form-control" value=<?php echo $mobile;?>>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" name="district" id="district" class="form-control" value=<?php echo $district;?>>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" name="pass" id="pw" class="form-control" value=<?php echo $fname;?>>
                </div>
                <div class="text-center" style="margin-bottom: 2rem;">
                    <button class="btn btn-success btn-block fa-lg" type="submit" name="update-btn">Update</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>