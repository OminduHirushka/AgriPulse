<?php
require_once 'dbConnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | Login - Field Officer</title>

    <!--css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">

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
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <h4>We are The Eco<label style="color: #7DBA34;">Agri</label>Link Team</h4>
                                        <br>
                                        <h5 class="mt-1 mb-5 pb-1">Login - Field Officer</h5>
                                    </div>

                                    <form method="POST">
                                        <p>Please login to your account</p>
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Email" Required>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="pass" name="pass" class="form-control"
                                                placeholder="Password" Required>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-success btn-block fa-lg mb-3" type="submit"
                                                name="officerlogin-btn">Log-In</button>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <a class="text-muted" href="#!">Forgot Password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Welcome to the <label style="color: #7DBA34;">Agri</label>Pulse,
                                        Sri Lanka.</h4>
                                    <p class="small mb-0">AgriPulse is a vital resource for the agricultural industry,
                                        providing a comprehensive platform for staying updated on trends, innovations,
                                        and news. With a dedicated team of experts, AgriPulse empowers farmers,
                                        policymakers, and industry stakeholders to foster a thriving agricultural
                                        community and drive sustainable practices for a brighter future.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    function showAlert($message)
    {
        echo '<script>alert("' . $message . '");</script>';
    }

    if (isset($_POST['officerlogin-btn'])) {
        $email = $_POST["email"];
        $password = $_POST["pass"];

        if (empty($email) || empty($password)) {
            showAlert("Email and Password Are Required!");
        } else {
            $email = mysqli_real_escape_string($conn, $email);
            $password = mysqli_real_escape_string($conn, $password);

            $sql = "SELECT * FROM officer WHERE email = '$email' AND pass = '$password'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                if (mysqli_num_rows($result) == 1) {

                    $_SESSION['email'] = $email;
                    header("Location: Operations/dashboard-officer.php");

                    exit();
                } else {
                    showAlert('Invalid Email or Password. Please try again.');
                    ;
                }
            } else {
                showAlert("Error: " . mysqli_error($conn));
            }
        }
    }
    mysqli_close($conn);
    ?>

    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>