<?php

class Login{

  private $nome;
  private $email;
  private $senha;
  private $logado;
  private $endereco;
  private $cidade;
  private $estado;
  private $telefone;
  private $cep;
  private $nascimento;

  function getCodUsuario() {
    return $this->codUsuario;
  }

  function getNome() {
    return $this->nome;
  }

  function getEmail() {
    return $this->email;
  }

  function getSenha() {
    return $this->senha;
  }

  function getLogado() {
    return $this->logado;
  }

  function getEndereco() {
    return $this->endereco;
  }
 
  function getCidade() {
    return $this->cidade;
  }

  function getEstado() {
    return $this->estado;
  }
  
  function getTelefone() {
    return $this->telefone;
  }
  
  function getCep() {
    return $this->cep;
  }

  function getNascimento() {
    return $this->nascimento;
  }
  
  function setCodUsuario($codUsuario) {
    $this->codUsuario = $codUsuario;
  }

  function setNome($nome) {
    $this->nome = $nome;
  }

  function setLogin($email) {
    $this->email = $email;
  }

  function setSenha($senha) {
    $this->senha = $senha;
  }

  function setLogado($logado) {
    $this->logado = $logado;
  }

  function setEndereco($endereco) {
    $this->endereco = $endereco;
  }

  function setCidade($cidade) {
    $this->cidade = $cidade;
  }

  function setEstado($estado) {
    $this->estado = $estado;
  }

  function set($cep) {
    $this->cep = $cep;
  }

  function setNascimento($nascimento) {
    $this->nascimento = $nascimento;
  }

}