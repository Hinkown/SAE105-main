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
            <img src="img/produit1.jpg" alt="Processeur Intel Core Ultra 9">
        </div>
        
        <!-- Détails du produit -->
        <div class="product-info">
            <h2>Processeur Intel Core Ultra 9 285K (3.7 GHz / 5.7 GHz)</h2>
            <p>Le processeur pour PC de bureau Intel Core Ultra 9 285K est prêt à relever tous les défis. Gaming, Streaming ou création de contenus, les processeurs Intel Core Ultra vous offrent de toutes nouvelles perspectives grâce à l'intelligence artificielle.</p>
            
            <!-- Formulaire d'achat -->
            <form method="POST" action="add_to_cart.php" class="product-form">
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Processeur Intel Core Ultra 9 285K (3.7 GHz / 5.7 GHz)">
                <input type="hidden" name="product_price" value="499.95">
                <input type="hidden" name="product_image" value="produit1.jpg">
                
                <p class="price">Prix : <strong>499,95€</strong></p>
                
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
