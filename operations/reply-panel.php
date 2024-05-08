<?php
session_start();
require_once '../dbConnection.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    header("Location: ../adminlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--title-->
    <title>AgriPulse | List of Replies</title>

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
        include 'includes/adminNavbar.php';
        ?>

        <div class="container">
            <div class="topic">
                <h4 class="mt-1 mb-4 pb-1">Reply Panel</h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Reply_ID</th>
                        <th scope="col">Sender's Email</th>
                        <th scope="col">Sender's Mobile</th>
                        <th scope="col">Receiver's Email</th>
                        <th scope="col">Messsage</th>
                        <th scope="col">Operations</th>
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
                                    <td
                                        <button type="button" class="btn btn-outline-danger btn-sm"><a href="reply-delete.php?deletedid=' . $id . '" class="text-dark">Delete</a></button>
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