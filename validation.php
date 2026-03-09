<?php 
session_start();

if(isset($_POST["email"], $_POST["password"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];

    header("location: page.php");
}else {
    header("location: login.php?erro");
}