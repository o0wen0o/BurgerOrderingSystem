<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>

<?php include('../includes/header.php'); ?>

<div class="container-fluid mb-5" style="width: 900px">

    <br><br><br>
    <h1>Register</h1>
    <br><br>

    <form action="addNewClient.php" method="post" id="registerForm">
        <div class="wrapper">
            <div class="container1">
                <h3 class="header">New to us? Please register</h3><br>
                <label for="username">Username</label>
                <input type="text" placeholder="Enter Username" name="username" id="username" required>
                <br>

                <label for="email">Email</label>
                <input type="email" placeholder="Enter Email" name="email" id="email" required>
                <br>

                <label for="password">Password</label>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>
                <br><br><br>

                <button type="submit" class="loginFormBtn">Register</button>
            </div>
        </div>
    </form>

</div>
<?php include('../includes/footer.php'); ?>

</body>
</html>