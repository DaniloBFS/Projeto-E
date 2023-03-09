
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/prod2.css">
    <title>Produtos Êxito</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="img/iconhead.png">
    <link rel="stylesheet" href="Style/rodape.css">
    <link rel="stylesheet" href="Style/menu.css">
</head>

<body>
<?php
    include('menu.php');
?>
    <div class="main_wrapper">
        <div class="container">
            <div class="main_title">
                <h1>Êxito Shop List</h1>
            </div>
            <div class="display_style_btn">
                <button type="button" id="grid_active_btn">
                    <i class="fas fa-th"></i>
                </button>
                <button type="button" id="details_active_btn">
                    <i class="fas fa-list-ul"></i>
                </button>
            </div>
            <div class="item_list">
                
                <div class="item">
                    <div class="item_img">
                        <img src="img/prod_s_fundo/agua-510ml-monteiro-lobato-un-removebg-preview.png">
                        <!--div class="icon_list">
                            <button type="button">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <button type="button">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button type="button">
                                <i class="far fa-heart"></i>
                            </button>
                        </div-->
                    </div>
                    <div class="item_detail">
                        <a href="contato.php" class="item_name"> BevBox</a>
                        <div class="item_price">
                            <span class="new_price">R$ 1,60</span>
                            <span class="old_price">R$ 4,00</span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <button type="button" class="add_btn" href="contato.php">Adquira</button>
                    </div>
                </div>
                <div class="item">
                    <div class="item_img">
                        <img src="img/prod_s_fundo/agua-510ml-monteiro-lobato-un-removebg-preview.png">
                        <!--div class="icon_list">
                            <button type="button">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <button type="button">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button type="button">
                                <i class="far fa-heart"></i>
                            </button>
                        </div-->
                    </div>
                    <div class="item_detail">
                        <a href="contato.php" class="item_name"> BevBox</a>
                        <div class="item_price">
                            <span class="new_price">R$ 00,00</span>
                            <span class="old_price">R$ 20,00</span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <button type="button" class="add_btn" href="contato.php">Adquira</button>
                    </div>
                </div>

                
              
        </div>
    </div>
    <script src="Scripts/script_details_prod.js"></script>
    <script src="Scripts/nav.js"></script>
    <?php
        include('footer.php');
    ?>
</body>

</html>