<?php
session_start();

  if(isset($_POST['cadastrar'])) {
    require_once('conecta.php');
    require_once('DAOusuario.php');

    $cadastrar = new UsuarioDAO();

    $email = trim(strip_tags($_POST['email'])); 
    $senha = trim(strip_tags($_POST['senha'])); 
    $rep_senha = trim(strip_tags($_POST['rep_senha']));
    $nome = trim(strip_tags($_POST['nn']));
    $endereco = trim(strip_tags($_POST['end']));
    $cidade = trim(strip_tags($_POST['cc']));
    $estado = trim(strip_tags($_POST['ess']));
    $telefone = trim(strip_tags($_POST['tt']));
    $cep = trim(strip_tags($_POST['cep']));
    $nascimento = trim(strip_tags($_POST['nas']));

    // confere se as senhas são iguais
    if($senha === $rep_senha) {
      $consulta = $cadastrar->unico($email);
      // caso o login escolhido já exista no banco retorna erro
      if($consulta == false) {
        header('location:cadastro.php?repetido=senha');
      // caso não haja login parecido, inclui métoro de inserção de dados no banco de dados
      } else {
        $insere = $cadastrar->cadastra($email,$senha,$nome,$endereco, $cidade, $estado, $telefone, $cep, $nascimento);
        // caso o usuario seja cadastrado, exibir mensagem de sucesso
        if($insere == true) {
          header('location:cadastro.php?success=cadastrado');
        }
      }

    } else {
      header('location:cadastro.php?erro=senha');
    }

  }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>    <?php
      // mensagem de erro caso as senhas não sejam iguais
      if(isset($_GET['erro'])) {
        echo '<div class="alert alert-danger">As senhas devem ser iguais!</div>';
      }
      // mensagem de erro caso o login escolhido já exista no banco de dados
      if(isset($_GET['repetido'])) {
        echo '<div class="alert alert-danger">Este Login já foi escolhido por outra pessoa!</div>';
      }
      // mensagem de sucesso caso o usuario seja cadastrado corretamente
      if(isset($_GET['success'])) {
        echo '<div class="alert alert-success">Usuario cadastrado!</div>';
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
            <h1 class="titloformulario">Formulário de Cadastro</h1>
        </div>
        <div class="border"></div>

        <div class="formulario">
            <form action="#" method="post">

                <input type="latin-name" class="herminho" name="nn" placeholder="Nome" required><br>
                <input type="text" class="herminho" name="end" placeholder="Endereço" required><br>
                <input type="text" class="herminho" name="cc" placeholder="Cidade" required><br>
                <input type="text" class="herminho" name="ess" placeholder="Estado" required><br>
                <input type="tel" class="herminho" name="tt" placeholder="Telefone" required><br>
                <input type="email" class="herminho" name="email" placeholder="E-mail" required><br>
                <input type="password" class="herminho" name="senha" placeholder="Senha" required><br>
                <input type="password" class="herminho" name="rep_senha" placeholder="Repita a senha" required><br>
                <input type="numeric" class="herminho" name="cep" placeholder="CEP" required><br>
                <input type="date" class="herminho" min="1920-01-01" max="2001-01-01" name="nas" required><br>
                <input type="submit" name="cadastrar" value="Cadastrar">
            </form>
        </div>
    </div>
    <div class="fooo">
        ICAR © 2019 - Todos os direitos reservados
    </div>

</body>
</html>