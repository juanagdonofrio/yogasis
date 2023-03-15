<?php 
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];
//conexión base de datos
// $conexion = mysqli_connect("localhost", "root", "", "programador_web_282") or exit("No se pudo conectar a base de datos");
//conexión al servidor
$conexion = mysqli_connect("localhost", "id20263534_consultas", "Aa123456789!", "id20263534_programador_web_282") or exit("No se pudo conectar a base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$correo_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: contacto.php?ok")
// contraseña base   Tjt{@T\6)&r|k*cD
?>