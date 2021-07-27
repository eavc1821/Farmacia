<?php
$conex= mysqli_connect("localhost","root","","farmacia");
if (!$conex){
    
    echo "Error de conexion";
}
else
{
    $id=$_POST['ID'];
    $Nombre=$_POST['Empresa'];
    $Tel=$_POST['Telefono'];
    $Dir=$_POST['Direccion'];
    $Consultas="UPDATE proveedores Set NomEmp='$Nombre',TelEmp='$Tel',DirEmpresa='$Dir' where IdProv = '$id'";
    $Consultas2="SELECT * FROM proveedores Where IdProv = '$id'";
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