
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="/Projeto-E/img/iconhead.png">
        <link rel="stylesheet" href="./Style/header.css">
        <link rel="stylesheet" href="./Style/slideshow.css">
        <link rel="stylesheet" href="./Style/banner.css">
        <link rel="stylesheet" href="./Style/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="/Projeto-E/Style/carousel.css">
        <title>No Caminho do Êxito</title>
    </head>

        <body>

                <!--Header-->
                <?php include("menu.php");?>
                

                <main class="main_wrapp">
                    <section class="banner">

                        <div class="banner_area">
                        <!-- <h2>Bem vindo ao Caminho do Êxito</h2>-->
                        </div>
                        
                        <div class="content_area">
                            <div class="content_wrapper">
                                    
                                    <h2>Bem vindo...</h2>
                                    <p>
                                        Deixe-me nos apresentar primeiro e te levar nesse caminho de Êxito. Haha! É apenas um trocadilho que temos. 
                                        <br><br>
                                        Em primeiro passo nessa jornada devo lhe dizer o que somos: um grupo que se consolida dentro do mercado corporativo como distribuidora de produtos e serviços, sempre atendendo com cuidado e proatividade e obtendo êxito em seus objetivos. Através de um contato rápido e sem burocracias que facilita a compra conosco. Temos a missão de distribuir com valores acessíveis para pequenos, médios e grandes comércios.
                                        <br><br>                                    
                                        Permita-me lhe apresentar um pouco dos nossos produtos:
                                    </p>

                                        <!--SLIDESHOW-->
                                        <div class="wrapper_carousel"> 
                            
                                            <i id="left" class="fa-solid fa-angle-left"></i>
                                            <div class="carousel">
                                                <img src="/Projeto-E/img/BevBox.png" alt="imagem" draggable="false">
                                                <img src="/Projeto-E/img/empresa1.jpeg" alt="imagem" draggable="false">
                                                <img src="/Projeto-E/img/BevBox.png" alt="imagem" draggable="false">
                                                <img src="/Projeto-E/img/BevBox.png" alt="imagem" draggable="false">
                                                <img src="/Projeto-E/img/BevBox.png" alt="imagem" draggable="false">
                                                <img src="/Projeto-E/img/BevBox.png" alt="imagem" draggable="false">
                                            </div>
                                            <i id="right" class="fa-solid fa-angle-right"></i>
                                
                                        </div>
                
                                    </main>   

                            </div>

                        </div>
        
                    </section>

                     
                
                    <!--Footer-->    
                    <?php include("footer.php");?>


        <script src="https://kit.fontawesome.com/ca14b9e588.js" crossorigin="anonymous"></script>
        <script src="./Scripts/nav.js"></script>
        <script src="./Scripts/carousel.js"></script>
    </body>
</html>