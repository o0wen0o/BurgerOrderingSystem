<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $isValid = true;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script> 
                window.alert('Incorrect email format');
                window.location.href= 'register.php'; 
              </script>";
        $isValid = false;
    }

    $conn = new mysqli('localhost', 'root', '123456', 'burger_shop_db');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM client ORDER BY id ASC";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($username == $row ['username'] && $email == $row['email']) {
            echo "<script> 
                    window.alert('Your username and email have been registered with other account. Please enter again.');
                    window.location.href= 'register.php'; 
                  </script>";
            $isValid = false;
        } else if ($username == $row ['username']) {
            echo "<script> 
                    window.alert('Your username have been registered with other account. Please enter again.');
                    window.location.href= 'register.php'; 
                  </script>";
            $isValid = false;
        } else if ($email == $row['email']) {
            echo "<script> 
                    window.alert('Your email have been registered with other account. Please enter again.');
                    window.location.href= 'register.php'; 
                  </script>";
            $isValid = false;
        }
    }

    if ($isValid) {
        $sql = "INSERT INTO client (email, username, password) 
        VALUES ('$email', '$username', MD5('$password'))";

        if ($conn->query($sql) === TRUE) {
            echo "<script> 
                    window.alert('New account created');
                    window.location.href= 'login.php'; 
                </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }

    $conn->close();
}
?>
