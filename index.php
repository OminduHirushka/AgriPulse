<?php 
    require_once 'dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AgriPulse | Sri Lanka's Sustainable Farming Hub</title>


    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Mono:wght@400;500;600&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Righteous">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
    
    <div class="main">
        <div class="navibar">

            <div class="logo">
                <div class="name"><label class="agri">Agri</label>Pulse</div>
            </div>

            <div class="links">
                <div class="link_item"><a href="index.php">Home</a></div>
                <div class="link_item"><a href="#">About Us</a></div>              
                <div class="link_item"><a href="#">Services</a></div>
                <div class="link_item">
                    <div class="account-dropdown"><a href="#">Account</a>     
                        <div class="dropdown-content">
                            <div class="link_item"><a href="#"><i class="bi bi-person-fill"></i>Farmer</a></div>
                            <div class="link_item"><a href="o#"><i class="bi bi-person-fill"></i>Field-Officer</a></div>
                            <div class="link_item"><a href="#"><i class="bi bi-person-fill"></i>Admin</a></div>
                        </div>
                    </div>
                </div>
                <div class="link_item">
                    <div class="search-dropdown"><a href="#"><i class="bi bi-search"></i></a>
                        <div class="search">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>              
            </div>
        </div>

        <div class="headline">
            <label class="headline-text">Discover Sustainable Farming with the Department of Agriculture.</label>
            <a href="about.php" class="learn-more"><label>Learn More &nbsp;</label><i class="bi bi-arrow-right-circle"></i><i class="bi bi-arrow-right-circle-fill"></i></a>
        </div>
    </div>

    <div class="footer">
        <label class="footer-title"><label class="footer-title-green">Agri</label>Pulse</label>
        <label class="footer-info">Nurturing Agriculture, Fostering Sustainability, and Growing a Greener Future Together.</label>
        <div class="footer-links">
            <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.x.com" target="_blank"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.youtube.com" target="_blank"><i class="bi bi-youtube"></i></a>
            <a href="https://www.whatsapp.com" target="_blank"><i class="bi bi-whatsapp"></i></a>
        </div>

        <div class="copyright">
            <label>Copyright © 2024 AgriPulse.</label>
        </div>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>