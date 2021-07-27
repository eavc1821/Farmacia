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
   
    $Consultas="INSERT INTO clientes(IdCli,TelCli,NomCli,ApeCli,DirCli) values ('$Id','$Tel','$Nombres','$Apellidos','$Dir')";
    $Consultas2="SELECT * FROM clientes Where IdCli='$Id'";
    $verificar =mysqli_query($conex,$Consultas2);
  
        $ejecutar=mysqli_query($conex,$Consultas);
        if (!$ejecutar){
            echo $Consultas;
        }
        else{
            Echo "Se guardaron Correctamente";
        }

    
}

?>