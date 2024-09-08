<?php

  include ('conecta.php');
  include ('DAOusuario.php');

  $usuario = new UsuarioDAO();

  $logout = $usuario->logout();

 ?>