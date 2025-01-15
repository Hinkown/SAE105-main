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
            <img src="img/produit4.jpg" alt="Disque Dur Western Digital WD Blue 1 To">
        </div>
        
        <!-- Détails du produit -->
        <div class="product-info">
            <h2>Disque Dur Western Digital WD Blue 1 To</h2>
            <p>Le disque dur Western Digital WD Blue 1 To offre des performances, de la fiabilité, une grande capacité de stockage et la nouvelle interface Serial ATA 6 Gb/s.</p>
            
            <!-- Formulaire d'achat -->
            <form method="POST" action="add_to_cart.php" class="product-form">
                <input type="hidden" name="product_id" value="4">
                <input type="hidden" name="product_name" value="Disque Dur Western Digital WD Blue 1 To">
                <input type="hidden" name="product_price" value="39.95">
                <input type="hidden" name="product_image" value="produit4.jpg">
                
                <p class="price">Prix : <strong>39,95€</strong></p>
                
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
