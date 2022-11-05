<?php
$valor= $_POST["reconocimiento"];
$test = 1;

switch ($valor) {
    case "Encender luz sala":
        echo "luz encendida";
        break;
    case "Apagar luz sala":
        echo "luz apagada";
        break;
    case "Encender luz dormitorio":
        echo "luz dormitorio encendida";
        break;
    case "Apagar luz dormitorio":
        echo "luz dormitorio apagada";
        break;
    case "Encender luz cuarto";
        echo "luz cuarto encendida";
        break;
    case "Apagar luz cuarto":
            echo "luz cuarto apagada";
            break;
    case "Encender luz baño";
            echo "luz baño encendida";
            break;
    case "Apagar luz baño":
            echo "luz baño apagada";
            break;
    case "Encender luz armario";
            echo "luz de armario encendida";
            break;
    case "Apagar luz armario":
            echo "luz de armario apagada";
            break;
}
?>
