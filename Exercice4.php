<?php
$title = 'Exercice4';
$number1 = 1;
include 'header.php';
while ($number1 <= 10){
    echo $number1;
    $number1 = $number1 + $number1 / 2;
}

include 'footer.php';?>