<?php
    $fullname = $_POST["firstname"] . " " . $_POST["middlename"] .". ". $_POST["lastname"];
    $course = $_POST["course"];
    $gender = $_POST["gender"];
    $telnumber = $_POST["country-code"] . $_POST["tele-number"];
    $address = $_POST["address"];

    $output = "My name is " . $fullname . ". My course is " . $course . ". I am a " . $gender . " Student and my mobile number is " . $telnumber . ". I am living at " . $address;
    echo $output;
?>