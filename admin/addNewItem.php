<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $item_type = $_POST['item_type'];
    $item_name = $_POST['item_name'];
    $unit_price = $_POST['unit_price'];
    $image_name = $_POST['image_name'];

    // Open database connection
    $host = 'localhost';
    $user = 'root';
    $password = '123456';
    $dbname = 'burger_shop_db';

    $conn = mysqli_connect($host, $user, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into database
    $sql = "INSERT INTO menu (item_type, item_name, unit_price, image_name) VALUES ('$item_type', '$item_name', $unit_price, '$image_name')";
    $result = mysqli_query($conn, $sql);

    // Close database connection
    mysqli_close($conn);

    header('Location: addItem.php');
    exit();
} else {
    /*
    REQUEST_METHOD is GET, display the form.
    */
}
?>
