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
                <h4 class="mt-1 mb-4 pb-1">Sent Replies</h4>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Reply_ID</th>
                        <th scope="col">Sender's Email</th>
                        <th scope="col">Sender's Mobile</th>
                        <th scope="col">Receiver's Email</th>
                        <th scope="col">Messsage</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $sql = "SELECT * FROM reply";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['Reply_ID'];
                            $senderE = $row['sender'];
                            $senderM = $row['sender_mobile'];
                            $receiver = $row['receiver'];
                            $message = $row['message'];
                            echo '
                                <tr>
                                    <th scope="row">' . $id . '</th>
                                    <td>' . $senderE . '</td>
                                    <td>' . $senderM . '</td>
                                    <td>' . $receiver . '</td>
                                    <td>' . $message . '</td>
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