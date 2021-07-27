<?php
$conex= mysqli_connect("localhost","root","","farmacia");
if (!$conex){
    
    echo "Error de conexion";
}
else
{
    $Categoria=$_POST['Categoria'];
        
    $Consultas="INSERT INTO categorias (NombreCat) values ('$Categoria')";
    $Consultas2="SELECT * FROM categorias";
    $verificar =mysqli_query($conex,$Consultas2);

        $ejecutar=mysqli_query($conex,$Consultas);
        if (!$ejecutar){
            echo "No se Guardaron los datos";
        }
        else{
            Echo "Se guardaron Correctamente";
        }

    
}

?>