<?php
if(!isset($_SESSION)){
    session_start();
}

// Vérifiez si les données sont envoyées via POST
if (isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_price']) && isset($_POST['product_image'])) {
    // Récupérer les informations du produit
    $idProduit = $_POST['product_id'];
    $nomProduit = $_POST['product_name'];
    $prixProduit = $_POST['product_price'];
    $imageProduit = $_POST['product_image'];

    // Initialiser le panier s'il n'existe pas encore
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }

    // Vérifier si le produit est déjà dans le panier
    $produitExistant = false;
    foreach ($_SESSION['panier'] as &$produit) {
        if ($produit['id'] == $idProduit) {
            // Si le produit est déjà dans le panier, incrémenter la quantité
            $produit['quantite']++;
            $produitExistant = true;
            break;
        }
    }

    // Si le produit n'est pas dans le panier, l'ajouter
    if (!$produitExistant) {
        $_SESSION['panier'][] = [
            'id' => $idProduit,
            'nom' => $nomProduit,
            'prix' => $prixProduit,
            'image' => $imageProduit,
            'quantite' => 1
        ];
    }

    // Rediriger vers la page du panier
    header('Location: panier.php');
    exit();
} else {
    // Si les informations sont manquantes, rediriger vers une page d'erreur ou afficher un message
    echo "Erreur: Des informations sur le produit sont manquantes.";
}
?>
