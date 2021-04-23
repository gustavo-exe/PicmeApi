<p align="center">
  <h3 align="center">Picme API</h3>
</p>

Este proyecto es la api contstruida con la logica de negocio para una PWA [PicmeCliente](https://github.com/gustavo-exe/PicmeCliente) 

## Herramientas
* WinSCP
* Putty

## Construido el Backend con

* Servidor Local:
Ubuntu Server 20.04 LTS

* Base de datos:
MySQL instalado con el APT Repository.

Modelo de esqema de la base de datos:
| usuarios | coleccion | fotos |
|-|-|-|
| UsrUsr VARCAR(40) PK | UsrUsr Varchar(45) PK | UsrUsr (Varchar40) PK |
| UsrNom VARCHAR(80) | ColCod VaRchar(40) PK | ColCod Varcgar(40) PK |
| UsrPwd Varchar(60) | ColNom Varchar(30) PK | FotCod Varchar(20) PK |
| UsrMail Varchar(20) | ColFchCre DATETIME | FotFch DATATIME |
| UsrTel Varchar(20) | ColDsc Varchar(120) | FotPath Varchar(45) |
| UsrEst Varchar(5) |  |  |

La configuracion del MYSQL para lograr la conexion.
```PHP
db":{
   "hostname":"127.0.0.1",
   "username":"root",
   "password":"1234",
   "database":"picme"
},
```

* Servidor web/proxy inverso:
Ngnix

* Lenguaje de programacion
PHP 7.4

* AWS
Simple Email Service

* Manejado de paquetes para peticiones de corre electronico.
composer phpmailer/phpmailer

## Pre requisitos
Prepara la api con los requisitos anteriores y la normalizacion de la base de datos.
    

