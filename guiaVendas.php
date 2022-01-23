<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendastyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Estoque</title>
</head>
<body>
    <header>
        <img src="Imagens/logo.png"></img>
        <nav>
            <ul>
                <a href="guiaEstoque.php">
                    <li>Estoque</li>
                </a>
                <a href="guiaVendas.php">
                    <li id="atual">Vendas</li>
                </a>                  
            </ul>
        </nav>
    </header>

    <main>
        <div class="mainWindow">
            <div class="barraPrincipal">
                <form class="pesquisa" action="" method="POST">
                    <input type="text" name="codigo" id="codigoVenda" placeholder="Cód. do Produto">
                    <button name="adicionarProduto" class="btn_busca" type="submit">
                    <i class="fas fa-plus-circle"></i>
                    </button>
                </form>
                <?php
                    require_once('classes.php');

                    if(isset($_POST['adicionarProduto'])){
                        $codProd = $_POST['codigo'];
                        $codigo = $empresa->getVendas();
                        $codigo = count($codigo) + 1;

                        $listaProds = $empresa->getProdutos();
                        foreach($listaProds as $produto){
                            if($produto->codigo == $codProd){
                                $nome = $produto->nome;
                                $preco = $produto->preco;
                                $data = date('d/m/Y');
                                $venda = new Venda($codigo, $nome, $preco, $data);
                                $empresa->adicionaVenda($venda);
                                $vendido = new ItemVendido();
                                $vendido->alteraEstoque($produto, $empresa);
                                break;
                            }
                        }

                        
                    }
                ?>
            </div>

            <div class="lista">
                <?php
                    $listaVendas = $empresa->getVendas();

                    echo "<table class='listaProdutos'>";
                    echo "<tr>";
                    echo "<th class='codprod'>Código</th>";
                    echo "<th class='nomeprod'>Nome</th>";
                    echo "<th class='precoprod'>Preço</th>";
                    echo "<th class='qtdprod'>Data</th>";
                    echo "</tr>";
                    foreach($listaVendas as $produto){
                        if(intval($produto->codigoVenda)%2 == 0){
                            echo "<tr class='par'>";
                            echo "<td class='codprod'>".$produto->codigoVenda."</td>";
                            echo "<td class='nomeprod'>".$produto->nome."</td>";
                            echo "<td class='precoprod'>".$produto->preco."</td>";
                            echo "<td class='qtdprod'>".$produto->data."</td>";
                            echo "</tr>";
                        } else {
                            echo "<tr class='impar'>";
                            echo "<td class='codprod'>".$produto->codigoVenda."</td>";
                            echo "<td class='nomeprod'>".$produto->nome."</td>";
                            echo "<td class='precoprod'>".$produto->preco."</td>";
                            echo "<td class='qtdprod'>".$produto->data."</td>";
                            echo "</tr>";
                        }
                    }
                    echo "</table>";
                ?>
            </div>
        </div>
    </main>
</body>
</html>