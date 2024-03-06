<?php
$basePath = "http://localhost/BurgerOrderingSystem/";
?>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header m-sm-2">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body ms-sm-2">
        <!-- about, contact us, terms & conditions -->
        <div>
            <a class="nav-link mt-3" href="<?php echo $basePath ?>about/">
                <h4>About</h4>
            </a>
            <a class="nav-link mt-5" href="<?php echo $basePath ?>contact/">
                <h4>Contact Us</h4>
            </a>
            <a class="nav-link mt-5" href="<?php echo $basePath ?>term_condition/">
                <h4>Terms & Conditions</h4>
            </a>
        </div>

        <!-- offcanvas bottom -->
        <div class="position-absolute bottom-0 mb-5">
            <!-- Social media -->
            <div class="border-bottom pb-4">
                <?php include("includes/social_media.php"); ?>
            </div>

            <!-- Payment -->
            <div class="pt-4">
                <div>Secure Payment</div>
                <div class="mt-3">
                    <?php include("includes/payment.php"); ?>
                </div>
            </div>

            <!-- info -->
            <div class="mt-3">Terms of Use &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; Privacy Policy</div>
            <div class="mt-sm-2">&copy; Copyright 2023 Burger Royale Sdn. Bhd.</div>
        </div>
    </div>
</div>