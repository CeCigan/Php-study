<?php 
    $year = $_POST["n3"];

    if ($year % 400 == 0 && $year % 100 != 0 && $year 4 ==0) {
        echo "$year год - Высокосный";
    } else {
        echo "$year год - Не высокосный";
    }
?>