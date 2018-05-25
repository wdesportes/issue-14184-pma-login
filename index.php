<?php
require_once("head.php");

if (isset($_SESSION["user"])) {
    ?>
    <h1>Bienvenue !</h1>
    <a href="logout.php">Logout</a>
    <?php
} else {
    header('Location: login.php');
    exit(0);
}
