<?php

    //define("BASE_URL","http://localhost/MVC_tienda_virtual/");
    const BASE_URL = "http://localhost/MVC_tienda_virtual/";
        
    //ZONA HORARIA
    date_default_timezone_set('America/Bogota');

    //DATOS DE CONEXION A LA BASE DE DATOS
    const DB_HOST="localhost";
    const DB_NAME="tienda";
    const DB_USER="root";
    const DB_PASSWORD="";
    const DB_CHARSET="charset=utf8";

    //DELIMINADORES DECIMAL y MILLAR Ej: 24,1989.00
    const SPD = ".";
    const SPM = ",";

    //SIMBOLO DE MONEDA
    const SMONEY = "$";        

?>