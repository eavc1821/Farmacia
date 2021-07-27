
<?php
$conex= mysqli_connect("localhost","root","","farmacia");
if (!$conex){
    
    echo "Error de conexion";
}
else
{
    $Nombre=$_POST['Empresa'];
    $Tel=$_POST['Telefono'];
    $Dir=$_POST['Direccion'];
    $Consultas="INSERT INTO proveedores(NomEmp,TelEmp,DirEmpresa) values ('$Nombre','$Tel','$Dir')";
    $Consultas2="SELECT * FROM proveedores Where NomEmp='$Nombre'";
    $verificar =mysqli_query($conex,$Consultas2);
    if (mysqli_num_rows($verificar)>0){
        echo "El producto ya esta registrado";
    }
    else{
        $ejecutar=mysqli_query($conex,$Consultas);
        if (!$ejecutar){
            echo "No se Guardaron los datos";
        }
        else{
            Echo "Se guardaron Correctamente";
        }

    }
}

?>