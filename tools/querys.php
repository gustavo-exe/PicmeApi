<?php
    $querys = array(
        "usuarios"=> array(
            "1_obtener" => "SELECT * FROM usuarios WHERE UsrUsr =?;",
            "2_insertar" => "INSERT INTO usuarios VALUES(?,?,?,?,?,?);",
            "3_actualizar" => "UPDATE usuarios SET UsrNom =?, UsrTel=?  WHERE UsrUsr =?;"
        )
    )
?>