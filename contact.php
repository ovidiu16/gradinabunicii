<?php


$EmailFrom = "Contact";
$EmailTo = "campan_ovidiu2008@yahoo.com";
$Subject = "Contact";
$Nume = Trim(stripslashes($_POST['Nume'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Mesaj = Trim(stripslashes($_POST['Mesaj'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nume: ";
$Body .= $Nume;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Mesaj: ";
$Body .= $Mesaj;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=Mesaj.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>