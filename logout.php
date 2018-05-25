<?php
require_once("head.php");

if (isset($_SESSION["user"])) {
    session_destroy();
    header('Location: login.php');
    exit(0);
} else {
    echo "Not logged in !";
}
