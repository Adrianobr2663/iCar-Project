<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>ICAR - Painel Gerente</title>
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
                    </a>
                    <?php
                    if (isset($_SESSION['email'] ) && $_SESSION['email']=="admin@icar.com"){
                    echo "<a class='linku' href='painelGerente.php'>
                        <li>GERENTE</li>
                        </a>";
                        
                    }   
                    ?>             
                    <a class="linku" href="catalogo.php">
                        <li>CATÁLOGO</li>
                    </a>
                    <a class="linku" href="sobre.php">
                        <li>SOBRE</li>
                    </a>

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
            <br><br><br> <br><br><br>
            <h1 class="titloformulario">Painel de Gerência</h1>
        </div>
        <div class="border"></div>
        <div class="boxx">
            <input type="submit" class="btn btn-primary" onclick="window.location.href='cadastro.php'" name="logar" value="Cadastro de Clientes">
            <br>
            <input type="submit" class="btn btn-primary" onclick="window.location.href='cadastroVeiculos.php'" name="logar" value="Cadastro de Veículos">
            <br>
            <input type="submit" class="btn btn-primary" onclick="window.location.href='tabelaCarros.php'" name="logar" value="Veículos Cadastrados">
            <br>
            <input type="submit" class="btn btn-primary" onclick="window.location.href='tabelaClientes.php'" name="logar" value="Clientes Cadastrados">
            <br>
            <input type="submit" class="btn btn-primary" onclick="window.location.href='tabelaUsuarios.php'" name="logar" value="Usuários Cadastrados">
            <br>
        </div>
        <div class="fooo">
            ICAR © 2019 - Todos os direitos reservados
        </div>

</body>

</html>