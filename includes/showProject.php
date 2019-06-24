<?php
require_once 'connectToDB.php';
$mysqli = db_connect();
$Id = $_GET['id'];

$query = "SELECT Headline, longDescription, Picture FROM Project WHERE id = $Id";

$result = $mysqli->query($query);
$row = $result->fetch_assoc();
$Headline = $row['Headline'];
$longDescription = $row['longDescription'];
$Picture = $row['Picture'];

$project = "<div class=\"p-3 mb-5 bg-white shadow rounded\">";
$project .= "<div class=\"row\">";
$project .= "<div class=\"col-lg-6 text-left\">";
$project .= "<h3>$Headline</h3>";
$project .= "<p>$longDescription</p>";
$project .= "</div>";
$project .= "<img class=\"col-lg-6 rounded\" src=\"uploads/$Picture\">";
$project .= "</div>";
$project .= "</div>";
