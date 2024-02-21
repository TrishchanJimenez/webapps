<?php
    $city = array("Makati", "Taguig", "Manila");
    echo "<br>First City: ".$city[0]."\n";
    $city[1] = "PASIG";
    echo "<br>Modified Array: ";
    print_r($city);
    $city[] = "Mandaluyong";
    echo "<br>Array after adding Mandaluyong: ";
    print_r($city);
    unset($city[2]);
    echo "<br>Array after removing Manila: ";
    print_r($city);
    echo "<br>Looping through the array:\n";
    foreach($city as $cities) {
        echo $cities."\n";
    }

    sort($city);
    echo "<br>Sorted array: ";
    print_r($city);
    if(in_array("Makati", $city)) {
        echo "<br>Makati exist\n";
    } else {
        echo "<br>Makati does not exist\n"; 
    }
    $length = count($city);
    echo "<br>Length: ". $length."\n";
?>