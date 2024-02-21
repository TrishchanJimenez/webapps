<?php
    $name = $_POST['name'];
    $address = $_POST['address'] . ", " . $_POST["postcode"] . ", ".$_POST['country'];
    $number = $_POST['number'];
    $amount = $_POST['amount'];
    $mode = $_POST['payment'];
    $accname = $_POST['accname'];
    $accnumber = $_POST['accnumber'];

    echo "My name is <b>".$name."</b><br>"; 
    echo "I am living at ".$address."<br>"; 
    echo "My mobile number is ".$number."<br>"; 
    echo "<br>The total Amount that I need to pay is <b>".$amount."</b><br><br>"; 
    echo "<b>Mode of payment: </b>".$mode."<br>"; 
    echo "<b>Account Name: </b>".$accname."<br>"; 
    echo "<b>Account Number: </b>".$accnumber."<br>"; 
?>