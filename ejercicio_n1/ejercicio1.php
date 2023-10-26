<?php

    $numeros = array_map('trim', explode(',', $_POST['numeros']));

    function ordenarMenorAMayor($numeros) {
        sort($numeros);
        return $numeros;
    }

    function numerosPares($numeros) {
        $pares = array_filter($numeros, function($num) {
            return $num % 2 == 0;
        });
        rsort($pares);
        return $pares;
    }

    function numerosImpares($numeros) {
        $impares = array_filter($numeros, function($num) {
            return $num % 2 != 0;
        });
        sort($impares);
        return $impares;
    }

    $ordenados = ordenarMenorAMayor($numeros);
    $pares = numerosPares($numeros);
    $impares = numerosImpares($numeros);
    echo "Lista original: ";
    echo implode(', ', $numeros).'<br>'.'<br>';

    echo "Lista ordenada de menor a mayor: ";
    echo implode(', ', $ordenados).'<br>'.'<br>';

    echo "Lista de números pares ordenada de mayor a menor: ";
    echo implode(', ', $pares).'<br>'.'<br>';

    echo "Lista de números impares ordenada de menor a mayor: ";
    echo implode(', ', $impares);

?>