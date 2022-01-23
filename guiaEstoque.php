<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estoquestyle.css">
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
                    <li id="atual">Estoque</li>
                </a>
                <a href="guiaVendas.php">
                    <li>Vendas</li>
                </a>                  
            </ul>
        </nav>
    </header>

    <main>
        <div class="mainWindow">
            <form class="pesquisa" action="" method="POST">
                <a href="cadastroProduto.php">
                    <div class="botaoPreto">Novo Produto</div>
                </a>
                <input type="text" name="codigoEstoque" id="codigo" placeholder="Cód. do Produto">
                <button name="buscarProduto" class="btn_busca" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>

            <?php
                $listaProdutos = [
                    (object)["codigo" => "1", "nome" => "Produto 1", "quantidade" => "10", "preco" => "10,00"],
                    (object)["codigo" => "2", "nome" => "Produto 2", "quantidade" => "20", "preco" => "20,00"],
                    (object)["codigo" => "3", "nome" => "Produto 3", "quantidade" => "30", "preco" => "30,00"],
                    (object)["codigo" => "4", "nome" => "Produto 4", "quantidade" => "40", "preco" => "40,00"],
                    (object)["codigo" => "5", "nome" => "Produto 5", "quantidade" => "50", "preco" => "50,00"],
                    (object)["codigo" => "6", "nome" => "Produto 6", "quantidade" => "60", "preco" => "60,00"],
                    (object)["codigo" => "7", "nome" => "Produto 7", "quantidade" => "70", "preco" => "70,00"],
                    (object)["codigo" => "8", "nome" => "Produto 8", "quantidade" => "80", "preco" => "80,00"],
                    (object)["codigo" => "9", "nome" => "Produto 9", "quantidade" => "90", "preco" => "90,00"],
                    (object)["codigo" => "10", "nome" => "Produto 10", "quantidade" => "100", "preco" => "100,00"]
                ];
                echo "<table class='listaProdutos'>";
                echo "<tr>";
                echo "<th class='codprod'>Código</th>";
                echo "<th class='nomeprod'>Nome</th>";
                echo "<th class='precoprod'>Preço</th>";
                echo "<th class='qtdprod'>Quantidade</th>";
                echo "</tr>";
                foreach($listaProdutos as $produto){
                    if(intval($produto->codigo)%2 == 0){
                        echo "<tr class='par'>";
                        echo "<td class='codprod'>".$produto->codigo."</td>";
                        echo "<td class='nomeprod'>".$produto->nome."</td>";
                        echo "<td class='precoprod'>".$produto->preco."</td>";
                        echo "<td class='qtdprod'>".$produto->quantidade."</td>";
                        echo "</tr>";
                    } else {
                        echo "<tr class='impar'>";
                        echo "<td class='codprod'>".$produto->codigo."</td>";
                        echo "<td class='nomeprod'>".$produto->nome."</td>";
                        echo "<td class='precoprod'>".$produto->preco."</td>";
                        echo "<td class='qtdprod'>".$produto->quantidade."</td>";
                        echo "</tr>";
                    }
                }
                echo "</table>";

            ?>
        </div>
    </main>
</body>
</html>