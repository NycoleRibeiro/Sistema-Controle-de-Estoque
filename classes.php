<?php

class Estoque {
    public $produtos = [];
    public $vendas = [];

    public function __construct() {
        $this->produtos = [
            new Produto(1, "Produto 1", 10.00, 10),
            new Produto(2, "Produto 2", 20.00, 20),
            new Produto(3, "Produto 3", 30.00, 30),
            new Produto(4, "Produto 4", 40.00, 40),
            new Produto(5, "Produto 5", 50.00, 50),
            new Produto(6, "Produto 6", 60.00, 60),
            new Produto(7, "Produto 7", 70.00, 70),
            new Produto(8, "Produto 8", 80.00, 80),
            new Produto(9, "Produto 9", 90.00, 90),
            new Produto(10, "Produto 10", 100.00, 100),
            new Produto(11, "Produto 11", 110.00, 110),
            new Produto(12, "Produto 12", 120.00, 120),
            new Produto(13, "Produto 13", 130.00, 130)
        ];
        $this->vendas = [
            new Venda(1, "Produto 1", 10.00, "01/01/2021"),
            new Venda(2, "Produto 2", 20.00, "02/01/2021"),
            new Venda(3, "Produto 3", 30.00, "03/01/2021"),
            new Venda(4, "Produto 4", 40.00, "04/01/2021"),
            new Venda(5, "Produto 5", 50.00, "05/01/2021"),
            new Venda(6, "Produto 6", 60.00, "06/01/2021"),
            new Venda(7, "Produto 7", 70.00, "07/01/2021"),
            new Venda(8, "Produto 8", 80.00, "08/01/2021"),
            new Venda(9, "Produto 9", 90.00, "09/01/2021"),
            new Venda(10, "Produto 10", 100.00, "10/01/2021"),
            new Venda(11, "Produto 11", 110.00, "11/01/2021"),
            new Venda(12, "Produto 12", 120.00, "12/01/2021")
        ];
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
}


class ItemVendido {
    public function alteraEstoque(Produto $produto, $empresa) {
        $listaProds = $empresa->getProdutos();
        foreach($listaProds as $prod){
            if($prod->codigo == $produto->codigo){
                $prod->quantidade -= 1;
                break;
            }
        }
    }
}


$empresa = new Estoque();

?>