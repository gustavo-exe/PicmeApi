<?php

    //Al incluirlo aqui se incluye en todos lo desmas archivos
    include("../../tools/cors.php");
    
    $config = json_decode('
        {
            "db":{
                "hostname":"127.0.0.1",
                "username":"root",
                "password":"1234",
                "database":"picme"
            },
            "smtp": {
                "host": "",
                "user": "", 
                "pass": ""
            }
        }
    ');
?>