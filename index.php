<?php include('include/entete.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Techaven</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <!-- Menu de navigation -->
    <?php include('include/menu.php'); ?>

    <h2>Nos Produits</h2>

    <!-- Carrousel des produits -->
    <section class="product-carousel">
        <div class="carousel">
            <div class="carousel-images">
                <!-- Chaque image du carrousel est entourée d'un lien vers le produit -->
                <div class="carousel-item">
                    <a href="produit1.php">
                        <img src="img/produit1.jpg" alt="Produit 1">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="produit2.php">
                        <img src="img/produit2.jpg" alt="Produit 2">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="produit3.php">
                        <img src="img/produit3.jpg" alt="Produit 3">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="produit4.php">
                        <img src="img/produit4.jpg" alt="Produit 4">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="produit5.php">
                        <img src="img/produit5.jpg" alt="Produit 5">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="produit6.php">
                        <img src="img/produit6.jpg" alt="Produit 6">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="produit7.php">
                        <img src="img/produit7.jpg" alt="Produit 7">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="produit8.php">
                        <img src="img/produit8.jpg" alt="Produit 8">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="produit9.php">
                        <img src="img/produit9.jpg" alt="Produit 9">
                    </a>
                </div>
            </div>
            <!-- Flèches de navigation -->
            <div class="carousel-buttons">
                <button class="carousel-button prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-button next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Section 1 : Introduction au site -->
    <section class="intro">
        <div class="container">
            <h2>Bienvenue sur Techaven</h2>
            <p>Découvrez notre vaste catalogue de composants informatiques. Que vous soyez un gamer passionné, un professionnel en quête de performance ou un amateur d'assemblage PC, Techaven est votre destination idéale.</p>
        </div>
    </section>

    <!-- Section 2 : Vidéo de présentation -->
    <section class="video-section">
        <div class="container">
            <h2>Plongez dans l'univers des composants informatiques</h2>
            <p>Chez Techaven, nous vous guidons dans le choix des meilleurs composants pour répondre à vos besoins. Visionnez cette vidéo pour découvrir les bases de l'assemblage d'un PC performant.</p>
            <div class="video-container">
                <video muted loop controls id="presentation-video">
                    <source src="videos/presentation.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture des vidéos.
                </video>
                <figcaption>Vidéo : Les bases pour assembler un PC performant.</figcaption>
            </div>
        </div>
    </section>

    <?php include('include/pied-de-page.php'); ?>

    <!-- Fichier JavaScript pour le carrousel -->
    <script src="js/carrousel.js"></script>

    <!-- Script pour la lecture automatique de la vidéo -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const video = document.getElementById('presentation-video');

            // Crée un observer pour détecter si la vidéo entre dans la vue
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        video.play(); // Lecture de la vidéo
                    } else {
                        video.pause(); // Met la vidéo en pause lorsqu'elle n'est plus visible
                    }
                });
            }, { threshold: 0.5 }); // 50% de visibilité minimum pour déclencher l'action

            // Observer l'élément vidéo
            observer.observe(video);
        });
    </script>

</body>

</html>
