<?php


  class UsuarioDAO {
    private $conexao;

    public function __construct() {
      $this->conexao = new Conexao();
    }

    // efetua login
    public function login($email, $senha) {

      $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

      $executa = mysqli_query($this->conexao->getCon(), $sql);

      if(mysqli_num_rows($executa) > 0) {
        return true;
      } else {
        return false;
      }
    }

    // Verifica se já existe login com o nome escolhido
    public function unico($email) {

      $unic = "SELECT * FROM usuarios WHERE email = '$email'";

      $exec = mysqli_query($this->conexao->getCon(), $unic);

      if(mysqli_num_rows($exec) > 0) {
        return false;
      } else {
        return true;
      }
    }

    // cadastra o usuário
    public function cadastra($email,$senha,$nome,$endereco, $cidade, $estado, $telefone, $cep, $nascimento) {

      $sql = "INSERT INTO usuarios (email,senha) VALUES ('$email','$senha')";
      
     
       if ($executa = mysqli_query($this->conexao->getCon(), $sql)){
       $sql = "INSERT INTO clientes (nome,endereco,cidade,estado,telefone,cep,nascimento) VALUES ('$nome','$endereco','$cidade','$estado','$telefone','$cep','$nascimento')";
       $executa = mysqli_query($this->conexao->getCon(), $sql);

      }
      if(mysqli_affected_rows($this->conexao->getCon()) > 0) {
        return true;
      } else {
        return false;
      }
    }

    // efetua logout
    public function logout() {

      session_start();

      session_destroy();

      header("Location:index.php?success=logout");
      exit();
    }

  }