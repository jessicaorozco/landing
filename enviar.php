<?php

$message = '';

function clean_text($string)
{
$string = trim($string);
$string = stripslashes($string);
$string = htmlspecialchars($string);
return $string;
}
$name  = ($_POST['name']); 
$typedoc  = ($_POST['typedoc']);
$email      = ($_POST['email']);
$numdoc      = ($_POST['numdoc']);
$filedoc      = ($_FILES['filedoc']);
$fileinv      = ($_FILES['fileinv']);
$filefirm      = ($_FILES['filefirm']);
$subject    = "Global Hotelero - CHECK IN";
$text_message    = "Hello $name, <br /><br /> .";     
if(isset($_POST["submit"]))
{
$path = 'src/' . $_FILES['filedoc']['fileinv']['filefirm'];
move_uploaded_file($_FILES['filedoc']['fileinv']['filefirm'], $path);
$message = '
<h3 align="center">Detalles del informe</h3>
<table border="1" width="100%" cellpadding="5" cellspacing="5">
<tr>
<td width="30%">Codigo</td>
<td width="70%">'.$name.'</td>
</tr>
<tr>
<td width="30%">Nombre</td>
<td width="70%">'.$typedoc.'</td>
</tr>
<tr>
<td width="30%">Email</td>
<td width="70%">'.$email.'</td>
</tr>
<td width="30%">Email</td>
<td width="70%">'.$numdoc.'</td>
</tr>

</table>
';

require 'src/PHPMailer.php';

$mail = new PHPMailer;
$mail->IsSMTP(); //Sets Mailer to send message using SMTP
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = '465'; //Sets the default SMTP server port
$mail->SMTPAuth = true; //Sets SMTP authentication.
$mail->Username = 'jessica.orozco@neverbit.com'; //Sets SMTP username
$mail->Password = ''; //Sets SMTP password
$mail->SMTPSecure = ''; //Sets connection prefix. Options are "", "ssl" or "tls"
$mail->From = $email; //Sets the From email address for the message
$mail->FromName = $nombre; //Sets the From name of the message
$mail->AddAddress('@mail.com', 'Global Hotelero'); //Adds a "To" address
$mail->WordWrap = 50; 
$mail->IsHTML(true); //Sets message type to HTML
$mail->AddAttachment($path); //Adds an attachment from a path on the filesystem
$mail->Subject = 'Enviar informe'; //Sets the Subject of the message
$mail->Body = $message; //An HTML or plain text message body
$mail­->SMTPDebug = 2;
if($mail->Send()) //Send an Email. Return true on success or false on error
{
$message = '<div class="alert alert-success">Informe enviado correctamente</div>';
unlink($path);
}
else
{
$message = '<div class="alert alert-danger">Hubo un error al procesar envio</div>';
}
}

?>