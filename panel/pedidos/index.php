<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
    <title>Coffee Drink | Pedidos  </title>
</head>
<!--========== HEADER ==========-->
<header class="header">
        <div class="header__container">
        <div class="header__username header__img">
        <div class="dropdown">
            <button class="dropbtn"><i class='bx bx-chevron-down'></i></button>
            <div class="dropdown-content">
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
                <a href="#">Salir</a>
            </div>
        </div>
              <img src="../../assets/img/example01.jpg" alt="" class=" header__img"> 
      
        </div>
      
       
            <a href="#" class="header__logo">Coffee | Drink</a>
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>   
        </div>
</header>
<body>
    <!-- nav -->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="" class="nav__link nav__logo">
                  
                    <i class='bx bx-coffee nav__icon' ></i>
                    <span class="nav__logo-name">Admin</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Categorias</h3>

                        <a href="../../panel/dashboard.php" class="nav__link ">
                            <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name">Home - admin</span>
                        </a>
                        
                        

                        <a href="#" class="nav__link">
                            <i class='bx bx-cart nav__icon active'></i>
                            <span class="nav__name">Pedidos</span>
                        </a>
                    </div>

                    <div class="nav__items">
                        <h3 class="nav__subtitle">Menu</h3>

                            <a href="../../panel/pasteles/index.php" class="nav__link">
                                <i class='bx bx-cake nav__icon'></i>
                                <span class="nav__name">Nuevo Pastel</span>
                            </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-coffee nav__icon' ></i>
                            <span class="nav__name">Nuevo cafe</span>
                        </a>
                    </div>

                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Vista</h3>
    
                            <a href="../../index.php" class="nav__link " >
                            <i class='bx bx-store nav__icon' ></i>
                                <span class="nav__name"> Ver - Coffe Drink</span>
                            </a>
                            
                            <a href="index.php" class="nav__link">
                                <i class='bx bx-log-out nav__icon'></i>
                                <span class="nav__name">Log Out</span>
                            </a>
                        </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- End de nav -->
<main>
        <div class="main_title title-product">
            <h1>Coffee Drink | Administrador</h1>
        </div>

    <section>

    <section class="direction_pages">
             <h5><i class='bx bx-home bx__home'></i>  Home  / Pedidos </h5>
        </section>

        <div class="main_title titlt-ten">
            <h1>Lisatado de pedidos</h1>
        </div>


        <section class="conten__pedidos">
            <div>

            </div>
        </section>


    </section>
   
  
</main>


</body>

<a class="back-to-top"><i class='bx bxs-chevron-up'></i></a>
<footer class="footer">
    <div class="conten_footer">
        <div class="footer_coffe">
            <h1>Cofee | Drink</h1>
            <br>
            <p>Recuerda que mientras estes apreniendo no estas fallando</p>
        </div>
       
        <div class="social-media">
            <a href="" class="social"><i class='bx bxl-facebook-square'></i></a>
            <a href="" class="social"><i class='bx bxl-whatsapp'></i></a>
            <a href="" class="social"><i class='bx bxl-instagram'></i></a>
            <h3>Social media</h3> 
            <br>
            <a href="" class="social"><img src="../../assets/img/payment.png" alt="" srcset=""></a>

            <h3>Formas de pago</h3>
        </div>
        
    </div>
    <figure class="footer-line"></figure>
    <div class="footer-creator">Coded with
        <i class='bx bx-heart' ></i> <a class="me" href="https://oscardev.ga/"> oscardev.ga</a></div>
</footer>
<br><br>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../../assets/js/main.js"></script>
</html>
