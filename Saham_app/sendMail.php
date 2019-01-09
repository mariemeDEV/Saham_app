<?php
$to      = 'kndeyemarieme@gmail.com';
$subject = 'DEMANDE DE CONTRAT';
$message = "Message";
// $message = 'Mr/Mme '.$_POST['prenomNom'].'souhaite obtenir un contrat vous pourrez le(la) contacter par téléphone au '.$_POST['telephone'].'ou par mail au'.$_POST['mail'];
$headers = 'From: kndeyemarieme@gmail.com' . "\r\n" .
    'Reply-To: kndeyemarieme@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
