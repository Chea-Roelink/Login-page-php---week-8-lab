<?php
session_start();
$username = $_SESSION["username"];
$password = $_SESSION["password"];

if ($username == "admin" && $password == "password123") {
    $_SESSION["user"] = $username;
    header("Location: welcome.php");
} else {
    echo "Invalid Login. <a href='login.html'>Try again?<a/>";
}
?>

