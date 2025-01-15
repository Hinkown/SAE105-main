// Indice de l'image actuelle
let currentSlide = 0;
let autoSlideInterval;  // Variable pour stocker l'intervalle

// Fonction pour déplacer les images du carrousel
function moveSlide(direction) {
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    // Mise à jour de l'indice du slide actuel
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;

    // Calcul du décalage nécessaire pour faire défiler (chaque image doit faire 100% de largeur)
    const offset = -currentSlide * 100;

    // Déplace le carrousel pour afficher la bonne image
    document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
}

// Fonction pour démarrer le défilement automatique
function autoMoveSlide() {
    moveSlide(1);  // Défilement automatique vers l'avant
}

// Réinitialiser le compteur chaque fois qu'une flèche est cliquée
function resetAutoSlide() {
    clearInterval(autoSlideInterval); // Arrêter l'intervalle précédent
    autoSlideInterval = setInterval(autoMoveSlide, 5000); // Redémarrer l'intervalle
}

// Ajouter un gestionnaire d'événement pour initialiser le carrousel au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser le carrousel pour afficher la première image
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    // Afficher le premier slide par défaut
    document.querySelector('.carousel-images').style.transform = 'translateX(0%)';

    // Ajouter des événements pour les flèches de navigation
    const prevButton = document.querySelector('.carousel-button.prev');
    const nextButton = document.querySelector('.carousel-button.next');

    prevButton.addEventListener('click', function() {
        moveSlide(-1);
        resetAutoSlide();  // Réinitialiser le compteur à chaque clic sur une flèche
    });

    nextButton.addEventListener('click', function() {
        moveSlide(1);
        resetAutoSlide();  // Réinitialiser le compteur à chaque clic sur une flèche
    });

    // Déclencher le défilement automatique toutes les 5 secondes (5000 ms)
    autoSlideInterval = setInterval(autoMoveSlide, 5000); // 5000 ms = 5 secondes
});
