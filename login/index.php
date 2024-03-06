<?php
ob_start();
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    //user logged in
    header("location:/BurgerOrderingSystem/");
    exit();
} else {
    //user was not logged in
    header("location:/BurgerOrderingSystem/login/login.php");
    exit();
}	
	