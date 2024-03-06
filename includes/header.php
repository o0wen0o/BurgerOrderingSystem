<?php
session_start();
$basePath = "http://localhost/BurgerOrderingSystem/";
set_include_path("../");
?>

<link href="<?php echo $basePath ?>style/bootstrap-5.3.0-alpha3/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $basePath ?>style/style.css" rel="stylesheet">
<script src="<?php echo $basePath ?>style/bootstrap-5.3.0-alpha3/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $basePath ?>style/js/jquery-3.6.0.js"></script>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow">
        <!-- offcanvas button -->
        <button class="btn navbar-toggler-icon ms-5 position-absolute" id="offcanvasBtn" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        </button>

        <!-- navigation bar -->
        <div class="container-fluid d-flex" style="width: 900px">
            <!-- logo -->
            <a class="navbar-brand" href="<?php echo $basePath ?>">
                <img src="<?php echo $basePath ?>images/icon/logo_BurgerKing.png" alt="logo_BurgerKing"
                     width="50" height="50">
            </a>

            <!-- home, promotion, menu -->
            <ul class="navbar-nav nav-underline me-auto">
                <li class="nav-item"><a class="nav-link ms-2" aria-current="page"
                                        href="<?php echo $basePath ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link ms-2" href="<?php echo $basePath ?>promotion/">Promotion</a>
                </li>
                <li class="nav-item"><a class="nav-link ms-2" href="<?php echo $basePath ?>menu/">Menu</a></li>
            </ul>

            <ul class="navbar-nav nav-underline">
                <!-- search -->
                <li class="align-self-center">
                    <form class="d-flex align-items-center" action="<?php echo $basePath ?>search/" method="post">
                        <input class="form-control" placeholder="Search" name="search" style="border: none">
                        <button type="submit" class="btn">
                            <img type="submit" src="<?php echo $basePath ?>images/icon/icon_search.png"
                                 alt="icon_search"
                                 width="25" height="25">
                        </button>
                    </form>
                </li>

                <!-- login -->
                <?php
                if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
                    echo '<li class="nav-item"><a class="nav-link" href="' . $basePath . 'login/logout.php">'
                        . '<img src="' . $basePath . 'images/icon/icon_login.png" alt="icon_login" height="15">'
                        . 'Logout</a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" href="' . $basePath . 'login/login.php">'
                        . '<img src="' . $basePath . 'images/icon/icon_login.png" alt="icon_login" height="15">'
                        . 'Login</a></li>';
                }
                ?>

                <!-- cart -->
                <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#cartModal_1">
                        <img src="<?php echo $basePath ?>images/icon/icon_cart.png" alt="icon_cart" height="15">
                        Cart</a></li>
            </ul>
        </div>
    </nav>

    <!-- add to cart modal -->
    <?php include('cart/cartModal.php'); ?>
    <script src="<?php echo $basePath ?>cart/cartModal.js"></script>

    <!-- offcanvas -->
    <?php include('includes/offcanvas.php'); ?>

</header>
<br><br><br><br>