<?php
session_start();
if (isset($_SESSION["user"])) {
    echo"Welcome, " . $_SESSION["user"];
} else {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html>
    <body>
        <?php include 'header.inc'; ?>
        <?php include 'footer.inc'; ?>
    </body>
</html>