<?php 
    require_once 'dbConnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | Register</title>

    <!--css-->
    <link rel="stylesheet" href="css/login.css">
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

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Harvesting Harmony: Your Gateway to Sustainable Farming
                                        with Sri Lanka's <label style="color: #7DBA34;">Agri</label>Pulse</h4>
                                    <p class="small mb-0">Welcome to our digital oasis, where sustainable
                                        farming meets innovation. Explore the art of ecological agriculture
                                        through expert guidance, eco-friendly products, and a vibrant community
                                        of eco-conscious farmers. Join us in cultivating a greener tomorrow,
                                        one crop at a time.</p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <h4 class="mt-1 mb-5 pb-1">Create an <label
                                                style="color: #7DBA34;">Agri</label>Pulse account</h4>
                                    </div>

                                    <form method="POST">
                                        <div class="row">
                                            <!--First Name-->
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" name="fname" id="firstname" class="form-control"
                                                        placeholder="First name" Required>
                                                </div>
                                            </div>

                                            <!--Last Name-->
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" name="lname" id="lastname" class="form-control"
                                                        placeholder="Last Name" Required>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Username-->
                                        <div class="form-outline mb-4">
                                            <input type="text" name="uname" id="username" class="form-control"
                                                placeholder="Username" Required>
                                        </div>

                                        <!--Email-->
                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email Address" Required>
                                        </div>

                                        <!--Contact-->
                                        <div class="form-outline mb-4">
                                            <input type="number" name="mobile" id="contact" class="form-control"
                                                placeholder="Contact Number" Required>
                                        </div>

                                        <!--District-->
                                        <div class="form-outline mb-4">
                                            <select name="district" class="form-control"
                                                placeholder="Select Your District" Required>
                                                <option value="Colombo">Colombo</option>
                                                <option value="Gampaha">Gampaha</option>
                                                <option value="Kalutara">Kalutara</option>
                                                <option value="Kandy">Kandy</option>
                                                <option value="Matale">Matale</option>
                                                <option value="Nuwara Eliya">Nuwara Eliya</option>
                                                <option value="Galle">Galle</option>
                                                <option value="Matara">Matara</option>
                                                <option value="Hambantota">Hambantota</option>
                                                <option value="Anuradhapura">Anuradhapura</option>
                                                <option value="Polonnaruwa">Polonnaruwa</option>
                                                <option value="Badulla">Badulla</option>
                                                <option value="Monaragala">Monaragala</option>
                                                <option value="Ratnapura">Ratnapura</option>
                                                <option value="Kegalle">Kegalle</option>
                                                <option value="Kurunegala">Kurunegala</option>
                                                <option value="Puttalam">Puttalam</option>
                                                <option value="Batticaloa">Batticaloa</option>
                                                <option value="Ampara">Ampara</option>
                                                <option value="Trincomalee">Trincomalee</option>
                                                <option value="Jaffna">Jaffna</option>
                                                <option value="Kilinochchi">Kilinochchi</option>
                                                <option value="Mannar">Mannar</option>
                                                <option value="Vavuniya">Vavuniya</option>
                                                <option value="Mullaitivu">Mullaitivu</option>
                                            </select>
                                        </div>

                                        <!--Password-->
                                        <div class="form-outline mb-4">
                                            <input type="password" name="pass" id="pw" class="form-control"
                                                placeholder="Password" Required>
                                        </div>

                                        <!--Confirm Password-->
                                        <div class="form-outline mb-4">
                                            <input type="password" name="confirm" id="pw2" class="form-control"
                                                placeholder="Confirm Password" Required>
                                        </div>

                                        <div class="text-center" style="margin-bottom: 2rem;">
                                            <button class="btn btn-success btn-block fa-lg mb-3" type="submit"
                                                name="farmersignup-btn">
                                                Create new account
                                            </button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Already have an account?</p>
                                            <a href="farmerlogin.php"><button type="button"
                                                    class="btn btn-outline-success">Log-In</button></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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