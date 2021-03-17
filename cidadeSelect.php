<?php

$listaCidade = [
    1 => "Jandira",
    2 => "Itapevi",
    3 => "Santana de Parnaiba",
    4 => "Barueri",
    5 => "Osasco",
    6 => "Cotia",
    7 => "Carapicuiba",
    8 => "São Paulo",
];

$cidadeEscolhida = $_POST["cidades"];
$nome = $_POST["nome"];

echo "Olá $nome. Você é de " . $listaCidade[$cidadeEscolhida] . ", seja Bem Vindo!"

?>