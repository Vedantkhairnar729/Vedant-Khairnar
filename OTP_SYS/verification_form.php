<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Email OTP Verification</title>
</head>
<body>
    <h2>Enter your email to receive OTP</h2>
    <form method="post" action="send_otp.php">
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="submit" value="Send OTP">
    </form>
</body>
</html>
