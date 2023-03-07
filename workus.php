<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/iconhead.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="Style/workus.css">
    <link rel="stylesheet" href="Style/rodape.css">
    <link rel="stylesheet" href="Style/menu.css">
    <title>Document</title>
</head>
    <body>
    <?php include("menu.php");?>






        <main class="principal">
            <div class="work_container"> 
                <h1>Nos contate!</h1>
                <p>Se sinta livre para nos mandar uma mensagen!</p>
                
                <form action="mail.php" method="POST">    
                    <label for="nome">Seu nome: </label>
                    <input type="text" name="nome" id="nome">
                    <label for="email">Seu email: </label>
                    <input type="email" name="email" id="email">
                    <label for="assunto">Assunto: </label>
                    <input type="text" name="assunto" id="assunto">
                    <label for="message">Mensagem: </label>
                    <textarea name="message" cols="30" rows="10"></textarea>
                    <input type="submit" onclick="emailFunc()" value="Enviar">
                </form>                    
                    
            </div>
        </main>






        <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="Scripts/email.js"></script>
    <?php include("footer.php");?>
    </body>

</html>