<?php
    // Librerias
    include("../../tools/config.php");
    include("../../tools/mysql.php");
    include("../../tools/querys.php");

    session_start();

    header("Content-Type: application/json");

    // Validacion de sesión
    if(!isset($_SESSION['UsrUsr'])){
        echo json_encode(array(
            "status"=>"ER",
            "payload"=>array(
                "message"=>"Usuario no autenticado."
            )
        ));

        die();
    }
    // Limpiamos parametros
    $UsrUsr     = $_SESSION["UsrUsr"];
    $ColCod     = (isset($_POST["ColCod"]))?$_POST["ColCod"]:"";
    $FotCod     = uniqid();
    $FotFch     = date("Y-m-d", time());
    $FotPath    = "";

    $UsrUsr     = mysqli_real_escape_string($mydb, $UsrUsr);
    $ColCod     = mysqli_real_escape_string($mydb, $ColCod);
    $FotCod     = mysqli_real_escape_string($mydb, $FotCod);
    $FotFch     = mysqli_real_escape_string($mydb, $FotFch);
    $FotPath    = mysqli_real_escape_string($mydb, $FotPath);

    // Inserccion de la colección
    $pst = $mydb->prepare($querys['fotos']['1_insertar']);
    $pst->bind_param("sssss", $UsrUsr, $ColCod, $FotCod, $FotFch, $FotPath);
    $pst->execute();

    // Logica
    if($mydb->error){
        echo json_encode(array(
            "status"=>"ER",
            "payload"=>array(
                "error"=> $mydb->error,
                "message"=>"Ocurrio un error creando la colección."
            )
        ));
    }else{
        echo json_encode(array(
            "status"=>"OK",
            "payload"=>array(
                "message"=>"Foto creada."
            )
        ));
    }
?>