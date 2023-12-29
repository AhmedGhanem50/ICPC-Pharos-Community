<?php
declare(strict_types=1);

function training_card($training)
{
    return '
        <div class="TP_Card">
            <div class="TP_Card_Upper">
                <input type="text" name="" class="TP_Card_Title" value="' . $training['title'] . '">
            </div>
            <form class="TP_Card_Lower" action="includes/manage_trainings.inc.php" method="post">
                <span class="TP_Card_Info">
                    <span class="TP_Card_Topics">
                        <p>Topics</p>
                        <input type="text" name="" class="TP_Card_Info_text" value="' . $training['topics'] . '">
                    </span>
                    <span class="TP_Card_Problems">
                        <p>Problems</p>
                        <input type="text" name="" class="TP_Card_Info_text" value="' . $training['problems'] . '">
                    </span>
                </span>
                <span class="TP_Card_Enroll">
                    <a href="contest.html" target="_blank" class="TP_Card_Button">
                        <input class="TP_Card_Button" type="button" value="info">
                    </a>
                    <input class="TP_Card_Button" type="button" value="add to cart">
                </span>
            </form>
        </div>
    ';
}
function display_trainings()
{
    if (!isset($_SESSION["all_trainings"]) || empty($_SESSION["all_trainings"])) {
        echo 'there is no trainings available now!!';
        return;
    }
    foreach ($_SESSION["all_trainings"] as $training) {
        echo training_card($training);
    }
}