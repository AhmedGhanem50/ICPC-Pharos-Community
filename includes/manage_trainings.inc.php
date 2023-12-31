<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "dbh.inc.php";
    require_once "manage_trainings_model.inc.php";
    require_once "manage_trainings_contr.inc.php";
    require_once "config_session.inc.php";
    if (isset($_POST['add_training_button'])) {
        try {
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
    } else if (isset($_POST['add_admin_button'])) {
        try {
            $admin_email = $_POST["added_admin_email"];
            // ERROR handler
            $errors = [];
            if (is_input_empty($admin_email)) {
                $errors["add_admin_empty_input"] = "Enter the admin's E-mail!!";
            }
            if (!is_email_exist($pdo, $admin_email)) {
                $errors["add_admin_invalid_email"] = "invalid email : user doesn't exist!!";
            }
            if ($errors) {
                $_SESSION["errors_add_admin"] = $errors;
                header("Location: ../Admin.php");
                die();
            }
            // QUERY handler 
            set_admin($pdo, $admin_email);
            // empty your resources
            $pdo = null;
            $stmt = null;
            header("Location: ../Admin.php?addadmin=success");
            die();
        } catch (PDOException $e) {
            die("Query failed " . $e->getMessage());
        }
    } else {
        //no button pressed
    }
} else {
    header("Location: ../index.php");
}