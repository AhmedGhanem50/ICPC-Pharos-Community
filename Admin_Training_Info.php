<?php
require "includes/adminTraining_info_view.inc.php";
require "includes/adminTraining_info.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- essential links-->
    <link rel="stylesheet" href="css\navbar.css">

    <title>Admin Training</title>
    <link rel="stylesheet" href="css\Admin.css" />
</head>

<body>
    <?php require "navbar.php"; ?>

    <div class="AP_title">
        <span class="AP_title_span">Admin Training </span>
    </div>
    <div class="container">
        <div class="card two-thirds">
            <div class="card-section">
                <form action="includes/adminTraining_info.inc.php" method="post">
                    <div class="row">
                        <div class="col">
                            <input name="added_problem_name" type="text" placeholder="Problem Name" />
                        </div>

                    </div>
                    <div class="row">

                        <div class="col">
                            <input name="added_problem_link" type="text" placeholder="Problem Link" />
                        </div>
                    </div>
                    <div class="col">
                        <form>
                            <button name="add_problem_button">Add Problem</button>
                    </div>
                </form>
            </div>
            <div class="card-section">
                <form action="includes/adminTraining_info.inc.php" method="post">
                    <div class="row">
                        <div class="col">
                            <input name="deleted_problem_name" type="text" value="demo problem name" readonly />
                        </div>
                        <div class="col">
                            <button name="delete_problem_button">Delete</button>
                        </div>
                    </div>
                </form>
                <?php display_training_problems(); ?>
            </div>
        </div>
        <div class="card one-third">
            <div class="card-section">
                <form action="includes/adminTraining_info.inc.php" method="post">
                    <input name="added_student_name" type="text" placeholder="Student Name" />
                    <button name="add_student_button">Add Student</button>
                </form>
            </div>
            <div class="card-section">
                <form action="includes/adminTraining_info.inc.php" method="post">
                    <div class="row">
                        <div class="col">
                            <input name="kicked_student_name" type="text" value="Student Name" readonly />
                        </div>
                        <div class="col">
                            <button name="kick_student_button">Kick</button>
                        </div>
                    </div>
                </form>
                <?php display_training_students(); ?>

            </div>
        </div>
    </div>
</body>

</html>