<?php
require_once '../dbConnection.php';
?>

<?php
if (isset($_POST['support-btn'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $msg = $_POST["problem"];

    $recipient = "ominduhirushka7@gmail.com";
    $subject = "New Inquiry from $name";
    $header = "From: $email\r\n";
    $email_content = "Name: $name\nEmail: $email\nMessage:\n$msg";

    if (mail($recipient, $subject, $email_content, $header)) {

        $sql = "INSERT INTO inquiries (name, email, contact, message) VALUES ('$name', '$email','$mobile', '$msg')";

        if (mysqli_query($conn, $sql)) {
            header("Location: ../operations/farmer-sent.php");
            exit();
        } else {
            header("Location: ../operations/dashboard-farmer.php");
        }
    }
}
?>