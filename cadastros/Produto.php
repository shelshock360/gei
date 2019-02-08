<?php


class Produto {
    
    private $nome;
    private $valorVenda;
    private $qtdeEstoque;
    
    function getNome() {
        return $this->nome;
    }

    function getValorVenda() {
        return $this->valorVenda;
    }

    function getQtdeEstoque() {
        return $this->qtdeEstoque;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setValorVenda($valorVenda) {
        $this->valorVenda = $valorVenda;
    }

    function setQtdeEstoque($qtdeEstoque) {
        $this->qtdeEstoque = $qtdeEstoque;
    }


}
