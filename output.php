<?php
    $cm = $_POST['cm'];
    $meter = $cm / 1000;
    $kilo = $cm / 100000;
    
    echo "Centimeter: ". $cm."cm</BR>";
    echo "Meter: ". $meter."m</BR>";
    echo "Kilometer: ". $kilo."km</BR>";
?>