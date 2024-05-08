<?php
session_start();
require_once '../dbConnection.php';

function showAlert($message) {
    echo '<script>alert("' . $message . '");</script>';
}

if (isset($_GET['deletedid'])) {
    $id = $_GET['deletedid'];

    $sql = "DELETE FROM reply WHERE Reply_ID = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        showAlert("Succefully Deleted!");
        header("Location: reply-panel.php");
    } else {
        echo mysqli_error($conn);
    }
}
?>