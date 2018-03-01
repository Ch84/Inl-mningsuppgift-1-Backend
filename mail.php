<?php

// Hämta data från formuläret via metoden POST

$name = $_POST['name']; 

$mail = $_POST['Email'];

$leveransadress = $_POST['Leveransadress'];

$produkt = $_POST['produkt']; 

$textbox = $_POST['mytextbox'];

$ordernr = $_POST['ordernr'];

$img = $_POST['img'];


// Argument som behövs i funktionen mail

$to = "christian_hall@hotmail.com";

$subject = "Orderbekräftelse från Datakomponenter för order $ordernr";

$headers ="From: noreply@datakomponenter.se\n";

$headers .= "cc:$mail";

$message = "Tack för ditt köp av ";

$message .= "\n $produkt för $ordernr SEK!";

if(isset($_POST['Email'])){

mail($to , $subject, $message, $headers);

echo "<h2>Din order har mottagits och skickas inom 3-4 arbetsdagar</h2>";

}

?>




