<?php
    $country = array(
        "Philippines" => "Manila",
        "Bahrain" => "Manama",
        "Belgium" => "Brussels",
        "Brunei" => "Bandar Seri Begawan",
        "Finland" => "Helsinki",
        "France" => "Paris",
        "Cambodia" => "Phnom Penh",
        "Canada" => "Ottawa",
        "Germany" => "Berlin",
        "China" => "Beijing",
        "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam",
        "India" => "New Delhi",
        "Spain" => "Madrid",
        "Sweden" => "Stockhold",
        "United Kingdom" => "London",
        "Indonesia" => "Jakarta",
        "Japan" => "Tokyo",
        "Czech Republic" => "Prague",
        "South Korea" => "Seoul",
        "Hungary" => "Budapest",
        "Latvia" => "Riga",
        "Malaysia" => "Kuala Lumpur",
        "Nigeria" => "Abuja",
        "Vietnam" => "Hanoi"
    );
    echo "</BR></BR>By Country Ascending Order: ";
    ksort($country);
    print_r($country);
    echo "</BR></BR>By Capital Ascending Order: ";
    krsort($country);
    print_r($country);
    echo "</BR></BR>By Country Descending Order: ";
    asort($country);
    print_r($country);
    echo "</BR></BR>By Capital Descending Order: ";
    arsort($country);
    print_r($country);
?>