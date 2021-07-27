<?php
$conex= mysqli_connect("localhost","root","","farmacia");
if (!$conex){
    
    echo "Error de conexion";
}
else
{
    $nombre=$_POST['Categoria'];
    $id=$_POST['ID'];
   
    $Consultas="UPDATE categorias SET NombreCat='$nombre' where IdCat='$id' ";
    $Consultas2="SELECT * FROM categorias Where IdCat='$id'";
    $verificar =mysqli_query($conex,$Consultas2);
   
        $ejecutar=mysqli_query($conex,$Consultas);
        if (!$ejecutar){
            echo "No se Actualizaron los datos";
        }
        else{
            Echo "Se Actualizaron Correctamente";
        }

    
}

?>