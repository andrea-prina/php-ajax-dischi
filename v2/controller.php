<?php 

    include("../database.php");

    $filteredDisks = [];

    if (!empty($_GET["genre"])){

        foreach ($disks as $disk) {
            if ($disk["genre"] === $_GET["genre"]){
                $filteredDisks[] = $disk;
            }
        };

    } else {

        $filteredDisks = $disks;
    };

    header('Content-type: application/json');

    echo json_encode($filteredDisks);

?>