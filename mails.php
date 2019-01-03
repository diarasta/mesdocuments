<?php
$to = "ameth.diamanka@socgen.com";
$subject = "Alerte";
$txt = "Une demande est reçue au niveau de la plateforme!";
$headers = "From: amadou-gueye.nael@socgen.com" . "\r\n" .
//copie
"CC: ameth.diamanka@socgen.com";

mail($to,$subject,$txt,$headers);
?>
