<?php
    $factor = 1;
    $number = $_POST['number'];
    echo "<b>Factorial of $number:</b><br><br>";
    
    //FOR LOOP
    for($x = 1; $x<=$number;$x++) {
        $factor = $factor * $x;
        if($x!=$number) {
            echo $x." * ";
        } else {
            echo $x;
        }
    }

    //WHILE LOOP
    $x = 1;
    while($x <= $number) {
        $factor = $factor * $x;
        if ($x != $number) {
            echo $x . " * ";
        } else {
            echo $x;
        }
        $x++;
    }

    echo " = ".number_format($factor);
?>