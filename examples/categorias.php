<?php 
    session_start();
    require '../funciones.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/base.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
    <title>Coffe | Categorias</title>
</head>
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

                    <a href="../index.php" class="nav__link ">
                        <i class='bx bx-home nav__icon' ></i>
                        <span class="nav__name">Home</span>
                    </a>
                    
                    <div class="nav__dropdown ">
                        <a href="../examples/categorias.php" class="nav__link active">
                            <i class='bx bx-category-alt  nav__icon'></i>
                            
                            <span class="nav__name">Categorias</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="#" class="nav__dropdown-item">Cafeteria</a>
                                <a href="#" class="nav__dropdown-item"></a>
                                <a href="../pages/pasteleria.php" class="nav__dropdown-item">Pasteleria</a>
                            </div>
                        </div>
                    </div>

                    <a href="../carrito.php" class="nav__link">
                        <i class='bx bx-cart nav__icon'></i>
                        <span class="nav__name">Mis Compras </span>
                            <p class="carrito_number"><?php print cantidadPasteles(); ?> </p>
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

                    <a href="https://oscoco.github.io/Working-on-it/" class="nav__link">
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
                                <a href="" class="nav__dropdown-item">Corporativo</a>
                                <a href="" class="nav__dropdown-item">Sucursales</a>
                                <a href="" class="nav__dropdown-item">Contacto</a>
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







<body>
    <h5><i class='bx bx-home bx__home'></i>  Home  / Categorias </h5>
</body>
</html>