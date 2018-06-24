<?php


$EmailFrom = "comenzi";
$EmailTo = "campan_ovidiu2008@yahoo.com";
$Subject = "Comenzi";
$Nume = Trim(stripslashes($_POST['Nume'])); 
$Adresa = Trim(stripslashes($_POST['Adresa'])); 
$Telefon = Trim(stripslashes($_POST['Telefon']));
$Rosii = Trim(stripslashes($_POST['Rosii']));  
$Zacusca = Trim(stripslashes($_POST['Zacusca'])); 
$Muraturiasortate = Trim(stripslashes($_POST['Muraturiasortate'])); 
$Ardeicuvarza = Trim(stripslashes($_POST['Ardeicuvarza'])); 
$Castravetimurati = Trim(stripslashes($_POST['Castravetimurati'])); 
$Tocanadelegume = Trim(stripslashes($_POST['Tocanadelegume'])); 
$Dulceatadeprune = Trim(stripslashes($_POST['Dulceatadeprune'])); 
$Ceapa = Trim(stripslashes($_POST['Ceapa'])); 
$Varza = Trim(stripslashes($_POST['Varza'])); 
$Bulion = Trim(stripslashes($_POST['Bulion'])); 
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
$Body .= "Adresa: ";
$Body .= $Adresa;
$Body .= "\n";
$Body .= "Telefon: ";
$Body .= $Telefon;
$Body .= "\n";
$Body .= "Rosii: ";
$Body .= $Rosii;
$Body .= "\n";


$Body .= "Zacusca: ";
$Body .= $Zacusca;
$Body .= "\n";
$Body .= "Muraturiasortate: ";
$Body .= $Muraturiasortate;
$Body .= "\n";
$Body .= "Ardeicuvarza: ";
$Body .= $Ardeicuvarza;
$Body .= "\n";
$Body .= "Castravetimurati: ";
$Body .= $Castravetimurati;
$Body .= "\n";
$Body .= "Tocanadelegume: ";
$Body .= $Tocanadelegume;
$Body .= "\n";
$Body .= "Dulceatadeprune: ";
$Body .= $Dulceatadeprune;
$Body .= "\n";
$Body .= "Ceapa: ";
$Body .= $Ceapa;
$Body .= "\n";
$Body .= "Varza: ";
$Body .= $Varza;
$Body .= "\n";
$Body .= "Bulion: ";
$Body .= $Bulion;
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
  print "<meta http-equiv=\"refresh\" content=\"0;URL=multumesc.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>