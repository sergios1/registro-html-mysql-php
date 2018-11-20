<?php
     $nombre = $_POST['nombre'];
     $apellidos = $_POST['apellidos'];
     $cargo = $_POST['cargo'];
     $reqlen =strlen($nombre) *strlen($apellidos) * strlen($cargo);
     if($reqlen > 0){
require("connectdb.php");
      mysqli_query($link,"INSERT INTO registro VALUES('','$nombre','$apellidos','$cargo')");
       mysqli_close($link);
                      echo 'guardado exitosamente';
           }else{
           echo 'por favor, llene todos los campos';
}
?>