<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$dateSelect = $_POST["dateSelect"];
$serviceSelect = $_POST["serviceSelect"];

$EmailTo = "contacto@fisiokalubi.com.mx";
$Subject = "Nueva solicitud para Agendar desde Fisiokalubi.com.mx";

$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Celular: ";
$Body .= $phone;
$Body .= "\n";

$Body .= "Fecha: ";
$Body .= $dateSelect;
$Body .= "\n";

$Body .= "Servicio: ";
$Body .= $serviceSelect;
$Body .= "\n";

$Body .= "Recuerda, por favor, responder a este cliente a la brevedad. \n";

$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}

?>