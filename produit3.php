<?php include('include/entete.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit - Techaven</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/produit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <!-- Menu de navigation -->
    <?php include('include/menu.php'); ?>

<section class="product-details">
    <div class="container">
        <!-- Image du produit -->
        <div class="product-image">
            <img src="img/produit3.jpg" alt="Mémoire Vive Corsair Vengeance RGB DDR5">
        </div>
        
        <!-- Détails du produit -->
        <div class="product-info">
            <h2>Mémoire Vive Corsair Vengeance RGB DDR5 32 Go (2 x 16 Go) 6000 MHz CL30</h2>
            <p>La mémoire Corsair Vengeance RGB DDR5 fournit des performances et des fréquences plus élevées avec de meilleures capacités optimisées pour les cartes mères Intel tout en illuminant votre PC avec un éclairage RGB dynamique sur dix zones personnalisables individuellement.</p>
            
            <!-- Formulaire d'achat -->
            <form method="POST" action="add_to_cart.php" class="product-form">
                <input type="hidden" name="product_id" value="3">
                <input type="hidden" name="product_name" value="Mémoire Vive Corsair Vengeance RGB DDR5 32 Go (2 x 16 Go) 6000 MHz CL30">
                <input type="hidden" name="product_price" value="89.95">
                <input type="hidden" name="product_image" value="produit3.jpg">
                
                <p class="price">Prix : <strong>89,95€</strong></p>
                
                <button type="submit" class="btn-add-to-cart">
                    <i class="fas fa-shopping-cart"></i> Ajouter au panier
                </button>
            </form>
        </div>
    </div>
</section>

<?php include('include/pied-de-page.php'); ?>
</body>
</html>
