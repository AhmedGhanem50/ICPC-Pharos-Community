<?php
require_once "dbh.inc.php";
require_once "config_session.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['home'])) {
        header("Location: ../index.php");
    } elseif (isset($_POST['trainings'])) {
        header("Location: ../Trainings.php");
    } elseif (isset($_POST['about_us'])) {
        header("Location: ../About_Us_Page.php");
    } elseif (isset($_POST['cart'])) {
        if (empty($_SESSION["user_id"])) {
            header("Location: ../login.php");
        } else {
            header("Location: ../cart.php");
        }
    } elseif (isset($_POST['profile'])) {
        if (empty($_SESSION["user_id"])) {
            header("Location: ../login.php");
        } else if ($_SESSION["user_isadmin"] == '1') {
            header("Location: ../Admin_Profile.php");
        } else if ($_SESSION["user_isadmin"] == '0') {
            header("Location: ../User_Profile.php");
        }
    }
}