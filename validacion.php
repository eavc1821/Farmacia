<?php

$conexion=mysqli_connect("localhost","root","","farmacia");

$usuario=$_POST['usuario'];
$contra=$_POST['password'];

session_start();

if(isset($_GET['cerrar_session'])){

    session_unset();

    session_destroy();
}

if(isset($_SESSION['rol'])){

    switch($_SESSION['rol']){

        case 1:
            header('location:index.php');
        break;

        case 2:
            header('location:login.php');
        break;

        default:
    }
}

if(isset($_POST['usuario']) && isset($_POST['password'])){
    $usuario = $_POST['usuario'];
    $contra = $_POST['password'];

    /*$conexion = new Database();*/
    $query = $conexion->connect()->prepare('SELECT*FROM usuario WHERE usuario = :usuario AND password = :contra');
    $query->execute(['usuario' => $usuario, 'password' => $contra]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if($row == true){
        $rol = $row[2];
        $_SESSION['rol'] = $rol;

        switch($_SESSION['rol']){

            case 1:
                header('location:index.php');
            break;
    
            case 2:
                header('location:login.php');
            break;
    
            default:
        }

    }
    else{
        echo "El usuario o contra son incorrectos";
    }
}

?>