<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["otp"])) {
    $enteredOTP = $_POST["otp"];
    $storedOTP = $_SESSION["otp"];
    $email = $_SESSION["email"];

    if ($enteredOTP == $storedOTP) {
        echo "OTP verified successfully for email: $email";
        // You can mark the email as verified in your database.
        // Unset the session variables to prevent reuse of the OTP.
        unset($_SESSION["otp"]);
        unset($_SESSION["email"]);
    } else {
        echo "Invalid OTP. Please try again.";
    }
} else {
    echo "OTP verification failed.";
}
?>
