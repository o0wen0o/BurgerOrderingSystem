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
            <li class="breadcrumb-item"><a href="../">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Menu</li>
        </ol>
    </nav>

    <!-- title and switch button -->
    <div class="d-flex">
        <span class="fs-2 fw-bold me-auto">MENU</span>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

            <!-- two radio switch breakfast and regular -->
            <input type="radio" class="btn-check" name="btnRadio" id="breakfastRadio" autocomplete="off" checked>
            <label class="btn btn-outline-danger rounded-start-5 d-flex flex-row" for="breakfastRadio"
                   style="width: 150px">
                <img src="../images/icon/icon_coffee.png" alt="icon_coffee" height="25">
                <div>
                    <div style="font-weight: bold">&nbsp;&nbsp;Breakfast</div>
                    <div style="font-size: 10px">Before 10:00AM</div>
                </div>
            </label>

            <input type="radio" class="btn-check" name="btnRadio" id="regularRadio" autocomplete="off">
            <label class="btn btn-outline-danger rounded-end-5 d-flex flex-row" for="regularRadio" style="width: 150px">
                <img src="../images/icon/icon_burger.png" alt="icon_burger" height="25">
                <div>
                    <div style="font-weight: bold">&nbsp;&nbsp;Regular</div>
                    <div style="font-size: 10px">After 10:00AM</div>
                </div>
            </label>

        </div>
    </div>

    <!-- navigation bar for menu -->
    <nav class="navbar sticky-top bg-body-tertiary shadow-sm mt-sm-3" id="navbarMenu">
        <ul class="nav nav-pills nav-fill">
            <li><a class="nav-link active" href="#limitedTimeOnly">Limited Time Only</a></li>
            <li><a class="nav-link" href="#boxMeals">Box Meals</a></li>
            <li><a class="nav-link" href="#burgerNTwister">Burger & Twister</a></li>
            <li><a class="nav-link" href="#beverages">Beverages</a></li>
        </ul>
    </nav>

    <!-- retrieve menu -->
    <?php include('retrieveMenu.php'); ?>

    <!-- add to cart modal -->
    <?php include('../cart/addToCartModal.php'); ?>

</div>

<?php include('../includes/footer.php'); ?>

<script src="radioEvent.js"></script>
<script src="../cart/addToCartModal.js"></script>

</body>
</html>