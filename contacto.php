<?php
/**
 * Created by PhpStorm.
 * User: claudia
 * Date: 8/9/2016
 * Time: 6:27 PM
 */

/**aqui faltan cosas porque quiero guardar en la base de datos las personas que lo contactan
eso sera luego cuando el me de el nuevo orden de la informacion y yo reprograme el script

otra cosa me parece que esto esta demasiado simple, como se que el mensaje se envio correctamente? no hay forma de comprobarlo?

*/


$correoDeKako="escalona.marti@gmail.com";


if(isset($_POST ["nombre"]))

{

    $nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$email = $_POST["email"];
	$mensaje = $_POST["message"];

}

$From="www.kakoescalona.com";
$asunto=$nombre . $apellidos . "Te ha enviado un mensaje";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;";
$headers .= "charset=iso-8859-1\r\n";
$headers .= "From: ".$From." \r\n";

mail($correoDeKako,$asunto,$mensaje,$headers);



