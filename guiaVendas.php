<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vendastyle.css">
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
            <form class="pesquisa" action="" method="POST">
                <input type="text" name="codigo" id="codigoVenda" placeholder="Cód. do Produto">
                <button name="adicionarProduto" class="btn_busca" type="submit">
                <i class="fas fa-plus-circle"></i>
                </button>
                <?php
                    require_once 'classes.php';

                    
                ?>
            </form>

            <?php
                $listaProdutos = [
                    (object)["codigo" => "1", "nome" => "Produto 1", "preco" => "10,00", "data" => "01/01/2020"],
                    (object)["codigo" => "2", "nome" => "Produto 2", "preco" => "20,00", "data" => "02/01/2020"],
                    (object)["codigo" => "3", "nome" => "Produto 3", "preco" => "30,00", "data" => "03/01/2020"],
                    (object)["codigo" => "4", "nome" => "Produto 4", "preco" => "40,00", "data" => "04/01/2020"],
                    (object)["codigo" => "5", "nome" => "Produto 5", "preco" => "50,00", "data" => "05/01/2020"],
                    (object)["codigo" => "6", "nome" => "Produto 6", "preco" => "60,00", "data" => "06/01/2020"],
                    (object)["codigo" => "7", "nome" => "Produto 7", "preco" => "70,00", "data" => "07/01/2020"],
                    (object)["codigo" => "8", "nome" => "Produto 8", "preco" => "80,00", "data" => "08/01/2020"],
                    (object)["codigo" => "9", "nome" => "Produto 9", "preco" => "90,00", "data" => "09/01/2020"],
                    (object)["codigo" => "10", "nome" => "Produto 10", "preco" => "100,00", "data" => "10/01/2020"],
                    (object)["codigo" => "11", "nome" => "Produto 11", "preco" => "110,00", "data" => "11/01/2020"],
                    (object)["codigo" => "12", "nome" => "Produto 12", "preco" => "120,00", "data" => "12/01/2020"],
                    (object)["codigo" => "13", "nome" => "Produto 13", "preco" => "130,00", "data" => "13/01/2020"],
                    (object)["codigo" => "14", "nome" => "Produto 14", "preco" => "140,00", "data" => "14/01/2020"],
                    (object)["codigo" => "15", "nome" => "Produto 15", "preco" => "150,00", "data" => "15/01/2020"],
                    (object)["codigo" => "16", "nome" => "Produto 16", "preco" => "160,00", "data" => "16/01/2020"],
                ];
                echo "<table class='listaProdutos'>";
                echo "<tr>";
                echo "<th class='codprod'>Código</th>";
                echo "<th class='nomeprod'>Nome</th>";
                echo "<th class='precoprod'>Preço</th>";
                echo "<th class='qtdprod'>Data</th>";
                echo "</tr>";
                foreach($listaProdutos as $produto){
                    if(intval($produto->codigo)%2 == 0){
                        echo "<tr class='par'>";
                        echo "<td class='codprod'>".$produto->codigo."</td>";
                        echo "<td class='nomeprod'>".$produto->nome."</td>";
                        echo "<td class='precoprod'>".$produto->preco."</td>";
                        echo "<td class='qtdprod'>".$produto->data."</td>";
                        echo "</tr>";
                    } else {
                        echo "<tr class='impar'>";
                        echo "<td class='codprod'>".$produto->codigo."</td>";
                        echo "<td class='nomeprod'>".$produto->nome."</td>";
                        echo "<td class='precoprod'>".$produto->preco."</td>";
                        echo "<td class='qtdprod'>".$produto->data."</td>";
                        echo "</tr>";
                    }
                }
                echo "</table>";

            ?>
        </div>
    </main>
</body>
</html>