<?php 
    require_once 'dbConnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | Farmer Support</title>

    <!--css-->
    <link rel="stylesheet" href="css/support.css">
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

        <div class="support">
            <label class="support-info">Get support from a field officer</label>
            <div class="left-container">
                <label class="support-title">Please Fill the following form</label>
                <div class="support-form">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="problem" rows="3"
                                placeholder="Enter the problem you are having regarding Eco Farming"></textarea>
                        </div>
                        <button type="submit" name="support-btn" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>

            <div class="right-container">
                <img src="images/support_2.webp">
            </div>
        </div>
    </div>

    <?php
        include 'includes/footer.php';
    ?>
</body>

</html>