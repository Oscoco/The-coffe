
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
                <p class="carrito_number"></p>
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
                            <p class="carrito_number"> </p>
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
<br><br>
   <div>
    <h1>
        Gacias por tu compra c:
    </h1>
    <br><br>

    <a class="btn "href="index.php">
        <h1>Volver a casa </h1>
    </a>

   </div>
  



</main>

<br></br>
<a class="Whatsapp"><i class='bx bxl-whatsapp' ></i></a>
<a class="back-to-top"><i class='bx bxs-chevron-up'></i></a>
</body>


<br><br>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>

<script src="./assets/js/swiper.js"></script>

</html>
