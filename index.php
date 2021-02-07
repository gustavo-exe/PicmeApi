<?php
    
    header("Content-type: application/json");

    $data = array(
        "server" => array(
            "dsc" => "Api Server App movil 2",
            "ver" => "0.0.1"
        )
    );

    echo json_encode($data);
?>