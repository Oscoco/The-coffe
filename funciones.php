<?php 


function agregarpastel($resultado, $id, $cantidad = 1) {
    $_SESSION['carrito'][$id] = array(
        'id' => $resultado['id'],
        'titulo' => $resultado['titulo'],
        'foto' => $resultado['foto'],
        'precio' => $resultado['precio'],
        'cantidad' => $cantidad
    );

}
function actualizarPastel($id,$cantidad = FALSE) {

//    4:20 ver en el video cap 14
    if ($cantidad){
        $_SESSION['carrito'][$id]['cantidad'] = $cantidad;
    }else{
        $_SESSION['carrito'][$id]['cantidad'] += 1;
    }

}

function calculartotal(){

}

function cantidadPasteles(){

}