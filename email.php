<?php

function convertToWindowsCharset($string) {
  $charset =  mb_detect_encoding(
    $string,
    "UTF-8, ISO-8859-1, ISO-8859-15",
    true
  );
 


 
  $string =  mb_convert_encoding($string, "Windows-1252", $charset);
  return $string;
}
$name  = convertToWindowsCharset($_POST['name']);
$email =convertToWindowsCharset($_POST['email']);
$phone =convertToWindowsCharset($_POST['phone']);
$message =convertToWindowsCharset($_POST['message']);
$formcontent="Folgende Angaben haben wir von Ihnen über das Kontaktformular auf unserer Webseite erhalten <br/>
 Von: $name <br/> Name: $name <br/> E-Mail: $email <br/> Telefon: $phone <br/> Ihre Nachricht: $message <br/> 
 Wir werden uns schnellstmöglich mit Ihnen in Verbindung setzen. <br/> Mit freundlichen Gr&uuml;ßen <br/> Swen Berbett <br/> 
 BEO GmbH / India4IT <br/> Tel.: +49(0)7642-9003-43 <br/>
 Fax: +49(0)7642-9003-99 <br/> s.berbett@beo-software.de <br/> www.beo-software.de <br/>	
 www.india4it.de <br/>
<br/>
Firmensitz: Ensisheimer Str. 6 - 8, 79346 Endingen <br/>Amtsgericht: Freiburg, HRB 270261 <br/>	
Geschäftsführer: Clemens Se(x)auer <br/>USt-IdNr. gem&auml;ß § 27a Umsatzsteuergesetz: DE141 939 007 <br/>
";
$recipient = "ridonaberisha@gmail.com,$email";
$subject = "India4IT: Ihre Anfrage über unsere Webseite";
$mailheader = "From: $email \r\n";
$mailheader .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
mail($recipient, $subject,$formcontent, $mailheader) or die("Error!");
?>
