<?php

    require_once("Config/config.php");
    require_once("Helpers/Helpers.php");
    
    $url =  !empty($_GET['ruta']) ? $_GET['ruta'] : 'home/home';
    $arrUrl = explode("/", $url);
    $controller = $arrUrl[0];
    $method = $arrUrl[0];
    $params = "";

    if(!empty($arrUrl[1])){
        if($arrUrl[1] != ""){
            $method = $arrUrl[1];
        }
    }

    if(!empty($arrUrl[2]))
    {
        if($arrUrl[2] != "")
        {
            for($i=2; $i < count($arrUrl); $i++)
            {
                $params.= $arrUrl[$i].', ';
            }
            $params = trim($params,", ");
        }
    }
    require_once ("Libraries/Core/autoload.php");
    require_once("Libraries/Core/load.php");

    /*echo "<br>";
    echo "Controlador: ".$controller;
    echo "<br>";
    echo "Metodo: ". $method;
    echo "<br>";
    echo "Parametros: ". $params;*/


?>