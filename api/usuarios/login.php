<?php

    $UsrUsr = $_POST["UsrUsr"];
    $UsrPwd = $_POST["UsrPwd"];

    header("Content-type: application/json");

    if($UsrUsr == "gustavo.exe" && $UsrPwd =="Apiapi"){
        echo json_encode(array(
            "status" => "OK",
            "payload" => array(
                "message" => "Usuario autenticado con exito."
            )
        ));
    }else{
        echo json_encode(array(
            "status" => "ER",
            "payload" => array(
                "message" => "Usuario o password incorrectos."
            )
        ));
    }
?>