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
    $Email=$_POST['Email'];
    $Consultas="UPDATE personal SET IdPer='$Id',TelPer='$Tel',NomPer='$Nombres',ApePer='$Apellidos',DirPer='$Dir',Email='$Email'";
    $Consultas2="SELECT * FROM personal Where IdPer='$Id'";
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