<?php
session_start();
if (isset($_SESSION['email']) || isset($_SESSION['id']) || isset($_SESSION['type']) || isset($_SESSION['name'])) {
    header("refresh: 300; login/logout.php");
} else {
    header("location: login/login.php");
}
?>