<?php
session_start();
require_once '../dbConnection.php';

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
    <title>AgriPulse | Dashboard - Farmer</title>

    <!--css-->
    <link rel="stylesheet" href="../css/farmer.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/style.css">

    <?php
    include '../includes/header.php';
    ?>
</head>

<body>
    <div class="main">
        <?php
        include 'includes/farmerNavbar.php';
        ?>

        <div class="container">
            <div class="column1">
                <div class="hamburger-menu">
                    <input id="menu_toggle" type="checkbox" />
                    <label class="menu_btn" for="menu_toggle">
                        <span></span>
                    </label>

                    <ul class="menu_box">
                        <br>
                        <li><a class="menu_item" href="#">Your Informations</a></li>
                        <li><a class="menu_item" href="#">Sent Inqueries</a></li>
                        <li><a class="menu_item" href="#">Received Replies</a></li>
                        <br><br><br><br><br><br><br><br><br>
                        <li><a class="menu_item" href="dashboard-farmer.php">Dashboard</a></li>
                    </ul>
                </div>
            </div>

            <div class="column2">
                <div class="topic">
                    <h4 class="mt-1 mb-4 pb-1">User Details</h4>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Your_ID</th>
                            <th scope="col">FirstName</th>
                            <th scope="col">LastName</th>
                            <th scope="col">UserName</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">District</th>
                            <th scope="col">Password</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $sql = "SELECT * FROM farmars WHERE email='$email'";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['Farmer_ID'];
                                $fname = $row['fname'];
                                $lname = $row['lname'];
                                $uname = $row['uname'];
                                $email = $row['email'];
                                $mobile = $row['mobile'];
                                $district = $row['district'];
                                $pass = $row['pass'];

                                echo '
                                    <tr>
                                        <th scope="row">' . $id . '</th>
                                        <td>' . $fname . '</td>
                                        <td>' . $lname . '</td>
                                        <td>' . $uname . '</td>
                                        <td>' . $email . '</td>
                                        <td>' . $mobile . '</td>
                                        <td>' . $district . '</td>
                                        <td>' . $pass . '</td>
                                    </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>