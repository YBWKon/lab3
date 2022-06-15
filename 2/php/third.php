<?php
session_start();
if (isset($_REQUEST['submit'])) {
    $_SESSION = $_GET;
}
if (!empty($_SESSION)) {
    foreach($_SESSION as $key => $value) {
        if($key != "submit")
            echo "$key = " . $value . "<br>";
    }
    session_destroy();
}