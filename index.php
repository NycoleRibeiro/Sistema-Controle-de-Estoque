<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <header>
        <img src="Imagens/logo.png"></img>
    </header>

    <main>
        <div class="pop">
            <div class="title">
                <h1>DADOS</h1>
            </div>
            <div class="content">
                <form action="" method="post">
                    <p>Login</p>
                    <input type="text" id="login" name="login" placeholder="Nome da Empresa" required>
                    <p>Senha</p>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                    <input name="loginButton" class="btn_ok" value="Logar" type="submit">
                </form>
            </div>
        </div>
    </main>
    <?php
        require_once 'classes.php';

        if(isset($_POST['loginButton'])){
            $login = $_POST['login'];
            $senha = $_POST['senha'];

            $empresa = new Estoque($login);

            if($login == $senha){
                echo "<script>window.location.href='guiaEstoque.php'</script>";
            }else{
                echo "<script>alert('Login ou senha incorretos')</script>";
            }
        }
    ?>
</body>
</html>