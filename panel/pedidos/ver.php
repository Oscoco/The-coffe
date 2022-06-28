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
            <h1>Listado de pedidos</h1>
            <br><br><br>
        </div>

        <a href="index.php">Regresar</a>
        <br>
        <br>
        <a href="javascript:;" id="" >Imprimir</a>
        <br>
        <br>

        <section class="conten__pedidos">
            <?php
                require '../../vendor/autoload.php';
                $id = $_GET['id'];
                $pedido = new Thecoffe\Pedido;

                $info_pedido = $pedido->mostrarPorId($id);

                $info_detalle_pedido = $pedido->mostrarDetallePorIdPedido($id);
            
            ?>
                <fieldset>
                    <legend>informacion de la compra</legend>
                    <div clas="form-group">
                        <label for="">Nombre</label>
                        <input type="text" value="<?php print $info_pedido['nombre']?>" readonly="">
                    </div>
                    <div clas="form-group">
                        <label for="">Apellidos</label>
                        <input type="text" value="<?php print $info_pedido['apellidos']?>" readonly="">
                    </div>
                    <div clas="form-group">
                        <label for="">Email</label>
                        <input type="text" value="<?php print $info_pedido['email']?>" readonly="">
                    </div>
                    <div clas="form-group">
                        <label for="">Fecha</label>
                        <input type="text" value="<?php print $info_pedido['fecha']?>" readonly="">
                    </div>
                    <div clas="form-group">
                        <label for="">Total de la compra</label>
                       <input type="text" value="$<?php print $info_pedido['total']?>" readonly="">
                    </div>




                    <hr>
                    Productos comprados
                    <hr>
                    <section class="conten__pedidos">
            <div>
            <section class="conten__cakes">
            <fileset class="fileset_conten">
                <table class="main_cakes-list">
                    <tbody>
                <tr>
                    <th class="number_col">N°</th>
                    <th>titulo</th>
                    <th>Foto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
                <?php
                    $cantidad = count($info_detalle_pedido);
                    if($cantidad > 0) {
                        $c=0;
                    for($x = 0; $x < $cantidad; $x++){
                        $c++;
                        $item = $info_detalle_pedido[$x];

                        $total = $item['precio'] * $item['cantidad'];
                ?>
                <tr>
                    <td class="number_col"><?php print $c?></td>
                    <td><?php print $item['titulo']?></td>
                    <td>
                        <?php
                            $foto = '../../Upload/'.$item['foto'];
                            if(file_exists($foto)){
                                
                        ?>
                        <img  src="<?php print $foto;?>" width="35">
                        <?php } else {?>
                        SIN FOTO
                        <?php } ?>
                    </td>
                    <td>$<?php print $item['precio']?></td>
                    <td><?php print $item['cantidad']?></td>
                    <td>$<?php print $total?></td>
                
                </tr>

                <?php 
                }
                    }else{

                ?>
                <tr>
                    <td colspan="6">No existe ningun registro</td>
                </tr>
                
                <?php } ?>
                    </tbody>
                </table>
                <br><br>
                <div clas="form-group">
                        <label for="">Total de la compra</label>
                       <input type="text" value="$<?php print $info_pedido['total']?>" readonly="">
                    </div>
            </fileset>
        </section>

                </fieldset>
        
        </section>


    </section>
   
  
</main>


</body>

<a class="back-to-top"><i class='bx bxs-chevron-up'></i></a>
<br><br>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../../assets/js/main.js"></script>
</html>
