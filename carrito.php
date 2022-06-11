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
            
            <a href="#" class="header__logo">Coffee | Drink</a>

            <a href="carrito.php" class="nav__link">
                <i class='bx bx-cart nav__icon'></i>
                <p class="carrito_number"><?php print cantidadPasteles(); ?> 
            </p>
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
                                    
                                    <a href="./pages/pasteleria.php" class="nav__dropdown-item">Pasteleria</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="nav__link active">
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
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>Total</th>
                      <th>Actalualizar</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
                            $c=0;
                            foreach($_SESSION['carrito'] as $indice => $value){
                                $c++;
                                $total = $value['precio'] * $value['cantidad'];
                      ?>
                        <tr>
                            <form action="actualizar_carrito.php" method="post">
                                <td><?php print $c ?></td>
                                <td class="active"><?php print $value['titulo']  ?></td>
                                <td>
                                    <?php
                                        $foto = 'upload/'.$value['foto'];
                                        if(file_exists($foto)){
                                        ?>
                                        <img src="<?php print $foto; ?>" width="60">
                                    <?php }else{?>
                                        <img src="assets/imagenes/not-found.jpg" width="45">
                                    <?php }?>
                                </td>
                                <td>$<?php print $value['precio']  ?> USD</td>
                                <td class="cantidad_td">
                                <input type="hidden" name="id" class="content-cantidad" value="<?php print $value['id'] ?>">
                                
                                    <input type="number" min="1" max="" name="cantidad" class="cantidad" value="<?php print $value['cantidad'] ?>">
                                </td>
                                <td >
                                    $ <?php print $total  ?> USD
                                </td>
                                <td>
                                   <button class="btn_accion bx-icon">
                                   <i class='bx bx-refresh'></i>
                                   </button>
                                

                                <a href="eliminar_carrito.php?id=<?php print $value['id']?>" class="btn_accion"><i class='bx bx-trash'></i></a>

                                </td>
                            </form>
                        </tr>

                    <?php
                        }
                        }else{
                    ?>
                        <tr>
                            <td colspan="7">NO HAY PRODUCTOS EN EL CARRITO</td>

                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
                <tfoot>
                        <tr>
                            <td colspan="6" class="text-right active">Total: &nbsp;$
                            <?php print calcularTotal(); ?> USD
                            </td>
                            
                            <td><a href="#" class="btn-banner"><i class='bx bxs-credit-card'></i> &nbsp;</i>Pagar</a>
                         </td>
                        </tr>

                </tfoot>
            </table>
            
            <br>
            <div>
                <p> ¡Una recomendación cuando quieras añadir una cantidad mas de tu producto <br> 
                    favorito usa el boton de actualizar para añadir mas!<i class='bx bx-cart'></i></p>
            </div>
            <br>
            <br>
            <div>
                <a href="pages/pasteleria.php" class="btn-banner"> <i class='bx bx-chevron-left'></i>Ver mas productos</a>
            </div>
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

