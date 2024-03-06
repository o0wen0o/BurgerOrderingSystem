<!DOCTYPE html>
<html>
<head>
    <title>Log Out</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>

<?php

include('../includes/header.php');

session_unset();
session_destroy();
?>


<div class="container-fluid mb-5" style="width: 900px">
    <img src="../images/promotion/logout.gif" id="logout">
    <div class="container3">
        <div class="login">
            <p>Want to log in again?</p>
        </div>
        <div class="loginBtn">
            <a href="../login/login.php">
                <button type="button" class="loginFormBtn button">Login</button>
            </a>
        </div>
    </div>

</div>

<?php include('../includes/footer.php'); ?>

</body>
</html>