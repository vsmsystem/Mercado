<?php
namespace Elaborata\Mercado\Produtos;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author aluno
 */
class Produto {
    private $id;
    private $nome;
    private $preco_unitario;
    private $qtd_estoque;
    private $desconto;
            
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getPreco_unitario() {
        return $this->preco_unitario;
    }

    function getQtd_estoque() {
        return $this->qtd_estoque;
    }

    function getDesconto() {
        return $this->desconto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPreco_unitario($preco_unitario) {
        $this->preco_unitario = $preco_unitario;
    }

    function setQtd_estoque($qtd_estoque) {
        $this->qtd_estoque = $qtd_estoque;
    }

    function setDesconto($desconto) {
        $this->desconto = $desconto;
    }


}
