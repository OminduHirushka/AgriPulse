<?php
session_start();
require_once 'dbConnection.php';

if (!isset($_SESSION['email'])) {

    header("Location: ../farmerlogin.php");
    exit();
}

$email = $_SESSION['email'];
?>

<!Doctype html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | Services</title>

    <!--css-->
    <link rel="stylesheet" href="../css/service.css">
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

        <div class="service-title">
            <label>Our Services</label>
        </div>

        <div class="services">
            <a href="support.php">
                <div class="service">
                    <div class="image">
                        <img src="images/support.jpg">
                    </div>
                    <div class="text">
                        <label>Farmer Support</label>
                    </div>
                </div>
            </a>

            <a href="store.php">
                <div class="service">
                    <div class="image">
                        <img src="images/store.webp">
                    </div>
                    <div class="text">
                        <label>Web Store</label>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="service">
                    <div class="image">
                        <img src="images/article.jpg">
                    </div>
                    <div class="text">
                        <label>Articles</label>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <?php
        include 'includes/footer.php';
    ?>
</body>

</html>