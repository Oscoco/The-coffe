<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="../assets/css/categorias-pasteleria.css">
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <title>Coffee Drink | Pasteleria </title>
</head>
 <!--========== HEADER ==========-->
 <header class="header">
        <div class="header__container">
            <img src="./assets/img/example01.jpg" alt="" class="header__img">

            <a href="#" class="header__logo">Coffee | Drink</a>

            <!-- <div class="header__search">
                <input type="search" placeholder="Search" class="header__input">
                <i class='bx bx-search header__icon'></i>
            </div> -->

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>

    <!-- nav -->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" class="nav__link nav__logo">
                  
                    <i class='bx bx-coffee nav__icon' ></i>
                    <span class="nav__logo-name">Coffee </span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Categorias</h3>

                        <a href="../index.html" class="nav__link ">
                            <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name">Home</span>
                        </a>
                        
                        <div class="nav__dropdown ">
                            <a href="../examples/categorias.html" class="nav__link active">
                                <i class='bx bx-category-alt  nav__icon'></i>
                                
                                <span class="nav__name">Categorias</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Panaderia</a>
                                    <a href="#" class="nav__dropdown-item"></a>
                                    <a href="pasteleria.php" class="nav__dropdown-item active">Pasteleria</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="nav__link">
                            <i class='bx bx-cart nav__icon'></i>
                            <span class="nav__name">Mis Compras</span>
                        </a>
                    </div>

                    <div class="nav__items">
                        <h3 class="nav__subtitle">Menu</h3>

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                               
                                <i class='bx bx-cake nav__icon'></i>
                                <span class="nav__name">Promociones</span>
                            </a>
                        </div>

                        <a href="#" class="nav__link">
                            <i class='bx bx-compass nav__icon' ></i>
                            <span class="nav__name">Explorar</span>
                        </a>
                        
                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-coffee  nav__icon'></i>
                                
                                <span class="nav__name">Corporativo</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Corporativo</a>
                                    <a href="#" class="nav__dropdown-item">Sucursales</a>
                                    <a href="#" class="nav__dropdown-item">Contacto</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Contacto</h3>
    
                            <a href="#" class="nav__link active">
                                <i class='bx bxl-whatsapp nav__icon'></i>
                                <span class="nav__name">Whatsapp</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bxl-facebook-square nav__icon'></i>
                                    <span class="nav__name">Facebook</span>
                                </a>
                            </div>
    
                            <a href="#" class="nav__link">
                                <i class='bx bxl-instagram nav__icon'></i>
                                <span class="nav__name">Instagram</span>
                            </a>
                        </div>
                </div>
            </div>
            
            <a href="./login.html" class="nav__link nav__logout">
                <i class='bx bx-log-out nav__icon' ></i>
                <span class="nav__name">Admin</span>
            </a>
        </nav>
    </div>
<body>
    <main>
        <h5><i class='bx bx-home bx__home'></i>  Home  / Categorias /Pasteleria </h5>


    </main>
    <!-- content to categories cake -->
<div class="main_title title-product">
    <h1>Pasteleria</h1>
</div>

<div class="container-categories">
    <div class="categories">
    <?php
            require '../vendor/autoload.php';
            $pelicula = new Thecoffe\Pelicula;
            $info_peliculas = $pelicula->mostrar();
            $cantidad = count($info_peliculas);
            if($cantidad > 0) {
                for($x = 0; $x < $cantidad; $x++){
                    $item = $info_peliculas[$x];
               
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                <?php
                        $foto = '../Upload/'.$item['foto'];
                            if(file_exists($foto)){
                                
                        ?>
                        <div class="product_img">
                            <img src="<?php print $foto;?>">
                        </div>
                        
                        <?php } else {?>
                        SIN FOTO
                        <?php } ?>
                </div>
                <div class="panel-body">
                <h2 class="panel-title"><?php print $item['titulo'] ?></h2>
                    <p class="price">Desde $<?=number_format($item['precio'], 2, '.', '') ?></p>
                    <div class="cart-conten">
                        <a class="btn btn-cart" href="#"><i class='bx bx-cart'></i></a>
                        <a class="btn btn-view" href="#">Ver mas..</a>
                    </div>
                </div>
            </div>

            <?php
                }
            }else{ ?>
                <h4>NO HAY REGISTROS</h4>

                <?php }?>

    </div>
</div>

</body>

<footer class="footer">
    <div class="conten_footer">
        <div class="footer_coffe">
            <h1>Cofee | Drink</h1>
            <br>
            <p>Recuerda que mientras estes aprendiendo no estas fallando</p>
        </div>
       
        <div class="social-media">
            <a href="" class="social"><i class='bx bxl-facebook-square'></i></a>
            <a href="" class="social"><i class='bx bxl-whatsapp'></i></a>
            <a href="" class="social"><i class='bx bxl-instagram'></i></a>
            <h3>Social media</h3> 
            <br>
            <a href="" class="social"><img src="./assets/img/payment.png" alt="" srcset=""></a>

            <h3>Formas de pago</h3>
        </div>
        
    </div>
    <div class="footer-line"></div>
    <div class="footer-creator">Coded with
        <i class='bx bx-heart' ></i> <a class="me" href="https://oscardev.ga/"> oscardev.ga</a></div>
</footer>
</html>

