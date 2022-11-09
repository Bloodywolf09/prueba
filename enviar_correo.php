<?php
$tipo_persona=$_POST["group1"];
$corandes="contacto@corandes.co";

if($tipo_persona == "natural"){

    $nombre = $_REQUEST["nombre"];
    $telefono =$_REQUEST["telefono"];
    $email = $_REQUEST["email"];
    $descripcion = $_REQUEST["descripcion"];

}else if($tipo_persona == "empresa"){

    $nombre = $_REQUEST["nombre"];
    $nombrePer = $_REQUEST["nombrePer"];
    $telefonoContacto = $_REQUEST["telefonoContacto"];
    $email = $_REQUEST["emailEmp"];
    $descripcion = $_REQUEST["descripcionEmpresa"];
 
}



 //Capturo los datos enviados por POST desde el formulario
 //$email               = $_REQUEST["email"]; 
 //$nombreCompleto      = $_REQUEST["nombre"];
 $desdEmail           = 'contacto@corandes.co'; 

 //Construyo el cuerpo del mensaje    
 
 if($tipo_persona == "natural"){
     $message            = "Nombre: " . $nombre . "\n";
     $message            = $message . "Email: " . $email . "\n";
     $message            = $message . "Telefono: " . $telefono . "\n";
     $message            = $message . "Descripcion: " . $descripcion . "\n";
 
 }else if($tipo_persona == "empresa"){
     $message            = "Nombre Empresa: " . $nombre . "\n";
     $message            = $message . "Email: " . $email . "\n";
     $message            = $message . "Telefono Contacto: " . $telefonoContacto . "\n";
     $message            = $message . "Descripcion: " . $descripcion . "\n";
 }

 //Obtener datos del archivo subido 
 if($tipo_persona == "natural"){
    $file_tmp_name      = $_FILES['hojavida']['tmp_name'];
    $file_name          = $_FILES['hojavida']['name'];
    $file_size          = $_FILES['hojavida']['size'];
    $file_type          = $_FILES['hojavida']['type'];
}else if($tipo_persona == "empresa"){
    $file_tmp_name      = $_FILES['brochure']['tmp_name'];
    $file_name          = $_FILES['brochure']['name'];
    $file_size          = $_FILES['brochure']['size'];
    $file_type          = $_FILES['brochure']['type'];
}
    
 //Leer el archivo y codificar el contenido para armar el cuerpo del email
 $handle              = fopen($file_tmp_name, "r");
 $content             = fread($handle, $file_size);
 fclose($handle);
 $encoded_content     = chunk_split(base64_encode($content));

 $boundary            = md5("pera");

 //Encabezados
 $headers             = "MIME-Version: 1.0\r\n"; 
 $headers            .= "From:".$email."\r\n"; 
 $headers            .= "Reply-To: ".$desdEmail."" . "\r\n";
 $headers            .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
 //Texto plano
 $body               = "--$boundary\r\n";
 $body               .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
 $body               .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
 $body               .= chunk_split(base64_encode($message)); 
        
 //Adjunto
 $body               .= "--$boundary\r\n";
 $body               .="Content-Type: $file_type; name=".$file_name."\r\n";
 $body               .="Content-Disposition: attachment; filename=".$file_name."\r\n";
 $body               .="Content-Transfer-Encoding: base64\r\n";
 $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
 $body               .= $encoded_content; 
    
 $subject            = "Trabaja con CORANDES";
 
 //Enviando el mail
 $sentMail = mail($corandes, $subject, $body, $headers);
 if($sentMail){       
     echo"<script> window.alert('Correo enviado'); </script>
     <script> location.replace('https://corandes.co'); </script>
     ";
 }else{
    echo"<script> window.alert('Error al enviar el correo'); </script>";
 }  