<?php
    $name1="TERESITA CARDO";
    $name2="Teresita Cardo";
    $name3="teresita cardo";
    $char = "@";
    echo strtolower($name1)."</BR>";//OUTPUT: teresita cardo
    echo strtoupper($name3)."</BR>";//OUTPUT: TERESITA CARDO
    echo ucfirst($name3)."</BR>";//OUTPUT: Teresita cardo
    echo ucwords($name3)."</BR>";//OUTPUT: Teresita Cardo
    echo strrev($name2)."</BR>";
    echo strlen($name1)."</BR>";
    echo str_word_count($name1)."</BR>";
    echo str_replace("eres", "", $name2)."</BR>";
    echo str_repeat($char, 5)."</BR>";
    // OUTPUT: 9
    // echo strtolower($name1)."</BR>";
?>