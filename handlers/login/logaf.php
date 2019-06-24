<?php
session_start();
$_SESSION['user'] = '';
unset($_SESSION['user']);
$_SESSION = [];

header('location: ../../index.php');