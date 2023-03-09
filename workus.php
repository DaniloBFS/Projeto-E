<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/iconhead.png">
    <link rel="stylesheet" href="Style/workus.css">
    <link rel="stylesheet" href="Style/footer.css">
    <link rel="stylesheet" href="Style/menu.css">
    <title>Document</title>
</head>
    <body>
    <?php include("menu.php");?>

        <main class="principal">
            <div class="work_container">
                <div class="contact_box">
                    <form class="contact_form" action="#">      
                        <div class="input">        
                            <h2>Trabalhe Conosco</h2>
                            <input type="text" name="name" class="field name" placeholder="Seu Nome">
                            <input type="email" name="email" class="field email" placeholder="Seu Email">
                            <input type="text" class="field tel" placeholder="Seu Telefone">
                            <textarea name="message" class="field msg" placeholder="Digite sua mensagem"></textarea>
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="Scripts/email.js"></script>
    <?php include("footer.php");?>
    </body>

</html>