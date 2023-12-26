<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    try {
        require_once "dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "login_contr.inc.php";
        require_once "config_session.inc.php";
        // ERROR handler
        $errors = [];
        if (is_input_empty($email, $pwd)) {
            $errors["empty_input"] = "Fill in ALL fields!";
        }
        $result = get_user($pdo, $email);
        if (is_email_wrong($result)) {
            $errors["login_incorrect"] = "Incorrect login info : user is not registered !!";
        }
        if (!is_email_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
            $errors["login_incorrect"] = "Incorrect login info : wrong password !!";
            $loginData = [
                "email" => $email,
            ];
        }
        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            header("Location: ../login.php");
            die();
        }
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);
        $_SESSION["last_regeneration"] = time();

        // empty your resources
        header("Location: ../login.php?login=success");
        $pdo = null;
        $stmt = null;
        die();
    } catch (PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
} else {
    header("Location: ../login.php");
    die();

}