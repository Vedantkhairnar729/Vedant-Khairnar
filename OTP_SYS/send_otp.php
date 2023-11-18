<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $otp = rand(1000, 9999); // Generate a 4-digit OTP

    $conn = new mysqli("localhost", "your_username", "your_password", "otp_verification_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (email, otp) VALUES ('$email', $otp)";
    
    if ($conn->query($sql) === TRUE) {
        // Send the OTP to the user's email (you can use a library like PHPMailer here).
        session_start();
        $_SESSION["email"] = $email;

        echo "OTP sent to your email. <a href='verify_otp.php'>Verify OTP</a>";
    } else {
        echo "Failed to send OTP. Please try again.";
    }

    $conn->close();
}
?>
