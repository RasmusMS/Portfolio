<?php

if(!isset($_SESSION['user']) or $_SESSION['user'] == '') {
    // session isn't started
    header('location: index.php?page=login');
}