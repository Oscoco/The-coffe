<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="assets/css/admin.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
    <title>Coffee Drink | Pasteleria  </title>
</head>


<body>
<main>
        <div class="main_title title-product">
            <h1>Coffee Drink | Comienza a pagar</h1>
        </div>

        <h5><i class='bx bx-home bx__home'></i>  Home  / carrito / Pagos</h5>
             
        <div class="main-btn_content">
            <a class="btn btn_new" href="index.php">
            <i class='bx bx-arrow-back'></i>Volver</a>    
        </div>

        <div class="main_title title-ten main_resgistros">
            <h1>Registra los Datos</h1>
        </div>

        <section class="main_content-edit">
            
            <div class="container-edit">

                <form class="colum" method="POST" action="completar_pedido.php"enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="title_label" for="">Nombre </label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label class="title_label" for="">Apellido </label>
                        <input type="text" class="form-control" name="apellido" required>
                    </div>
                    <div class="form-group">
                        <label class="title_label" for="">Email </label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label class="title_label" for="">Telefono </label>
                        <input type="text" class="form-control" name="telefono" required>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <label class="title_label">Comentario</label>
                        </div>
                        <textarea class="form-control" rows=4 name="comentario"></textarea>
                    </div>

                   

                    <div class="form-group">
                    <button name="accion" class="btn btn btn-enviar" value="Registrar">Enviar</button>
                    <a href="carrito.php" class="btn btn">Cancelar</a>
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
