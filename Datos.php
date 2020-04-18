<?php
$nombre_formu=$_POST['nombre'];
$apellido_formu=$_POST['apellido'];
$correo_formu=$_POST['correo'];
$mensaje_formu=$_POST['mensaje'];

$cuerpo_mail="Nombre: ".$nombre_formu." ".$apellido_formu."\r\n"."Correo: ".$correo_formu."\r\n"."Mensaje: ".$mensaje_formu;

$respuesta="De: $nombre_formu $apellido_formu <$correo_formu>";

mail("lucaschaparro@live.com", "Consulta desde la pagina", $cuerpo_mail, $respuesta);

$datos_conexion=mysqli_connect("https://databases-auth.000webhost.com/", "id12459538_chaparro", "Lucaschaparro_123", "id12459538_lucas") or die ("Error en la conexion");

mysqli_query($datos_conexion, "INSERT INTO consulta VALUES (DEFAULT, '$nombre_formu', '$apellido_formu', '$correo_formu', '$mensaje_formu')");

header("Location: Mensaje_Enviado.php");
?>

