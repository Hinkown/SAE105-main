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
            <img src="img/produit6.jpg" alt="Watercooling MSI MAG CORELIQUID 360R V2">
        </div>
        
        <!-- Détails du produit -->
        <div class="product-info">
            <h2>Watercooling MSI MAG CORELIQUID 360R V2</h2>
            <p>Le MAG CORELIQUID 360R V2 de MSI a tout ce que vous recherchez dans un refroidisseur watercooling. Il allie des matériaux de qualité qui offrent une durabilité exemplaire à des technologies de dissipation thermique extrêmement efficaces.</p>
            
            <!-- Formulaire d'achat -->
            <form method="POST" action="add_to_cart.php" class="product-form">
                <input type="hidden" name="product_id" value="6">
                <input type="hidden" name="product_name" value="Watercooling MSI MAG CORELIQUID 360R V2">
                <input type="hidden" name="product_price" value="119.95">
                <input type="hidden" name="product_image" value="produit6.jpg">
                
                <p class="price">Prix : <strong>119,95€</strong></p>
                
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
