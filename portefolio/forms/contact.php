<?php
if (isset($_POST['message'])) {
    $retour = mail('destinataire@free.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
    if($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
}
?>