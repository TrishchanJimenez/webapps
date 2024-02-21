<?php
    $str = "My name is RAFFY";
    $str5 = "MY name is Jomariss Jungkook";
    $str = strtolower($str);
    $str2 = strtoupper($str);
    $str3 = ucfirst($str);
    $str4 = lcfirst($str);
    $str6 = ucwords($str);
    $str7 = strrev($str);
    $str8 = strlen($str);

    echo "strtolower: ".$str."<br>";
    echo "strtoupper: ".$str2."<br>";
    echo "ucfirst: ".$str3."<br>";
    echo "lcfirst: ".$str4."<br>";
    echo "ucwords: ".$str6."<br>";
    echo "strrev: ".$str7."<br>";
    echo "strlen: ".$str8."<br>";
?>