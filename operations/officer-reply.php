<?php
session_start();
require_once '../dbConnection.php';

if (!isset($_SESSION['email'])) {

    header("Location: ../officerlogin.php");
    exit();
}

$email = $_SESSION['email'];

function showAlert($message) {
    echo '<script>alert("' . $message . '");</script>';
}

if (isset($_POST['btn-submit'])) {
    $senderE = $_POST["sender"];
    $senderM = $_POST["mobile"];
    $receiver = $_POST["receiver"];
    $message = $_POST["problem"];

    $sql = "INSERT INTO reply (sender, sender_mobile, receiver, message) 
            VALUES ('$senderE', '$senderM', '$receiver', '$message')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        showAlert("Succefully Replied!");
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | Reply Form</title>

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
        include 'includes/officerNavbar.php';
        ?>

        <div class="container">
            <div class="support">
                <label class="support-info">Reply to Farmer</label>
                <div class="left-container">
                    <label class="support-title">Please Fill the following reply form</label>
                    <div class="support-form">

                        <form method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control" name="sender" aria-describedby="emailHelp"
                                    placeholder="Enter sender's email">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile"
                                    placeholder="Enter your mobile number">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="receiver" aria-describedby="emailHelp"
                                    placeholder="Enter receiver's email">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="problem" rows="3"
                                    placeholder="Type the reply here..."></textarea>
                            </div>

                            <button type="submit" name="btn-submit" class="btn btn-success  mb-2">Submit</button>

                            <div class="d-flex align-items-center justify-content-left pb-4">
                                <a href="dashboard-officer.php"><button type="button" class="btn btn-info">Go Back</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>