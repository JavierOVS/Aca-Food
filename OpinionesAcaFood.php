<?php
     //conexion de la base de datos y el servidor
$conectar=@mysql_connect('localhost', 'root','');
//verificar la conexion
if(!$conectar){
    echo"NO SE PUEDE CONECTAR CON EL SERVIDOR";
}else{
    $base=mysql_select_db('formulario');
    if(!$base){
        echo"NO SE ENCONTRO LA BASE DE DATOS";
    }
}
// RECUPERAR LAS VARIABLES
$name=$_POST['name'];
$email=$_POST['email'];
$find=$_POST['find'];
$message=$_POST['message'];

//HACEMOS LA SENTENCIA EN SQL
$sql="INSERT INTO datos VALUES ('$name',
                                '$email',
                                '$find',
                                '$message')";
//ejecutamos la sentencia sql
$ejecutar=mysql_query($sql);
//vereficamos la ejecuacion
if(!$ejecutar){
    echo"HUBO ALGUN ERROR";
}else{
    echo"DATOS GUARDADOS CORRECTAMENTE<br><a href='index.html'>VOLVER</a>";
}
?>