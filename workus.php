<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = $email;
    $subject = $message;

    $message = "Name: {$username} Email: {$email} Phone: {$phone}  Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: nocaminhodoexitoti@gmail.com';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
  }
?>

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
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
    <title>Trabalhe Conosco</title>
</head>

    <body>
    <?php include("menu.php");?>

        <main class="principal">

        <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <br>
          <h3 class="title">Fale Conosco!</h3>
          
          <p class="text"></p>

          <br><br>
          <div class="info">
            <div class="information">
              <img src="img/contato/location.png" class="icon" alt="" />
              <p>Rua Frei Caneca, 1246, Bairro Consolação - São Paulo</p>
            </div>
            <div class="information">
              <img src="img/contato/email.png" class="icon" alt="" />
              <p>nocaminhodoexitoti@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/contato/phone.png" class="icon" alt="" />
              <p>(11) 93085-8585</p>
            </div>
          </div>

          <div class="social-media">
            <p>Se conecte com a gente :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/profile.php?id=100089795936303">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.tiktok.com/@nocaminhodoexito?lang=pt-BR">
                <i class="fab fa-tiktok"></i>
              </a>
              <a href="https://www.instagram.com/exito_ltda/">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/company/%C3%AAxito-ltda/?viewAsMember=true">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="post" autocomplete="off">
            <h3 class="title">Nos mande uma mensagem</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Usuário</label>
              <span>Usuário</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Telefone</label>
              <span>Telefone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Mensagem</label>
              <span>Mensagem</span>
            </div>
            <input type="submit" name="submit" value="Enviar" class="btn" />
          </form>
        </div>
      </div>
    </div>

    </main>
     

    </body>
    <script src="Scripts/workus.js"></script>
    <script src="Scripts/nav.js"></script>
</html>