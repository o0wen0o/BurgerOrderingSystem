<?php
$basePath = "http://localhost/BurgerOrderingSystem/";
?>
<footer>
    <div class="container-fluid border-top pt-5 pb-5" style="width: 900px">
        <!-- about, contact us, terms & conditions -->
        <div class="d-flex justify-content-center">
            <a class="nav-link" href="<?php echo $basePath ?>about/">
                <h4>About</h4>
            </a>
            <a class="nav-link ms-5" href="<?php echo $basePath ?>contact/">
                <h4>Contact Us</h4>
            </a>
            <a class="nav-link ms-5" href="<?php echo $basePath ?>term_condition/">
                <h4>Terms & Conditions</h4>
            </a>
        </div>

        <!-- Social media -->
        <div class="d-flex justify-content-center mt-5">
            <?php include('includes/social_media.php'); ?>
        </div>

        <!-- Payment -->
        <div class="d-flex justify-content-center mt-3">
            <div class="align-middle pe-sm-3">Secure Payment</div>
            <div>
                <?php include('includes/payment.php'); ?>
            </div>
        </div>

        <!-- info -->
        <div class="d-flex justify-content-center mt-3">
            Terms of Use &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; Privacy Policy &nbsp;&nbsp;&nbsp; |
            &nbsp;&nbsp;&nbsp; &copy; Copyright 2023 Burger Royale Sdn. Bhd.
        </div>
    </div>
</footer>