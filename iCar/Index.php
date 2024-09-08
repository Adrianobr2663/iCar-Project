<?php

  if($_POST) {
    require_once('conecta.php');
    require_once('DAOusuario.php');

    $usuario = new UsuarioDAO();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $user = $usuario->login($email, $senha);

    if($user == true) {
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      if ($_SESSION['email'] == 'admin@icar.com"'){
        header('location: principal.php');
      }
      else{
        header('location: principal.php');
      }

    } else {
      header('location:index.php?erro=senha');
    }

  }
    if(isset($_GET['erro'])) {
      echo '<div class="alert alert-danger">Dados de login incorretos</div>';
    }

    if(isset($_GET['success'])) {
      echo '<div class="alert alert-success">Logout efetuado com sucesso</div>';
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
    <title>ICAR - Login</title>
</head>

<body>
    <div class="all">
        <div class="header">
            <div class="inner_header">
                <div class="logo_container">
                    <h1><a class="linku" href="principal.html">I<span>CAR</span></a></h1>
                </div>

                <ul class="navigation">
                    <a class="linku" href="principal.php">
                        <li>INÍCIO</li>
                    </a>
                    <a class="linku" href="catalogo.html">
                        <li>CATÁLOGO</li>
                    </a>
                    <a class="linku" href="sobre.html">
                        <li>SOBRE</li>
                    </a>
                </ul>
            </div>
        </div>
        <form action="#" method="post">
        <div class="boxx">
            <input type="text" class="herminho" name="email" placeholder="E-mail" required><br>
            <input type="password" class="herminho" name="senha" placeholder="Senha" required><br>

            <div class="checkbox">
          <input type="checkbox" class="lemb" name="lembrar"> Mantenha-me conectado

      </div>
      <a class="cadst" href="cadastro.php">Cadastre-se</a>
            <input type="submit" class="btn btn-primary" name="logar" value="Entrar">
            <br>
        </div>
    </div>
    </form>
    <div class="fooo">
        ICAR © 2019 - Todos os direitos reservados
    </div>
</body>

</html>