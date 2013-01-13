<?php
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $mail = $_POST['mail'];
   
    //sleep(3);//para controlar el tiempo que se demora;

    if($nombre!="" && $mensaje !="" && $mail !=""){
          echo "Correcto";
    }else{
    	  echo "Incorrecto";
    }
?>