<?php
declare(strict_types=1);

function problem_card($problem)
{
    return '
        <form action="includes/adminTraining_info.inc.php" method="post">
            <div class="row">
                <div class="col">
                    <input name="deleted_problem_name" type="text" value="' . $problem . '" readonly />
                </div>
                <div class="col">
                    <button name="delete_problem_button">Delete</button>
                </div>
            </div>
        </form>
    ';
}
function student_card($student)
{
    return '
        <form action="includes/adminTraining_info.inc.php" method="post">
            <div class="row">
                <div class="col">
                    <input name="kicked_student_name" type="text" value="' . $student . '" readonly />
                </div>
                <div class="col">
                    <button name="kick_student_button">Kick</button>
                </div>
            </div>
        </form>
    ';
}
function display_training_problems()
{
    if (!isset($_SESSION["all_training_problems"]) || empty($_SESSION["all_training_problems"])) {
        echo 'there is no problems';
        return;
    }
    foreach ($_SESSION["all_training_problems"] as $problem) {
        echo problem_card($problem);
    }
}
function display_training_students()
{
    if (!isset($_SESSION["all_training_students"]) || empty($_SESSION["all_training_students"])) {
        echo 'there is no students';
        return;
    }
    foreach ($_SESSION["all_training_students"] as $student) {
        echo student_card($student);
    }
}