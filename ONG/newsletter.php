<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['email']; // Adresse e-mail saisie
    $subject = "Bienvenue à notre Newsletter !";

    // Contenu de l'e-mail en HTML
    $message = "
    <html>
    <head>
        <title>Bienvenue à notre Newsletter</title>
    </head>
    <body>
        <h1>Merci de vous être inscrit(e) à notre newsletter !</h1>
        <p>Nous sommes ravis de vous compter parmi nous.</p>
        <p>Vous recevrez bientôt nos actualités et offres exclusives.</p>
        <br>
        <p>À bientôt,<br>L'équipe Dansleursyeux</p>
    </body>
    </html>
    ";

    // En-têtes pour l'e-mail HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // En-tête de l'expéditeur (optionnel)
    $headers .= "From: dansleursyeux@gmail.com" . "\r\n";

    // Envoyer l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail envoyé avec succès à $to";
    } else {
        echo "Erreur : impossible d'envoyer l'e-mail.";
    }
}
?>
