<?php
    $lado1 = 30;
    $lado2 = 30;
    $lado3 = 15;
    if($lado1 == $lado2 && $lado1 == $lado3) {
        echo 'Triângulo equilátero';
    }
    else if($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3) {
        echo 'Triângulo escaleno';
    }
    else {
        echo 'Triângulo isósceles';
    }
?>
