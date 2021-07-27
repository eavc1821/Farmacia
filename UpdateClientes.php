<?php
$conex= mysqli_connect("localhost","root","","farmacia");
if (!$conex){
    
    echo "Error de conexion";
}
else
{
    $Id=$_POST['Id'];
    $Tel=$_POST['Telefono'];
    $Nombres=$_POST['Nombres'];
    $Apellidos=$_POST['Apellidos'];
    $Dir=$_POST['Direccion'];
    
    $Consultas="UPDATE clientes SET IdCli='$Id',TelCli='$Tel',NomCli='$Nombres',ApeCli='$Apellidos',DirCli='$Dir'";
    $Consultas2="SELECT * FROM clientes Where IdCli='$Id'";
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