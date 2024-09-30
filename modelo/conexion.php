<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    //Parametros de conexion a la BD
    DEFINE('USER', 'root');
    DEFINE('PW', '');
    DEFINE('HOST', 'localhost');
    DEFINE('BD', 'bd_zapatería');

    //conexión a la BD
    //$conexion = mysqli_connect(HOST, USER, PW, BD);
    $conexion = mysqli_connect('localhost', 'root', '', 'bd_zapateria');

    //Establecer caracteres para el hosting
    //mysqli_set_charset($conexion, "utf8mb4");

    //verificamos la conexion con la BD
    if(!$conexion)
    {
        die("La conexión a la BD falló: ". mysqli_error($conexion));
    }
    /*else
    {
        die("conexion exitosa a la BD");
    }*/

?>