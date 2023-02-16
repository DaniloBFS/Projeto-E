<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/login.css">
    <link rel="stylesheet" href="Style/menu.css">
    <link rel="stylesheet" href="Style/rodape.css">
    <title>Cadastro</title>
</head>
    <body>
    <?php include("menu.php");?>
        <main class="principal">
            <section class="area_login">
                <div class="login">
                    <div>
                        <img src="img/iconhead.png">
                    </div>
                    <form>
                      <input type="text" name="nome" placeholder="Nome de usuário" autofocus>
                      <input type="password" name="senha" placeholder="Sua senha">
                      <input type="submit" value="entrar">
                    </form>
                    <p>Ainda não possui uma conta?<a href="cadastro.php">Cadastre-se</a></p>
                </div>
            </section> 
        </main>
    <?php include("footer.php");?>
    </body>
</html>