<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
    <h1>Classificação do nadador</h1>    

    <?php
        $idadeDoNadador = $_POST['idade'];

        switch($idadeNadador){
            case ($idadeNadador>=5 && $idadeNadador<=7): echo'O nadador está na categoria infantil A';
            break;
            case ($idadeNadador>=8 && $idadeNadador<=10): echo'O nadador está na categoria infantil B';
            break;
            case ($idadeNadador>=11 && $idadeNadador<=13): echo'O nadador está na categoria juvenil A';
            break;
            case ($idadeNadador>=14 && $idadeNadador<=17): echo'O nadador está na categoria juvenil B';
            break;
            case ($idadeNadador>=18): echo'O nadador está na categoria Adulto';
            break;
        }
    ?>
</body>