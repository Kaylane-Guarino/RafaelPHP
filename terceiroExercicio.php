<?php

// $valorEntrada = ["Olá ", "valor 1 ", "valor 2 ", "Tchau "];

// echo $valorEntrada[0];
// echo $valorEntrada[1];
// echo $valorEntrada[2];
// echo $valorEntrada[3];

// echo "<br/><br/>";

// echo $valorEntrada[3];
// echo $valorEntrada[2];
// echo $valorEntrada[1];
// echo $valorEntrada[0];

function frase($valor1, $valor2, $valor3, $valor4){
    $frase = $valor1 . "" . $valor2 . "" . $valor3 . "" . $valor4;

    return $frase;
}

$nome = frase("Olá ","1 ", "2 ", "Bye" );

echo $nome;

echo "<br/><br/>";

$nome = frase("Bye ", "2 ", "1 ", "Olá");

echo $nome;

?>