<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
    <title>Coffee Drink | Pasteleria  </title>
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
                        
                        

                        <a href="../../panel/pedidos/index.php" class="nav__link">
                            <i class='bx bx-cart nav__icon'></i>
                            <span class="nav__name">Pedidos</span>
                        </a>
                    </div>

                    <div class="nav__items">
                        <h3 class="nav__subtitle">Menu</h3>

                       
                            <a href="#" class="nav__link active">
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
                            <h3 class="nav__subtitle">Vista </h3>
    
                            <a href="../../index.php" class="nav__link" >
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

        <h5><i class='bx bx-home bx__home'></i>  Home  / Pasteleria / Agregar Nuevo</h5>
             
        <div class="main-btn_content">
            <a class="btn btn_new" href="../../panel/pasteles/index.php">
            <i class='bx bx-arrow-back'></i>Volver</a>    
        </div>

        <div class="main_title title-ten main_resgistros">
            <h1>Registra los Datos</h1>
        </div>

        <section class="main_content-edit">
            
            <div class="container-edit">
                <form class="colum" method="POST" action="../acciones.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="title_label" for="">Titulo </label>
                        <input type="text" class="form-control" name="titulo" required>
                    </div>
                        
                    <div class="form-group">
                        <div class="">
                            <span class="title_label">Descripcion</span>
                        </div>
                        <textarea class="form-control" name="descripcion"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="title_label" >Relleno</label>
                        <select class="form-select" name="categoria_id" required>
                            <option value="">Select</option>
                            <?php 
                            require '../../vendor/autoload.php';
                            $categoria = new Thecoffe\Categoria;
                            $info_categoria = $categoria->mostrar();
                            $cantidad = count($info_categoria);

                                for($x =0; $x< $cantidad; $x++) {
                                    $item = $info_categoria[$x];

                            ?>
                                <option value="<?php print $item['id']?>"><?php print $item['nombre'] ?></option>  
                            <?php 


                                }
                            ?>
                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label  class="title_label" for="">Precio </label>
                        <input type="number" step="any" max="200" min="0" name="precio" placeholder="$ 0.00" required>
                    </div>

                    <div class="form-group">
                    <label for="">Selecciona una imagen</label>
                        <input type="file" name="foto" class="" accept="image/png, image/gif, image/jpeg" required>
                    </div>

                    <div class="form-group">

                
                    <button name="accion" class="btn btn btn-enviar" value="Registrar">Enviar</button>
                    <a href="index.php" class="btn btn">Cancelar</a>
                    </div>
                </form>
            </div>
        </section>
    
  
</main>

<br><br><br><br>

</body>


<a class="back-to-top"><i class='bx bxs-chevron-up'></i></a>
<footer>
    <div class="footer-creator">Coded with
        <i class='bx bx-heart' ></i> <a class="me" href="https://oscardev.ga/"> oscardev.ga</a>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../../assets/js/main.js"></script>
</html>
