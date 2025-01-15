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
            <img src="img/produit2.jpg" alt="Carte Mère ASUS ROG MAXIMUS Z890 HERO">
        </div>
        
        <!-- Détails du produit -->
        <div class="product-info">
            <h2>Carte Mère ASUS ROG MAXIMUS Z890 HERO</h2>
            <p>La carte mère ASUS ROG MAXIMUS Z890 HERO munie du socket Intel LGA 1851 et animée par le Chipset Intel Z890 permet d'accueillir les processeurs Intel Core Ultra Arrow Lake-S. La ROG MAXIMUS Z890 HERO d'ASUS est en mesure de tirer le maximum de vos composants.</p>
            
            <!-- Formulaire d'achat -->
            <form method="POST" action="add_to_cart.php" class="product-form">
                <input type="hidden" name="product_id" value="2">
                <input type="hidden" name="product_name" value="Carte Mère ASUS ROG MAXIMUS Z890 HERO">
                <input type="hidden" name="product_price" value="249.95">
                <input type="hidden" name="product_image" value="produit2.jpg">
                
                <p class="price">Prix : <strong>249,95€</strong></p>
                
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
