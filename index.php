<?php 
    session_start();
    require 'funciones.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/main-media.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <title>Coffee | Drink</title>
</head>
<body>
     <!--========== HEADER ==========-->
     <header class="header">
        <div class="header__container">

            <a href="#" class="header__logo">Coffee | Drink</a>
            
            <a href="carrito.php" class="nav__link">
                <i class='bx bx-cart nav__icon'></i>
                <p class="carrito_number"><?php print cantidadPasteles(); ?> </p>
            </a>             

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

                        <a href="index.php" class="nav__link active">
                            <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name">Home</span>
                        </a>
                        
                        <div class="nav__dropdown">
                            <a href="examples/categorias.html" class="nav__link">
                                <i class='bx bx-category-alt  nav__icon'></i>
                                
                                <span class="nav__name">Categorias</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Panaderia</a>
                                    <a href="#" class="nav__dropdown-item"></a>
                                    <a href="pages/pasteleria.php" class="nav__dropdown-item">Pasteleria</a>
                                </div>
                            </div>
                        </div>

                        <a href="carrito.php" class="nav__link">
                            <i class='bx bx-cart nav__icon'></i>
                            <span class="nav__name">Mis Compras </span>
                            <p class="carrito_number"><?php print cantidadPasteles(); ?> </p>
                        </a>
                    </div>

                    <div class="nav__items">
                        <h3 class="nav__subtitle">Menu</h3>

                        <div class="nav__dropdown">
                            <a href="index.php" class="nav__link">
                               
                                <i class='bx bx-cake nav__icon'></i>
                                <span class="nav__name">Promociones</span>
                            </a>
                        </div>

                        <a href="#" class="nav__link">
                            <i class='bx bx-compass nav__icon' ></i>
                            <span class="nav__name">Explorar</span>
                        </a>
                        
                        <div class="nav__dropdown">
                            <a href="examples/sucursal.html" class="nav__link">
                                <i class='bx bx-coffee  nav__icon'></i>
                                
                                <span class="nav__name">Corporativo</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Corporativo</a>
                                    <a href="examples/sucursal.html" class="nav__dropdown-item">Sucursales</a>
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

<!--content product  slider-->



<main>
    <section class="product-slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            </div>
        
            <div class="swiper-pagination"></div>
        </div>
    </section>
  
   
   <div class="main_title">
        <h1>Categorias</h1>
   </div>

   <section class="content_recommendations"> 
    <div class="item">
        <div class="col_item">
            <img class="img-col" src="./assets/img/example01.jpg" alt="" srcset="">
            <div class="content_col">
                <h2 class="content_title">Pasteleria</h2>
                <p class="text-subtitle">Un pedacito de dia</p>
                <a href="pages/pasteleria.php" class="text-subtitle subtitle_view">Ver mas</a>
            </div>
        </div>
    </div>

    <div class="item">
        <div class="col_item">
            <img class="img-col" src="./assets/img/example02.jpg" alt="" srcset="">
            <div class="content_col">
                <h2 class="content_title">Cafeteria</h2>
                <p class="text-subtitle">Para tu mañana</p>
                <p class="text-subtitle subtitle_view">Ver mas</p>
            </div>
        </div>
    </div>

    <div href="" class="item">
        <div class="col_item">
            <img class="img-col" src="./assets/img/pan2.jpg" alt="" srcset="">
            <div class="content_col">
                <h2 class="content_title" >Panaderia</h2>
                <p class="text-subtitle">Un pedacito de dia</p>
                <p class="text-subtitle subtitle_view">Ver mas</p>
            </div>
        </div>
    </div>
   </section>

<!-- product -->
    <div class="main_title title-product">
        <h1>Temporada de Mamá</h1>
    </div>

    <section class="section_product" >
        <div class="season_products">
            <div class="season_content">
                <h1 class="season_title">Un detalle para Mamá</h1>
                <p>Regala bonito detalle para este mes de las madres</p>
                <a href="../examples/Promo.html">
                <button class="btn-banner">Ver mas</button></a>
            </div>
            <div class="img-season">
                <img class="img-season" src="./assets/img/mother.png" alt="" srcset="">
            </div>
        </div>
    </section>
  
    <div class="main_title title-product">
        <h1>Productos Populares</h1>
    </div>

    <section class="conten_product">
        <div class="product">
            <div class="product-content">
                <a href="#" class="content-cake">
                    <img class="product-cake" src="./assets/img/katie-rosario-QNyRp21hb5I-unsplash.jpg" alt="">
                </a>
                <div class="description">
                    <h1>katie rosario</h1>
                    <p class="description-price">Desde $10.99</p>
                    <div class="cart-conten">
                        <!-- <a class="btn btn-cart" href="#"><i class='bx bx-cart'></i></a> -->
                        <a class="btn btn-view" href="pages/pasteleria.php">Ver mas..</a>
                    </div>
                </div>
            </div>

            <div class="product-content">
                <a href="#" class="content-cake">
                    <img class="product-cake" src="./assets/img/unicord.jpg" alt="">
                </a>
                <div class="description">
                    <h1>Special Unicord</h1>
                    <p class="description-price">Desde $19.99</p>
                    <div class="cart-conten">
                        <!-- <a class="btn btn-cart" href="#"><i class='bx bx-cart'></i></a> -->
                        <a class="btn btn-view" href="pages/pasteleria.php">Ver mas..</a>
                    </div>
                </div>
            </div>

            <div class="product-content">
                <a href="#" class="content-cake">
                    <img class="product-cake" src="./assets/img/oreo.jpg " alt="">
                </a>
                <div class="description">
                    <h1>Oreo cute</h1>
                    <p class="description-price">Desde $10.99</p>
                    <div class="cart-conten">
                        <!-- <a class="btn btn-cart" href="#"><i class='bx bx-cart'></i></a> -->
                        <a class="btn btn-view" href="pages/pasteleria.php">Ver mas..</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
   
    <!-- content categories -->
    <div class="main_content">
       
        
        
    </div>

    </section>

</main>

<br></br>
<a class="Whatsapp"><i class='bx bxl-whatsapp' ></i></a>
<a class="back-to-top"><i class='bx bxs-chevron-up'></i></a>
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
<br><br>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>

<script src="./assets/js/swiper.js"></script>

</html>


<?php 
            require 'vendor/autoload.php';
            $pelicula = new Thecoffe\Pelicula;
            
?>