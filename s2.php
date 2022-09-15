<?php 
    $month = $_POST["n2"] % 12;
    $season = null;
    
    if ($month >= 0 && $month <= 2) {
        $season = 'Зима';
    } elseif ($month >= 3 && $month <= 5) {
        $season = 'Весна';
    } elseif ($month >= 6 && $month <= 8) {
        $season = 'Лето';
    } else {
        $season = 'Осень';
    }
    
    echo $season;
?>