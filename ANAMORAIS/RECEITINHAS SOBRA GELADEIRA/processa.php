<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $proteina = $_POST['proteina'];
    $vegetal = $_POST['vegetal'];
    $carbo = $_POST['carbo'];
    $cremosidade = $_POST['cremosidade'];
    $tempo = $_POST['tempo'];

    $nomeProteina = "";
    $nomeVegetal = "";
    $nomeCarbo = "";
    $nomeCremosidade = "";

    $receita = "";
    $ingredientes = "";
    $passos = "";


    /* VERIFICA SE NÃO TEM NENHUM INGREDIENTE */

    if ($proteina == "nenhuma" && $vegetal == "nenhum" && $carbo == "nenhum" && $cremosidade == "nenhum") {

        $receita = "Não foi possível criar uma receita";

        $ingredientes = "Você informou que não possui ingredientes disponíveis.";

        $passos = "Escolha pelo menos um ingrediente para podermos criar uma receitinha.";

    }

    else {


        /* PROTEÍNA */

        if ($proteina == "frango") {
            $nomeProteina = "frango";
        }

        elseif ($proteina == "carne") {
            $nomeProteina = "carne";
        }

        elseif ($proteina == "porco") {
            $nomeProteina = "porco";
        }

        elseif ($proteina == "peixe") {
            $nomeProteina = "peixe";
        }

        elseif ($proteina == "ovos") {
            $nomeProteina = "ovos";
        }

        elseif ($proteina == "vegetal") {
            $nomeProteina = "vegetais";
        }


        /* VEGETAL */

        if ($vegetal == "cebola") {
            $nomeVegetal = "cebola e alho";
        }

        elseif ($vegetal == "tomate") {
            $nomeVegetal = "tomate";
        }

        elseif ($vegetal == "cenoura") {
            $nomeVegetal = "cenoura";
        }

        elseif ($vegetal == "brocolis") {
            $nomeVegetal = "brócolis";
        }

        elseif ($vegetal == "pimentao") {
            $nomeVegetal = "pimentão";
        }

        elseif ($vegetal == "folhas") {
            $nomeVegetal = "folhas";
        }

        elseif ($vegetal == "abobrinha") {
            $nomeVegetal = "abobrinha";
        }

        elseif ($vegetal == "milho") {
            $nomeVegetal = "milho ou ervilha";
        }


        /* CARBOIDRATO */

        if ($carbo == "arroz") {
            $nomeCarbo = "arroz";
        }

        elseif ($carbo == "macarrao") {
            $nomeCarbo = "macarrão";
        }

        elseif ($carbo == "batata") {
            $nomeCarbo = "batata";
        }

        elseif ($carbo == "pao") {
            $nomeCarbo = "pão";
        }

        elseif ($carbo == "farinha") {
            $nomeCarbo = "farinha";
        }


        /* CREMOSIDADE */

        if ($cremosidade == "queijo") {
            $nomeCremosidade = "queijo";
        }

        elseif ($cremosidade == "creme") {
            $nomeCremosidade = "creme de leite ou requeijão";
        }

        elseif ($cremosidade == "manteiga") {
            $nomeCremosidade = "manteiga";
        }

        elseif ($cremosidade == "molho") {
            $nomeCremosidade = "molho";
        }

        elseif ($cremosidade == "limao") {
            $nomeCremosidade = "limão ou vinagre";
        }


        /* NOME DA RECEITA */

        if ($carbo == "arroz") {
            $receita = "Arroz com $nomeProteina";
        }

        elseif ($carbo == "macarrao") {
            $receita = "Macarrão com $nomeProteina";
        }

        elseif ($carbo == "pao") {
            $receita = "Sanduíche de $nomeProteina";
        }

        elseif ($carbo == "batata") {
            $receita = "Batata com $nomeProteina";
        }

        elseif ($carbo == "farinha") {
            $receita = "Receitinha com $nomeProteina";
        }

        else {
            $receita = "Receitinha de $nomeProteina";
        }


        /* INGREDIENTES */

        $ingredientes = $nomeProteina . ", " . $nomeVegetal;

        if ($nomeCarbo != "") {
            $ingredientes = $ingredientes . ", " . $nomeCarbo;
        }

        if ($nomeCremosidade != "") {
            $ingredientes = $ingredientes . ", " . $nomeCremosidade;
        }

        $ingredientes = $ingredientes . ", sal e temperos";


        /* MODO DE PREPARO */

        $passos = "1. Separe e corte os ingredientes.<br>";

        $passos = $passos . "2. Refogue o $nomeProteina com o $nomeVegetal.<br>";

        if ($nomeCarbo != "") {
            $passos = $passos . "3. Acrescente o $nomeCarbo e misture bem.<br>";
        }

        if ($nomeCremosidade != "") {
            $passos = $passos . "4. Acrescente o $nomeCremosidade e misture.<br>";
        }

        else {
            $passos = $passos . "4. Tempere a gosto e deixe cozinhar.<br>";
        }

        $passos = $passos . "5. Deixe aquecer bem e sirva.";

    }

}

else {

    header("Location: receitinhas.html");
    exit;

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Receitinhas Sobra</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <img src="receitinhassobras.jpg" width="180" alt="Receitinhas Sobra">

        <h2>✎﹏﹏SUA RECEITINHA𐂐◯𓇋</h2>

        <h3><?php echo $receita; ?></h3>

        <h3>Ingredientes</h3>

        <p><?php echo $ingredientes; ?></p>

        <h3>Modo de preparo</h3>

        <p><?php echo $passos; ?></p>

        <a href="receitinhas.html" class="btn">
            ESCOLHER OUTRA RECEITA 𐂐◯𓇋
        </a>

    </div>

</body>

</html>