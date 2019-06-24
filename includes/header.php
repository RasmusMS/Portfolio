<?php
session_start();
include 'settings.php';
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Rasmus Marnil Sørensen">
    <title>Portfolio</title>
    <link rel="stylesheet" href="vendors/Bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styling.css">
</head>
<body>
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-dark border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal text-light">Portfolio - Rasmus Marnil Sørensen</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-light" href="index.php?page=frontpage">Forside</a>
                <a class="p-2 text-light" href="index.php?page=info">Hvem er jeg?</a>
                <a class="p-2 text-light" href="index.php?page=projects">Projekter</a>
                <a class="p-2 text-light" href="index.php?page=contact">Kontakt</a>
                <?php
                if(isset($_SESSION['user'])) {
                    echo "<a class=\"p-2 text-light\" href=\"handlers/login/logaf.php\">Log af</a>";
                }
                ?>
            </nav>
            <a class="btn btn-outline-primary" href="index.php?page=administration">Admin</a>
        </div>
    </header>