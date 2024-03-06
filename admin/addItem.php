<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title>
</head>
<body>

<?php include('../includes/header.php'); ?>

<div class="container-fluid mb-5" style="width: 900px">
    <h2>Add Item</h2>

    <form action="addNewItem.php" method="post">

        <label for="item_type">Item Type:</label>
        <select id="type" name="item_type">
            <option value="bf_limitedTimeOnly">bf_limitedTimeOnly</option>
            <option value="rg_limitedTimeOnly">rg_limitedTimeOnly</option>
            <option value="bf_boxMeals">bf_boxMeals</option>
            <option value="rg_boxMeals">rg_boxMeals</option>
            <option value="bf_burgerNTwister">bf_burgerNTwister</option>
            <option value="rg_burgerNTwister">rg_burgerNTwister</option>
            <option value="bf_beverages">bf_beverages</option>
            <option value="rg_beverages">rg_beverages</option>
        </select>
        <br><br>

        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" name="item_name">
        <br><br>

        <label for="unit_price">Unit Price:</label>
        <input type="text" id="unit_price" name="unit_price">
        <br><br>

        <label for="image_name">Image Name:</label>
        <input type="text" id="image_name" name="image_name">
        <br><br>

        <button type="submit">Add Item</button>
        <button type="reset">Reset</button>
    </form>
</div>

<?php include('../includes/footer.php'); ?>

</body>
</html>
