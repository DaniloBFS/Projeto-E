<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/iconhead.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="Style/cadastros.css">
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
                      <input type="text" name="nome" placeholder="Digite seu nome" autofocus>
                      <input type="email" name="email" placeholder="Digite seu email">
                      <input type="password" name="senha" placeholder="Digite sua senha">
                      <input type="password" name="senha" placeholder="Repita sua senha">
                      <input type="submit" value="Cadastrar-se">
                    </form>
                </div>
            </section> 
        </main>
        <script src="./Scripts/nav.js"></script>
    <?php include("footer.php");?>
    </body>
</html>