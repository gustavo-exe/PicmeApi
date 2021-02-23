<?php
    
    header("Content-type: application/json");

    session_start();

    $data = array(
        "server" => array(
            "dsc" => "Api Server App movil 2",
            "ver" => "0.0.1",
            "usr" => isset($_SESSION['UsrUsr'])?$_SESSION['UsrUsr']:"No autorizado."
        )
    );

    echo json_encode($data);
?>