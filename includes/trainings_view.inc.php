<?php
declare(strict_types=1);

function training_card($training)
{
    return '
        <div class="TP_Card">
            <div class="TP_Card_Upper">
                <p class="TP_Card_Title">
                    ' . $training['title'] . '
                </p>
            </div>
            <div class="TP_Card_Lower">
                <span class="TP_Card_Info">
                    <span class="TP_Card_Topics">
                        <p>Topics</p>
                        ' . $training['topics'] . '
                    </span>
                    <span class="TP_Card_Problems">
                        <p>Problems</p>
                        ' . $training['problems'] . '
                    </span>
                </span>
                <span class="TP_Card_Enroll">
                    <a href="contest.html" target="_blank" class="TP_Card_Button">
                        <button type="submit" class="TP_Card_Button">Join</button>
                    </a>
                </span>
            </div>
        </div>
    <br>
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