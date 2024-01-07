<?php
declare(strict_types=1);

function training_title_card($training)
{
    return '
        <form action="includes/admin.inc.php" method="post">
            <div class="row">
                <div class="col">
                    <input name="managed_training_title" type="text" value="' . $training["title"] . '" readonly />
                </div>
                <div class="col">
                    <button name="manage_training_button">manage</button>
                </div>
            </div>
        </form>
    ';
}
function admin_name_card($admin)
{

    return '
        <form action="includes/admin.inc.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" value="' . $admin["username"] . '" readonly />
                    <input name="removed_admin_email" type="text" value="' . $admin["email"] . '" style="display:none;"
                        readonly />
                </div>
                <div class="col">
                    <button name="remove_admin_button">Remove</button>
                </div>
            </div>
        </form>
    ';
}
function display_trainings_titles()
{
    if (!isset($_SESSION["all_trainings_titles"]) || empty($_SESSION["all_trainings_titles"])) {
        echo 'there is no trainings';
        return;
    }
    foreach ($_SESSION["all_trainings_titles"] as $training) {
        echo training_title_card($training);
    }
}
function display_admins_names()
{
    if (!isset($_SESSION["all_admins_names"]) || empty($_SESSION["all_admins_names"])) {
        echo 'there is no admins';
        return;
    }
    foreach ($_SESSION["all_admins_names"] as $admin) {
        echo admin_name_card($admin);
    }
}
function check_addAdmins_errors()
{
    if (isset($_SESSION["errors_add_admin"])) {
        $errors = $_SESSION['errors_add_admin'];
        echo "<br>";
        foreach ($errors as $error) {
            echo '<p style="color:red;font-size:16px;">' . $error . "</p>";
        }
        unset($_SESSION['errors_add_admin']);
    } else if (isset($_GET['addadmin']) && $_GET['addadmin'] === "success") {
        echo "<br>";
        echo '<p style="color:green;font-size:16px;">Admin Added !! </p>';
    }

}
function check_addTraining_errors()
{
    if (isset($_SESSION["errors_add_training"])) {
        $errors = $_SESSION['errors_add_training'];
        echo "<br>";
        foreach ($errors as $error) {
            echo '<p style="color:red;font-size:16px;">' . $error . "</p>";
        }
        unset($_SESSION['errors_add_training']);
    } else if (isset($_GET['addtraining']) && $_GET['addtraining'] === "success") {
        echo "<br>";
        echo '<p style="color:green;font-size:16px;">Training Added !! </p>';
    }

}