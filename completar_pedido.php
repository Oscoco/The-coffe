<?php 


    session_start();

    if($_SESSION['REQUEST_METHOD'] == 'POST'){

        require 'funciones.php';

        if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){



        }

        $cliente = new Thecoffe\Cliente;

        $_params = array(
            "nombre" => $_POST['nombre'], 
            "apellidos" => $_POST['apellidos'], 
            "emal" => $_POST['emal'], 
            "telefono" => $_POST['telefono'], 
            "comentario" => $_POST['comentario'],
        );
         $cliente_id = $cliente-> registrar($_params);

         $pedido = new Thecoffe\Pedido;


         $_params = array(
            'cliente_id' => $cliente_id,
            'total' => calcularTotal(),
            'fecha' => date('Y-m-d'),
         );


         $pedido_id = $pedido->registrar($params);

        //  if()


    }
 



