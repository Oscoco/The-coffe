<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="./assets/img/coffee-cup.png"> -->
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Coffee Drink | Login</title>
</head>
<body>
<main>
    
<figure class="color-left"></figure>
<figure class="color-right"></figure>

<section class="flex-container">
    <div class="main-content" id="item1">
        <div class="content-titles">
            <h1 class="title-welcome">Bienvenido</h1>
            <h3 class="title-welcome subtitle">Es un gusto tenerte de nuevo.</h3>
        </div>
       <!-- coffee cup -->
        <div class="content-cup">
            <img class="cup" src="../assets/img/tea-cup.gif" alt="">
        </div>
    </div>
    <div class="form-login">
      <div class="form-titles">
        <h1 class="title">Inicia sesión</h1>
        <h3 class="form-subtitle">¿Que agregaremos el dia de hoy?</h3> 
      </div>
       


      <form action="login.php" class="form-group" >
        <div class="input-group">
          <label class="form_label">Usuario</label>
          <input type="text" pattern="[a-z]*" name="username" required>
        </div>

        <div class="input-group">
          <label class="form_label">Contraseña</label>
          <input type="password" name="password" required>
        </div>
        <button type="submit" class="btn-login">Iniciar</button>
      </form>


    </div>
    
</section>

</main>

<script src="../assets/js/main.js"></script>
</body>
</html>