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

        <div class="container"> 

            <div class="contact-form">

                <form action="" method="post" autocomplete="off">
                    <h3 class="title">Cadastro</h3>

                    <div class="input-container">
                        <input type="email" name="email" class="input" />
                        <label for="">Seu email</label>
                        <span>Seu Email</span>
                    </div>
                    
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" />
                        <label for="">Sua senha</label>
                        <span>Sua senha</span>
                    </div>

                    <div class="input-container">
                        <input type="tel" name="phone" class="input" />
                        <label for="">Confirme sua senha</label>
                        <span>Confirme sua senha</span>
                    </div>
        
                    <input type="submit" name="submit" value="Cadastrar" class="btn" />
                    
                
                </form>
            </div>
        </div>

    </main>
    <?php include("footer.php");?>
    <script src="Scripts/workus.js"></script>
    </body>
</html>