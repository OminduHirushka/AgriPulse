<?php 
    require_once 'dbConnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | Accounts</title>

    <!--css-->
    <link rel="stylesheet" href="css/service.css">
    <link rel="stylesheet" href="css/style.css">

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
            <label>User Accounts</label>
        </div>

        <div class="services">
            <a href="#">
                <div class="service">
                    <div class="image">
                        <img src="images/farmer.jpg">
                    </div>
                    <div class="text">
                        <label>farmer</label>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="service">
                    <div class="image">
                        <img src="images/officer.jpg">
                    </div>
                    <div class="text">
                        <label>Field-Officer</label>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="service">
                    <div class="image">
                        <img src="images/admin.jpg">
                    </div>
                    <div class="text">
                        <label>Admin</label>
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