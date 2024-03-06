<?php
session_start();

// action: determine the AJAX request is storing data in the session or retrieving data from session
if (isset($_POST['action'])) {
    if ($_POST['action'] == 'store') {
        $id = trim($_POST['id']);
        $quantity = trim($_POST['quantity']);

        // Store data in session
        $_SESSION['item_' . $id] = $id;
        $_SESSION['qty_' . $id] = $quantity;

        echo "Stored.\n";

    } else if ($_POST['action'] == 'retrieve') {

        // Create connection
        $conn = new mysqli('localhost', 'root', '123456', 'burger_shop_db');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // count total row
        $count_sql = "SELECT COUNT(*) FROM burger_shop_db.menu";
        $count = $conn->query($count_sql)->fetch_row()[0];

        // Retrieve data from session
        for ($i = 1; $i <= $count; $i++) {
            if (isset($_SESSION['item_' . $i])) {

                // sql to get item detail by id
                $item_sql = "SELECT * FROM burger_shop_db.menu WHERE id='$i'";
                $result = mysqli_query($conn, $item_sql);
                $item = mysqli_fetch_assoc($result);

                echo $item['image_name'] . ","
                    . $item['item_name'] . ","
                    . $_SESSION['qty_' . $i] . ","
                    . $item['unit_price'] . ","
                    . $item['id'] . "|";
            }
        }
        $conn->close();

    } else if ($_POST['action'] == 'delete') {
        $id = trim($_POST['id']);

        unset($_SESSION['item_' . $id]);
        unset($_SESSION['qty_' . $id]);
    }

} else {
    echo "No action provided.";
}

?>
