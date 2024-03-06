<!DOCTYPE html>
<html>
<head>
    <title>Burger Royale</title>
</head>
<body>

<?php include('../includes/header.php'); ?>

<div class="container-fluid mb-5" style="width: 900px">
    <!-- breadcrumb -->
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="..">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Search</li>
        </ol>
    </nav>

    <!-- retrieve menu -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['search'])) {
            include "empty.php";
            exit();
        }

        $search = $_POST['search'];

        $conn = new mysqli('localhost', 'root', '123456', 'burger_shop_db');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM burger_shop_db.menu WHERE item_name LIKE '%" . $search . "%'";

        $result = $conn->query($sql);

        if ($result->num_rows == 0) {
            include "empty.php";
            exit();
        }

        $conn->close();
    }
    ?>

    <div class="container-fluid">
        <h4 class="fw-bold">Result</h4>
        <table class="mt-5">
            <?php
            for ($i = 0; $row = $result->fetch_assoc(); $i++) {
                include('../menu/retrieveData.php');
            }
            echo "</tr>";
            ?>
        </table>

        <!-- add to cart modal -->
        <?php include('../cart/addToCartModal.php'); ?>
    </div>

    <?php include('../includes/footer.php'); ?>

    <script src="../cart/addToCartModal.js"></script>

</body>
</html>