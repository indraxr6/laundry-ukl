<?php
session_start();
unset($_SESSION["nama"]);
unset($_SESSION["id"]);
unset($_SESSION["status_login"]);
header("location: ./login.php");
?>