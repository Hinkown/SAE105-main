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
            <img src="img/produit7.jpg" alt="Carte Graphique Gainward GeForce RTX 4070 Ti SUPER Panther">
        </div>
        
        <!-- Détails du produit -->
        <div class="product-info">
            <h2>Carte Graphique Gainward GeForce RTX 4070 Ti SUPER Panther</h2>
            <p>Conçue pour les gamers et les créateurs, la carte graphique NVIDIA GeForce RTX 4070 Ti SUPER embarque 8448 Cores CUDA et une interface mémoire 256 bits. Elle délivre des performances remarquables grâce au DLSS 3, au ray tracing matériel et à l'intelligence artificielle.</p>
            
            <!-- Formulaire d'achat -->
            <form method="POST" action="add_to_cart.php" class="product-form">
                <input type="hidden" name="product_id" value="7">
                <input type="hidden" name="product_name" value="Carte Graphique Gainward GeForce RTX 4070 Ti SUPER Panther">
                <input type="hidden" name="product_price" value="749.95">
                <input type="hidden" name="product_image" value="produit7.jpg">
                
                <p class="price">Prix : <strong>749,95€</strong></p>
                
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
