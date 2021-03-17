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
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Document</title>
</head>
<body>
    <form method="POST" action="cidadeSelect.php">
        <h1>Exercicio 5</h1>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required></input>
        
        <label for="cidades">Selecione sua cidade:</label>
        <select autofocus name="cidades" id="cidades">
            <option value="">Selecione</option>
            <?php
            
            foreach($listaCidade as $key => $cidade){
            
            ?>
            <option value="<?= $key ?>"><?= $cidade ?></option>
            <?php
            }
            ?>
        </select>

        <button>Enviar</button>
    </form>
</body>
</html>