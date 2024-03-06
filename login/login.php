<!DOCTYPE html>
<html>
<head>
    <title>Burger Royale</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>

<?php
ob_start();
include('../includes/header.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST["email"];
    $password = md5(trim($_POST["password"]));

    if (empty($email)) {
        echo "Enter the email";

    } elseif (empty($password)) {
        echo "Enter the password";

    } else {
        $conn = new mysqli('localhost', 'root', '123456', 'burger_shop_db');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM client WHERE email='$email' AND password='$password'";

        $result = $conn->query($sql);

        if (mysqli_num_rows($result) === 1) {
            $row = $result->fetch_assoc();

            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                header('Location: /BurgerOrderingSystem/login/index.php');
                exit();
            }
        } else {
            echo "
            <script>
                alert('Incorrect email/password');
            </script>";
        }
    }
}
?>

<div class="container-fluid mb-5" style="width: 900px">
    <h1>Login</h1><br><br>
    <form action="login.php" method="post" id="loginForm">
        <div class="wrapper">
            <div class="container1">
                <h3 class="header">Good to see you again</h3><br>
                <div class="input">
                    <label for="email">Email: </label>
                    <input type="email" placeholder="Enter Email" name="email" id="email" required>
                    <br>

                    <label for="password">Password: </label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" required>
                    <br><br><br>

                    <button type="submit" class="loginFormBtn">Login</button>
                    <br><br>
                </div>

                <div class="container2">
                    <div class="new">
                        <p>New to us?</p>
                    </div>
                    <div class="button">
                        <a href="../login/register.php">
                            <button type="button" class="loginFormBtn signUpBtn">Sign Up</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<?php include('../includes/footer.php'); ?>

</body>
</html>