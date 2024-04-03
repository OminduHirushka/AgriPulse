<?php 
    require_once 'dbConnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | About Us</title>

    <!--css-->
    <link rel="stylesheet" href="css/about.css">
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

        <div class="content">
            <div class="about-us">
                <div class="left-container">
                    <label class="about-title">About Us</label>
                    <label class="about-info">Welcome to AgriPulse, your go-to hub for all things agriculture.</label>
                    <label class="about-info"> AgriPulse is a vital resource for the agricultural industry, providing a
                        comprehensive platform for staying updated on trends, innovations, and news. With a dedicated
                        team of experts, AgriPulse empowers farmers, policymakers, and industry stakeholders to foster a
                        thriving agricultural community and drive sustainable practices for a brighter future.</label>
                </div>
                <div class="right-container">
                    <img src="images/logo.png">
                </div>
            </div>

            <div class="vision-mission">
                <div class="left-container">
                    <div class="mission">
                        <label class="mission-header">Our Mission</label>
                        <label class="mission-title">Empowering Sustainable Agriculture:</label>
                        <label class="mission-content">Our mission is to empower farmers and agricultural
                            communities with the knowledge, resources, and practices needed to cultivate
                            healthy crops while safeguarding our environment. We believe that by embracing
                            ecological farming principles, we can ensure food security, protect biodiversity,
                            and promote climate resilience.</label>
                    </div>
                </div>

                <div class="right-container">
                    <div class="vision">
                        <label class="vision-header">Our Vision</label>
                        <label class="vision-title">A Greener, More Prosperous Sri Lanka:</label>
                        <label class="vision-content">Our vision is to see Sri Lanka thrive as a hub of ecological
                            farming excellence, where sustainable agriculture not only meets the needs of today but
                            also paves the way for a prosperous and resilient agricultural sector for future
                            generations.</label>
                    </div>
                </div>
            </div>

            <div class="commitment-container">
                <div class="commitment-title"><label>Our Commitment</label></div>
                <div class="commitment">
                    <div class="c">
                        <label class="c-title">Environmental Stewardship:</label>
                        <label class="c-body">We are unwavering in our commitment to preserving the natural beauty and
                            fertility of
                            our land. Through eco-friendly farming methods, we work tirelessly to protect soil,
                            water, and the climate.</label>
                    </div>
                    <div class="c">
                        <label class="c-title">Education and Outreach:</label>
                        <label class="c-body">Our dedicated team of agricultural scientists and field officers are on
                            the
                            frontlines, sharing knowledge, offering guidance, and building a community of farmers
                            committed
                            to sustainable practices.</label>
                    </div>
                    <div class="c">
                        <label class="c-title">Research and Innovation:</label>
                        <label class="c-body">We invest in cutting-edge research and development to continually improve
                            farming
                            techniques, promote biodiversity, and reduce the environmental impact of
                            agriculture.</label>
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