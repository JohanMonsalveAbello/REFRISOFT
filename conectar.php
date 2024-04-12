<?php
$con=mysqli_connect("localhost","root","","proyectos");

//chec conection
if(mysqli_connect_errno() )
{
    echo"Failed to connect to MSQL: " . mysqli_conect_error();
    exit();
}
?>