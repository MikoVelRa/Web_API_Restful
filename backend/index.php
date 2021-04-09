<?php
    $peticion = $_SERVER['REQUEST_METHOD'];//esperando la petición de cliente

    $datos = file_get_contents('php://input'); //datos por parte del cliente en el flujo de envío
    // print_r($peticion);
    switch($peticion){
        case 'GET':
            if(isset($_GET['id_param'])&&isset($_GET['otro'])){ //soi existen
                print_r($_GET['id_param']);
                print_r($_GET['otro']);        
            }
            else{
                print_r($_GET);
            }
           break;
        case 'POST':
            print_r("El usuario ha enviado una petición POST"); 
            $_POST = json_decode($datos,true);
            /*decodificar los datos del cliente en un 
            archivo json, para que desde backend se puedan manipular como array asocativo 
            */
            foreach ($_POST as $llave=>$x) {
                echo PHP_EOL.$llave." ".$x;
            }
            break;
        case 'DELETE':
            print_r("El usuario ha enviado una petición DELETE"); 
            echo "Parámetro: "+$_GET['id_param'];
            break;
        case 'PUT':
            $_PUT=json_encode($datos,true);
            echo "Parámetro: "+$_GET['id_param'].PHP_EOL;
            
            // print_r("El usuario ha enviado una petición PUT");
            break;
    }

