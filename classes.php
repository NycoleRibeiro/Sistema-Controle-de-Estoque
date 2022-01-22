<?php

class Estoque {
    public $produtos = [];
    public $vendas = [];
    public $nomeEmpresa = "";

    public function __construct($nomeEmpresa) {
        $this->nomeEmpresa = $nomeEmpresa;
    }

    public function adicionaProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function adicionaVenda(Venda $venda) {
        $this->vendas[] = $venda;
    }

    public function getProdutos() {
        return $this->produtos;
    }

    public function getVendas() {
        return $this->vendas;
    }
}


class Produto {
    public $codigo;
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($codigo, $nome, $preco, $quantidade) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function imprimeProduto() {
        echo "<tr>";
        echo "<td>".$this->codigo."</td>";
        echo "<td>".$this->nome."</td>";
        echo "<td>".$this->preco."</td>";
        echo "<td>".$this->quantidade."</td>";
        echo "</tr>";
    }
}


class Venda {
    public $codigoVenda;
    public $data;

    public function __construct($codigoVenda, $nome, $preco, $data) {
        $this->codigoVenda = $codigoVenda;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->data = $data;
    }

    public function imprimeVenda() {
        echo "<tr>";
        echo "<td>".$this->codigoVenda."</td>";
        echo "<td>".$this->nome."</td>";
        echo "<td>".$this->preco."</td>";
        echo "<td>".$this->data."</td>";
        echo "</tr>";
    }
}


class itemVendido {
    public $codigoVenda;

    public function __construct($codigoVenda, Produto $produto) {
        $this->codigoVenda = $codigoVenda;
        $this->produto = $produto;
    }
}


?>