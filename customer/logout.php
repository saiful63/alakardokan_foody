<?php


session_start();
session_destroy();
header('location:../customer-registration.php');

?>