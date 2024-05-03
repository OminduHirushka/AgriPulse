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
    <title>AgriPulse | Web Store</title>

    <!--css-->
    <link rel="stylesheet" href="../css/store.css">
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

        <div class="store">
            <div class="title">
                Welcome to &nbsp;<div class="name"><label class="agri">Agri</label>Pulse</div>&nbsp; Web Store.
            </div>

            <div class="content">
                <div class="item">
                    <div class="item-image">
                        <img src="images/tomato_seed.webp">
                    </div>
                    <div class="item-info">
                        <label class="item-title">Heirloom tomato seeds</label>
                        <label class="item-description">Rs.100.00</label>
                    </div>
                </div>
                
                <div class="item">
                    <div class="item-image">
                        <img src="images/lettuce.webp">
                    </div>
                    <div class="item-info">
                        <label class="item-title">Lettuce seedlings</label>
                        <label class="item-description">Rs.170.00</label>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="images/corn.jpg">
                    </div>
                    <div class="item-info">
                        <label class="item-title">Non-GMO corn seeds</label>
                        <label class="item-description">Rs.200.00</label>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="images/compost.jpg">
                    </div>
                    <div class="item-info">
                        <label class="item-title">Organic compost</label>
                        <label class="item-description">Rs.1200.00</label>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="images/neem_oil.webp">
                    </div>
                    <div class="item-info">
                        <label class="item-title">Neem oil</label>
                        <label class="item-description">Rs.800.00</label>
                    </div>
                </div>

                <div class="item">
                    <div class="item-image">
                        <img src="images/stickey.jpeg">
                    </div>
                    <div class="item-info">
                        <label class="item-title">Sticky traps</label>
                        <label class="item-description">Rs.250.00</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include 'includes/footer.php';
    ?>
</body>

</html>