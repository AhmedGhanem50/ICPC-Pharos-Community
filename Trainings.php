<?php
require_once("includes/trainings_view.inc.php");
require("includes/trainings.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- essential links-->
    <link rel="stylesheet" href="css\navbar.css">
    <link rel="stylesheet" href="css\Footer.css">

    <title>Trainings_Page</title>
    <link rel="stylesheet" href="css\Trainings.css">
</head>

<body>
    <?php require "navbar.php"; ?>
    <div class="TP_Body">
        <div class="TP_Tiltle">
            ICPC Trainings
        </div>
        <div class="TP_Page">
            <?php display_trainings(); ?>
        </div>
    </div>
    <br>
    <br>
    <?php require "Footer.php" ?>
</body>

</html>