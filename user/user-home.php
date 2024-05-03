<?php
session_start();
require_once 'dbConnection.php';

if (!isset($_SESSION['email'])) {

    header("Location: ../farmerlogin.php");
    exit();
}

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | Sri Lanka's Sustainable Farming Hub</title>

    <!--css-->
    <link rel="stylesheet" href="../css/style.css">

    <?php
        include 'includes/header.php';
    ?>
</head>

<body>
    <div class="main">
        <?php
            include 'includes/navbar.php';
        ?>

        <div class="headline">
            <label class="headline-text">Discover Sustainable Farming with the Department of Agriculture.</label>
            <a href="about.php" class="learn-more"><label>Learn More &nbsp;</label><i
                    class="bi bi-arrow-right-circle"></i><i class="bi bi-arrow-right-circle-fill"></i></a>
        </div>
    </div>

    <?php
        include 'includes/footer.php';
    ?>
</body>

</html>