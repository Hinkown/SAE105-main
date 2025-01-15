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
            <img src="img/produit5.jpg" alt="SSD Samsung 990 PRO M.2 PCIe NVMe 2 To">
        </div>
        
        <!-- Détails du produit -->
        <div class="product-info">
            <h2>SSD Samsung 990 PRO M.2 PCIe NVMe 2 To</h2>
            <p>Le disque SSD 990 PRO 2 To de Samsung permet à votre machine de changer de dimension. Ce SSD bénéficie de vitesses stratosphériques et d'une endurance très élevée. Le Samsung 990 PRO au format M.2 2280 s'appuie sur l'interface PCI-E 4.0 x4 et la technologie NVMe 2.0.</p>
            
            <!-- Formulaire d'achat -->
            <form method="POST" action="add_to_cart.php" class="product-form">
                <input type="hidden" name="product_id" value="5">
                <input type="hidden" name="product_name" value="SSD Samsung 990 PRO M.2 PCIe NVMe 2 To">
                <input type="hidden" name="product_price" value="99.95">
                <input type="hidden" name="product_image" value="produit5.jpg">
                
                <p class="price">Prix : <strong>99,95€</strong></p>
                
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
