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
            <img src="img/produit8.jpg" alt="Alimentation MSI MPG A850GF">
        </div>
        
        <!-- Détails du produit -->
        <div class="product-info">
            <h2>Alimentation MSI MPG A850GF</h2>
            <p>Grâce à l'alimentation MSI MPG A850GF vous disposer d'un bloc de 850 Watts certifiée 80PLUS Gold avec un câblage entièrement modulaire et capable de délivrer des tensions stables à tous vos composants. Elle est composée de condensateurs 105° C fabriqués au Japon, d'une correction active du facteur de puissance et d'une topologie LLC Half Bridge avec design modulaire DC-DC pour allier fiabilité et stabilité.</p>
            
            <!-- Formulaire d'achat -->
            <form method="POST" action="add_to_cart.php" class="product-form">
                <input type="hidden" name="product_id" value="8">
                <input type="hidden" name="product_name" value="Alimentation MSI MPG A850GF">
                <input type="hidden" name="product_price" value="139.95">
                <input type="hidden" name="product_image" value="produit8.jpg">
                
                <p class="price">Prix : <strong>139,95€</strong></p>
                
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
