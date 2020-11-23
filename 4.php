<?php
    $num1 = 10;
    $num2 = 1337;
    $num3 = 7;
    if($num1 < $num2 && $num1 < $num3) {
        if($num2 < $num3) {
            echo '$num3, $num2, $num1';
        }
        else {
            echo '$num2, $num3, $num1';
        }
    }
    else if($num2 < $num1 && $num2 < $num3) {
        if($num1 < $num3) {
            echo '$num3, $num1, $num2';
        }
        else {
            echo '$num1, $num3, $num2';
        }
    }
    else if($num3 < $num2 && $num3 < $num1) {
        if($num1 < $num2) {
            echo '$num1, $num2, $num3';
        }
        else {
            echo '$num2, $num1, $num3';
        }
    }
?>
