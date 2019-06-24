<?php
include_once 'includes/showProjects.php';

//    var_dump($projects);

?>
<main role="main">
    <div class="album py-5 bg-light">
        <div class="container">
            <?php
            for($i = 0; $i <= count($projects); $i++) {
                echo $projects[$i];
            }
            ?>
        </div>
    </div>
</main>