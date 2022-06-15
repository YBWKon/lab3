<?php

$_SESSION["userName"] = $_POST["userName"];
$_SESSION["userSurname"] = $_POST["userSurname"];
$_SESSION["userAge"] = $_POST["userAge"];


if (isset($_SESSION["userName"]) && isset($_SESSION["userSurname"]) && isset($_SESSION["userAge"])) {
    echo "Welcome, {$_SESSION['userName']} {$_SESSION['userSurname']}({$_SESSION['userAge']} years old) ";
}