<?php 
    $day = $_POST['n1'];

    $monthDecade = null;
    if ($day > 0 && $day <= 10) {
        $monthDecade = 'Первая декада месяца';
    } elseif ($day > 10 && $day <= 20) {
        $monthDecade = 'Вторая декада месяца';
    } else {
        $monthDecade = 'Третья декада месяца';
    }

    echo $monthDecade;
?>