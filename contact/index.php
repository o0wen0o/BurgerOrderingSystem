<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <title>Contact Us</title>
    <link rel="stylesheet" href="../style/contact.css">
</head>

<body>

<?php include('../includes/header.php'); ?>

<div class="container-fluid mb-5" style="width: 900px">

    <div class="contactUs-main">
        <div class="contactus-content">
            <h1>Contact Us</h1>

            <div class="contactUs-title">
                <p>If you have any enquires, please don’t hesitate to contact us. You’ll hear from us shortly. <br>
                    Thank you for your patience.</p>
                <br/>
                <form action="sendmsg.php">
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email" placeholder="e.g. abc@gmail.com" required><br>
                    <label for="message">Message:</label><br>
                    <input type="text" id="message" name="message" placeholder="Enter your message here.." required><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        <div class="contactUs-bottom">
            <div class="contactUs-container">
                <img src="../images/contact/logo_email.png">
                <p>info@burgerroyal.com<br>
                    Reply within one business day</p>
            </div>
            <div class="contactUs-container">
                <img src="../images/contact/logo_Whatsapp.png">
                <p>012-345 6789</p>
            </div>
            <div class="contactUs-container">
                <img src="../images/contact/logo_location.png">
                <p>
                    Lot 1-23, Jalan Bukit Bintang, 55100,<br>
                    Kuala Lumpur, Wilayah Persekutuan <br>
                    Kuala Lumpur. <br>
                    Operation Hour: 10am - 9pm <br>
                    (Monday - Sunday)
                </p>
            </div>
        </div>
    </div>
</body>

<?php include('../includes/footer.php'); ?>

</html>