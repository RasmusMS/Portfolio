<?php
session_start();
require 'includes/protect.php';
?>

<div class="container">
    <div class="loginBox p-4 shadow-sm">
        <h3>Tilføj et nyt projekt.</h3>
        <form class="form-group" action="handlers/project/addProject.php" method="POST" id="projectForm"
              enctype="multipart/form-data">
            Overskrift:
            <input class="form-control" type="text" placeholder="Indsæt overskrift" name="headline" id="headline">
            Upload billede:<br>
            <input class="" type="file" name="picture" id="picture"><br>
            Kort beskrivelse: <br>
            <div class="md-form amber-textarea active-amber-textarea">
                <textarea id="form19 shortdescription" class="md-textarea form-control" name="shortdescription" form="projectForm" rows="3"></textarea>
            </div>
            Lang beskrivelse: <br>
            <div class="md-form amber-textarea active-amber-textarea">
                <textarea id="form19 longdescription" class="md-textarea form-control" name="longdescription" form="projectForm" rows="3"></textarea>
            </div>
        </form>
        <!--            <textarea class="form_control" name="description" id="description" form="projectForm"></textarea><br>-->
        <button class="btn btn-primary mt-4" form="projectForm">Tilføj</button>
    </div>
</div>