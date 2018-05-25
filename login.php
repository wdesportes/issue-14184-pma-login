<?php
require_once("head.php");

if (isset($_POST["user"])) {// Set a value and redirect to index
    $_SESSION["user"] = true;
    header('Location: index.php');
    exit(0);
}

if (isset($_SESSION["user"])) {
    ?>
    <h1>Already logged in !</h1>
    <a href="logout.php">Logout</a>
    <?php
} else {
    ?>
    <h1>Login</h1>
    <?php
}
?>
    <form method="POST">
        <input name="user" type="text" /><br />
        <input name="password" type="text" /><br />
        <input value="Login !" type="submit" />
    </form>