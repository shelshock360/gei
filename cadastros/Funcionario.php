<?php


class Funcionario {
private $nome;
private $cpf;
private $email;
private $senha;

function getNome() {
    return $this->nome;
}

function getCpf() {
    return $this->cpf;
}

function getEmail() {
    return $this->email;
}

function getSenha() {
    return $this->senha;
}

function setNome($nome) {
    $this->nome = $nome;
}

function setCpf($cpf) {
    $this->cpf = $cpf;
}

function setEmail($email) {
    $this->email = $email;
}

function setSenha($senha) {
    $this->senha = $senha;
}





    
    
    
    
}
