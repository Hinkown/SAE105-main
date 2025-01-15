<?php include('include/entete.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Techaven</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <!-- Menu de navigation -->
    <?php include('include/menu.php'); ?>

<section class="contact">
    <div class="container">
        <!-- Partie gauche : Plan d'adresse -->
        <div class="contact-map">
            <h2>Notre adresse</h2>
            <div id="map">
                <!-- Intégration d'une carte Google Maps -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.772211002548!2d2.385409776620984!3d48.84348350175524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67212cdd0aedb%3A0x57ba5d156e840266!2s26%20Rue%20Montgallet%2C%2075012%20Paris!5e0!3m2!1sfr!2sfr!4v1736698751827!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </div>

        <!-- Partie droite : Informations de contact et réseaux sociaux -->
        <div class="contact-info">
            <h2>Contactez-nous</h2>
            <p class="help-text">Nous sommes là pour vous aider. Vous pouvez nous contacter par email, téléphone ou via nos réseaux sociaux.</p>

            <div class="contact-details">
                <p><strong>Adresse :</strong> 26 Rue Montgallet, 75012 Paris</p>
                <p><strong>Téléphone :</strong> 01 23 45 67 89</p>
                <p><strong>Email :</strong> <a href="mailto:contact@techaven.com">contact@techaven.fr</a></p>
            </div>

            <div class="social-media">
                <h3>Suivez-nous</h3>
                <a href="https://facebook.com" target="_blank"><img src="img/facebook.png" alt="Facebook"></a>
                <a href="https://instagram.com" target="_blank"><img src="img/instagram.png" alt="Instagram"></a>
                <a href="https://twitter.com" target="_blank"><img src="img/x.png" alt="Twitter"></a>
            </div>
        </div>
    </div>
</section>

    <?php include('include/pied-de-page.php'); ?>

</body>

</html>
