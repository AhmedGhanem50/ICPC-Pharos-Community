<?php
require_once "includes/config_session.inc.php";
$log;
if (isset($_SESSION["user_username"])) {
    $log = $_SESSION["user_username"];
} else {
    $log = "Login";
}
?>
<nav>
    <div class="logo">
        <a href="index.php"><img src="img\ICPC Logo no background.png" alt="logo">ICPC Pharos</a>
    </div>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="nav-bar">
        <form class="navform" method="post" action="includes/navigate.inc.php">
            <button class="navbutton" name="home">
                Home
            </button>
            <button class="navbutton" name="trainings">
                Trainings
            </button>
            <button class="navbutton" name="about_us">
                About us
            </button>
            <button class="navbutton" name="cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </button>
            <button class="navbutton active" name="profile">
                <?php echo $log; ?>
            </button>
        </form>
    </div>
</nav>
<script src="js\Navbar.js"></script>
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/39da319607.js" crossorigin="anonymous"></script>