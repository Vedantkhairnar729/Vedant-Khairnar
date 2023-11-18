<?php
namespace Phppot;

require_once __DIR__ . "/class/Member.php";

use Phppot\Member;
if (! empty($_POST["login"])) {
    session_start();

    $member = new Member();
    $isLoggedIn = $member->loginMember();
    if (! $isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }
    header("Location: ./index.php");
    exit();
}
?>