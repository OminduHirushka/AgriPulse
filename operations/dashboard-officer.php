<?php
session_start();
require_once '../dbConnection.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    header("Location: ../officerlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | Dashboard - Field Officer</title>

    <!--css-->
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/style.css">

    <?php
    include '../includes/header.php';
    ?>
</head>

<body>
    <div class="main">
        <?php
        include 'includes/officerNavbar.php';
        ?>

        <div class="container">
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
                        <th scope="col">Operations</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $sql = "SELECT * FROM officer WHERE email='$email'";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['Officer_ID'];
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

                                    <td>
                                        <button type="button" class="btn btn-outline-info btn-sm mb-1"><a href="officer-update.php?updatedid=' . $id . '" class="text-dark">Update</a></button>
                                    </td>
                                </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>