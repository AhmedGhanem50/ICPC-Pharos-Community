<?php
require_once "dbh.inc.php";
require_once "adminTraining_info_model.inc.php";
require_once "adminTraining_info_contr.inc.php";
require_once "config_session.inc.php";
if (!isset($_SESSION["admin_training"]) || empty($_SESSION["admin_training"])) {
    $_SESSION["admin_training"] = $_SESSION["previous_session"]["admin_training"];
}
try {
    $_SESSION["all_training_problems"] = get_problems_names($pdo, $_SESSION["admin_training"]["id"]);
} catch (PDOException $e) {
    die("Query failed" . $e->getMessage());
}
try {
    $_SESSION["all_training_students"] = get_students($pdo, $_SESSION["admin_training"]["id"]);
} catch (PDOException $e) {
    die("Query failed" . $e->getMessage());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_training_button'])) {
        try {
            /////////////////////
            $title = $_POST['title'];
            $topics = $_POST['topics'];
            $problems = $_POST['problems'];
            $topics_titles = $_POST['topics_titles'];
            $errors = [];
            if (is_input_empty($title, $topics, $problems)) {
                $errors["add_training_empty_input"] = "Fill in ALL fields!";
            }
            if (is_title_taken($pdo, $title)) {
                $errors["taken_training_title"] = "taken training title entered!";
            }
            if ($errors) {
                $_SESSION["errors_add_training"] = $errors;
                header("Location: ../Admin.php");
                die();
            }
            add_training($pdo, $title, $topics, $problems, $topics_titles);
            $pdo = null;
            $stmt = null;
            header("Location: ../Admin.php?addtraining=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    }
}