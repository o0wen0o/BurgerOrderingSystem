<?php
// Create connection
$conn = new mysqli('localhost', 'root', '123456', 'burger_shop_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_bf_limitedTimeOnly = "SELECT * FROM burger_shop_db.menu WHERE item_type='bf_limitedTimeOnly'";
$sql_rg_limitedTimeOnly = "SELECT * FROM burger_shop_db.menu WHERE item_type='rg_limitedTimeOnly'";
$sql_bf_boxMeals = "SELECT * FROM burger_shop_db.menu WHERE item_type='bf_boxMeals'";
$sql_rg_boxMeals = "SELECT * FROM burger_shop_db.menu WHERE item_type='rg_boxMeals'";
$sql_bf_burgerNTwister = "SELECT * FROM burger_shop_db.menu WHERE item_type='bf_burgerNTwister'";
$sql_rg_burgerNTwister = "SELECT * FROM burger_shop_db.menu WHERE item_type='rg_burgerNTwister'";
$sql_bf_beverages = "SELECT * FROM burger_shop_db.menu WHERE item_type='bf_beverages'";
$sql_rg_beverages = "SELECT * FROM burger_shop_db.menu WHERE item_type='rg_beverages'";

$result_bf_limitedTimeOnly = $conn->query($sql_bf_limitedTimeOnly);
$result_rg_limitedTimeOnly = $conn->query($sql_rg_limitedTimeOnly);
$result_bf_boxMeals = $conn->query($sql_bf_boxMeals);
$result_rg_boxMeals = $conn->query($sql_rg_boxMeals);
$result_bf_burgerNTwister = $conn->query($sql_bf_burgerNTwister);
$result_rg_burgerNTwister = $conn->query($sql_rg_burgerNTwister);
$result_bf_beverages = $conn->query($sql_bf_beverages);
$result_rg_beverages = $conn->query($sql_rg_beverages);

$conn->close();
?>

<div data-bs-spy="scroll" data-bs-target="#navbarMenu" data-bs-root-margin="0px 0px -20%"
     data-bs-smooth-scroll="true" class="scrollspy mt-4" tabindex="0">

    <h4 id="limitedTimeOnly" class="fw-bold">Limited Time Only</h4>
    <!-- breakfast -->
    <table id="bf_limitedTimeOnly" class="mt-5">
        <?php
        for ($i = 0; $row = $result_bf_limitedTimeOnly->fetch_assoc(); $i++) {
            include('retrieveData.php');
        }
        echo "</tr>";
        ?>
    </table>
    <!-- regular -->
    <table id="rg_limitedTimeOnly" style="display: none;" class="mt-5">
        <?php
        for ($i = 0; $row = $result_rg_limitedTimeOnly->fetch_assoc(); $i++) {
            include('retrieveData.php');
        }
        echo "</tr>";
        ?>
    </table>

    <h4 id="boxMeals" class="fw-bold">Box Meals</h4>
    <!-- breakfast -->
    <table id="bf_boxMeals" class="mt-5">
        <?php
        for ($i = 0; $row = $result_bf_boxMeals->fetch_assoc(); $i++) {
            include('retrieveData.php');
        }
        echo "</tr>";
        ?>
    </table>
    <!-- regular -->
    <table id="rg_boxMeals" style="display: none;" class="mt-5">
        <?php
        for ($i = 0; $row = $result_rg_boxMeals->fetch_assoc(); $i++) {
            include('retrieveData.php');
        }
        echo "</tr>";
        ?>
    </table>

    <h4 id="burgerNTwister" class="fw-bold">Burger & Twister</h4>
    <!-- breakfast -->
    <table id="bf_burgerNTwister" class="mt-5">
        <?php
        for ($i = 0; $row = $result_bf_burgerNTwister->fetch_assoc(); $i++) {
            include('retrieveData.php');
        }
        echo "</tr>";
        ?>
    </table>
    <!-- regular -->
    <table id="rg_burgerNTwister" style="display: none;" class="mt-5">
        <?php
        for ($i = 0; $row = $result_rg_burgerNTwister->fetch_assoc(); $i++) {
            include('retrieveData.php');
        }
        echo "</tr>";
        ?>
    </table>

    <h4 id="beverages" class="fw-bold">Beverages</h4>
    <!-- breakfast -->
    <table id="bf_beverages" class="mt-5">
        <?php
        for ($i = 0; $row = $result_bf_beverages->fetch_assoc(); $i++) {
            include('retrieveData.php');
        }
        echo "</tr>";
        ?>
    </table>
    <!-- regular -->
    <table id="rg_beverages" style="display: none;" class="mt-5">
        <?php
        for ($i = 0; $row = $result_rg_beverages->fetch_assoc(); $i++) {
            include('retrieveData.php');
        }
        echo "</tr>";
        ?>
    </table>
</div>
