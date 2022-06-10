<?php 
    //para acivar el carrito usamos las sesiones de php hay que activarlas 

    session_start();
    require 'funciones.php';


    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
        require 'vendor/autoload.php';
        $pelicula = new Thecoffe\Pelicula;
        $resultado = $pelicula->mostrarPorId($id);

        if(!$resultado)
            header ('location: examples/Product-null.html');   

        if(isset($_SESSION['carrito'])){// Si el carrito existe
            //si existe en el cariito
            if(array_key_exists('id', $_SESSION['carrito'])){
                actualizarPastel($id);

            }else{
                 //si NO existe en el cariito
                agregarpastel($resultado, $id);
            }

        }else{
            //si el carrito no existe
            agregarpastel($resultado, $id);
        }
        print '<pre>';
        print_r($_SESSION['carrito']);
        die;
    }
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="assets/css/carrito.css">
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <title>Coffee Drink | Carrito </title>
</head>
 <!--========== HEADER ==========-->
 <header class="header">
        <div class="header__container">
            <img src="assets/img/example01.jpg" alt="" class="header__img">

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

                        <a href="index.php" class="nav__link ">
                            <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name">Home</span>
                        </a>
                        
                        <div class="nav__dropdown ">
                            <a href="../examples/categorias.html" class="nav__link">
                                <i class='bx bx-category-alt  nav__icon'></i>
                                
                                <span class="nav__name">Categorias</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Panaderia</a>
                                    <a href="#" class="nav__dropdown-item"></a>
                                    <a href="./pages/pasteleria.php" class="nav__dropdown-item">Pasteleria</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="nav__link active">
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
    
                            <!-- <a href="#" class="nav__link active">
                                <i class='bx bxl-whatsapp nav__icon'></i>
                                <span class="nav__name">Whatsapp</span>
                            </a> -->
                            
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
        <h5><i class='bx bx-home bx__home'></i>  Home  / Carrito </h5>
    <!-- content to list cart cake -->
<div class="main_title title-product">
    <h1>Productos agregados</h1>
</div>

    <section>
        <table>
            <thead>
            <tr>
                <th class="number_col">N°</th>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Relleno</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    if(isset($_POST['carrito']) && !empty($_SESSION['carrito'])){
                        foreach($_POST['carrito'] as $indice => $value){
                ?>
                    <tr>
                        
                    </tr>

                <?php 
                    }
                    }else {
                ?>
                    <tr>
                        <td class="line-col" colspan="7">
                        No hay productos agregados :(
                        </td>
                    </tr>

                <?php 
                    }
                ?>
              
            </tbody>
        </table>
   
    </section>











    </main>
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
            <a href="" class="social"><img src="assets/img/payment.png" alt="" srcset=""></a>

            <h3>Formas de pago</h3>
        </div>
        
    </div>
    <div class="footer-line"></div>
    <div class="footer-creator">Coded with
        <i class='bx bx-heart'></i> <a class="me" href="https://oscardev.ga/"> oscardev.ga</a></div>
</footer>
<br>
</html>

