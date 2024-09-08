<?php

session_start();

if(isset($_POST['cadastrar'])) {
    require_once('conecta.php');
    require_once('DAOveiculos.php');

    $cadastrar = new VeiculosDAO();

    $marca = trim(strip_tags($_POST['marca'])); 
    $modelo = trim(strip_tags($_POST['modelo']));
    $ano = trim(strip_tags($_POST['ano']));
    $cor = trim(strip_tags($_POST['cor']));
    $valor = trim(strip_tags($_POST['valor']));
    $combustivel = trim(strip_tags($_POST['comb']));
    
    $cadastrar->cadastra($marca, $modelo, $ano, $cor, $valor, $combustivel);
   
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>ICAR - Cadastro</title>
</head>

<body>

    <div class="all">
        <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1><a class="linku" href="principal.php">I<span>CAR</span></a></h1>
                </div>

            <ul class="navigation">
                <a class="linku" href="principal.php">
                    <li>INÍCIO</li>
                </a>
                <a class='linku' href='painelGerente.php'>
                    <li>GERENTE</li>
                </a>
                <a class="linku" href="catalogo.php">
                    <li>CATÁLOGO</li>
                </a>
                <a class="linku" href="sobre.php">
                    <li>SOBRE</li>
                    <?php
                if (!isset($_SESSION['email'])){
                echo "<a class='linku' href='index.php'>
                  <li>LOGIN</li>
                </a>";
              }
                else{
                  echo "<a class='linku' href='logout.php'>
                  <li>LOGOUT</li>
                </a>";
                }
                ?>
            </ul>
            </div>
        </div>
      
        <div class="titloformulario">
            <h1 class="titloformulario">Formulário de Cadastro Veículos</h1>
        </div>
        <div class="border"></div>

        <div class="formulario">
            <form action="#" method="post">

                <input type="text" class="herminho" name="marca" placeholder="Marca" required><br>
                <input type="text" class="herminho" name="modelo" placeholder="Modelo" required><br>
                <input type="numeric" class="herminho" name="ano" placeholder="Ano" required><br>
                <input type="text" class="herminho" name="cor" placeholder="Cor" required><br>
                <input type="numeric" class="herminho" name="valor" placeholder="Valor" required><br>
                <input type="text" class="herminho" name="comb" placeholder="Combustível" required><br>
                <input type="submit" class="herminho" name="cadastrar" value="Cadastrar">
            </form>
        </div>
    </div>
    <div class="fooo">
        ICAR © 2019 - Todos os direitos reservados
    </div>

</body>

</html>