<?php
require_once("includes/trainings_view.inc.php");
require("includes/trainings.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trainings_Page</title>
    <link rel="stylesheet" href="css/trainings.css">
</head>

<body class="TP_Body">
    <div class="TP_Tiltle">
        ICPC Trainings
    </div>
    <div class="TP_Page">
        <?php display_trainings(); ?>
    </div>

</body>

</html>