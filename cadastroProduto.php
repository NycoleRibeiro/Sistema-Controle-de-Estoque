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
    <main>
        <?php
            require_once('guiaEstoque.php');
        ?>

        <div class="fundoPreto">
            <div class="cadastroWindow">
                <div class="header">
                    <h1>CADASTRAR NOVO PRODUTO</h1>
                </div>
                <a href="guiaEstoque.php">
                    <div class="closeButton">
                        <i class="fas fa-times"></i>
                    </div>
                </a>
                <form action="" method="POST" id="addProd">
                    <table class="addProd">
                        <tr>
                            <td colspan="2">Nome</td>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="inputG" type="text" name="nome" id="nome" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td>Valor</td>
                            <td>Quantidade em Estoque</td>
                        </tr>
                        <tr>
                            <td><input class="inputP" type="text" name="preco" id="preco" placeholder="" required></td>
                            <td><input class="inputP" type="text" name="quantidade" id="quantidade" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="btnSalvar"><button name="cadastrarProduto" class="botaoPreto" type="submit" value="Salvar">Salvar</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

        <?php
            if(isset($_POST['cadastrarProduto'])){
                $nome = $_POST['nome'];
                $preco = $_POST['preco'];
                $quantidade = $_POST['quantidade'];
                $codigo = $empresa->getProdutos();
                $codigo = count($codigo) + 1;

                $produto = new Produto($codigo, $nome, $preco, $quantidade);
                $empresa->adicionaProduto($produto);

                echo "<script>window.location.href='guiaEstoque.php'</script>";
            }
        ?>
    </main>
</body>
</html>