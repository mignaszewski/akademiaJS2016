<?php

$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];

$odkogo = "sklep@mtb33.pl";

$dokogo = "patryk@mtb33.pl";

$tytul = "Formularz kontaktowy z mtb33.pl";

$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

$sukces = mail($dokogo, $tytul, $wiadomosc, "Od: <$odkogo>");

if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>