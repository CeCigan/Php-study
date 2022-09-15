<?php 
    $city = $_POST["n6"];

    switch($city){
        case "Греция":
            echo "Столица Греции - Афины";
            break;

        case "Россия":
            echo "Столица России - Москва";
            break;

        case "Франция":
            echo "Столица Франции - Париж";
            break;

        default:
            echo "Такой страны нет";
            break;
    }
?>