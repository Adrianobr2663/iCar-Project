<?php

class VeiculosDAO{
    private $conexao;

    public function __construct() {
      $this->conexao = new Conexao();
    }

public function cadastra($marca, $modelo, $ano, $cor, $valor, $combustivel) {

    $sql = "INSERT INTO veiculos (marca,modelo,ano,cor,valor,combustivel) VALUES ('$marca','$modelo','$ano','$cor','$valor','$combustivel')";
    
    $executa = mysqli_query($this->conexao->getCon(), $sql);

    if(mysqli_affected_rows($this->conexao->getCon()) > 0) {
      return true;
    } else {
      return false;
    }
  }
}

?>