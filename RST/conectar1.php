<?php
$enlace = mysqli_connect("localhost","root","","proyectos");


if(!$enlace){
    echo"Error: no se pudo conectar a MSQL". PHP_EOL;
    echo "Error de depuracion" . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuracion" . mysqli_conect_error() . PHP_EOL;
    exit;
}

echo"Exito: se realizo una conexion apropiada a MSQL! la base de datos mi_bd es genial." . PHP_EOL;
echo"informacion del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
mysqli_close($enlace)
?>