<?php
require_once 'connectToDB.php';
$conn = db_connect();

$query = "SELECT id, Headline, Description, Picture FROM Project;";

$result = $conn->query($query);
$project = "";
$projects = array();
$e = 2;

while($row = $result->fetch_assoc()){
    $Id = $row['id'];
    $Headline = $row['Headline'];
    $Description = $row['Description'];
    $Picture = $row['Picture'];

    if($e % 2 == 0) {
        $project = "<div class=\"row\">";
        $project .= "<div class=\"col-md-6\">";
    }
    else {
        $project = "<div class=\"col-md-6\">";
    }

    $project .= "<div class=\"card mb-4 shadow-sm p-2\">";
    $project .= "<img class=\"card-img-top\" src=\"uploads/$Picture\">";
    $project .= "<div class=\"card-body\">";
    $project .= "<h3 class=\"card-title\">$Headline</h3>";
    $project .= "<p class=\"card-text\">$Description</p>";
    $project .= "<div class=\"d-flex justify-content-between align-items-center\">";
    $project .= "<div class=\"btn-group\">";
    $project .= "<a href=\"index.php?page=project&id=$Id\" class=\"btn btn-sm btn-outline-secondary\">View</a>";
    $project .= "</div>";
    $project .= "</div>";
    $project .= "</div>";
    $project .= "</div>";

    if($e % 2 == 0) {
        $project .= "</div>";
    }
    else {
        $project .= "</div>";
        $project .= "</div>";
    }
    $e++;
    array_push($projects, $project);
}

