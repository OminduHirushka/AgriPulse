<?php
session_start();
require_once '../dbConnection.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    header("Location: ../farmerlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | Sent Inquiries</title>

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
            <?php
            include 'includes/farmerSidemenu.php';
            ?>

            <div class="column2">
                <div class="topic">
                    <h4 class="mt-1 mb-4 pb-1">Sent Inquiries</h4>
                </div>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Query_ID</th>
                            <th scope="col">Sender's Name</th>
                            <th scope="col">Sender's Email</th>
                            <th scope="col">Sender's Mobile</th>
                            <th scope="col">Messsage</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        $sql = "SELECT * FROM inquiries WHERE email='$email'";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['Query_ID'];
                                $uname = $row['name'];
                                $email = $row['email'];
                                $mobile = $row['contact'];
                                $msg = $row['message'];

                                echo '
                                    <tr>
                                        <th scope="row">' . $id . '</th>
                                        <td>' . $uname . '</td>
                                        <td>' . $email . '</td>
                                        <td>' . $mobile . '</td>
                                        <td>' . $msg . '</td>
                                    </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <button class="btn btn btn-success btn-block fa-lg mb-3"><a href="#"
                        class=text-light>Contact an Field-Officer</a>
                </button>
            </div>
        </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>