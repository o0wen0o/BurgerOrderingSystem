<!DOCTYPE html>
<html>
<head>
    <title>Burger Royale</title>
    <link rel="stylesheet" href="style/homepage.css">
</head>
<body>

<?php include('./includes/header.php'); ?>

<div class="container-fluid mb-5">
    <div class="container">

        <!-- Slider -->
        <div class="row">
            <div id="HomepageSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <a href="menu/index.php"><img src="images/homepage/Slider_Arabian.png" class="d-block w-100"
                                                      alt="Whole Chiken Pre-order"></a>
                    </div>

                    <div class="carousel-item" data-bs-interval="5000">
                        <a href="menu/index.php"><img src="images/homepage/Slider_Wholechicken.png"
                                                      class="d-block w-100" alt="Family Package"></a>
                    </div>

                    <div class="carousel-item" data-bs-interval="5000">
                        <a href="menu/index.php"><img src="images/homepage/Slider_Ramadhan.png" class="d-block w-100"
                                                      alt="Ramadhan Special"></a>
                    </div>

                    <div class="carousel-item" data-bs-interval="5000">
                        <a href="menu/index.php"><img src="images/homepage/Slider_Family.png" class="d-block w-100"
                                                      alt="Family Package"></a>
                    </div>

                    <div class="carousel-item" data-bs-interval="5000">
                        <a href="menu/index.php"><img src="images/homepage/Slider_Bf.png" class="d-block w-100"
                                                      alt="Breakfast"></a>
                    </div>

                    <div class="carousel-item" data-bs-interval="5000">
                        <a href="menu/index.php"><img src="images/homepage/Slider_Burger.png" class="d-block w-100"
                                                      alt="Burger"></a>
                    </div>

                    <div class="carousel-item" data-bs-interval="5000">
                        <a href="menu/index.php"><img src="images/homepage/Slider_Marqueemain.png" class="d-block w-100"
                                                      alt="Marqueemain"></a>
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#HomepageSlider"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#HomepageSlider"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Story -->
        <br>
        <div class="row1">
            <img src="images/homepage/story.png" alt="Our Story">
            <div class="overlay">
                <h3>Our Story</h3>
                <h4>No. 1 Burger Shop in Malaysia</h4>
                <br>
                <button onclick="window.location.href='about/index.php';">Read Our Story</button>
            </div>
        </div>

        <!-- DownloadApp -->
        <br>
        <div class="row2">
            <img src="images/homepage/downloadApp.png" alt="Our Story">
            <div class="overlay">
                <h5>Burger Royale is now on the app</h5>
                <h6>Download it now for better experience.</h6>
                <br>
                <button id="downloadGooglePlay" onclick="window.open('https://play.google.com')"></button>
                <button id="downloadAppStore" onclick="window.open('https://apps.apple.com')"></button>
                <button id="downloadHuawei" onclick="window.open('https://appgallery.huawei.com')"></button>
            </div>
        </div>
    </div>
</div>


<?php include('./includes/footer.php'); ?>

</body>
</html>