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
            <img id="productImage" src="img/produit9.jpg" alt="Boitier NZXT H9 Flow">
        </div>
        
        <!-- Détails du produit -->
        <div class="product-info">
            <h2 id="productTitle">Boitier NZXT H9 Flow - Noir</h2>
            <p>Le boitier moyen tour NZXT H9 Flow est conçu pour accueillir et refroidir les cartes graphiques les plus puissantes grâce à ses capacités de dissipation thermique étendues grâce à sa prise en charge de dix ventilateurs et ses nombreuses possibilités de montage de watercooling.</p>
            
            <!-- Changer boitier en blanc ou noir avec menu déroulant -->
            <div class="color-selection">
                <label>
                    <input type="radio" name="color" value="noir" checked onclick="changeProduct('noir')">
                    <span class="color-circle" style="background-color: black;"></span> Noir
                </label>
                <label>
                    <input type="radio" name="color" value="blanc" onclick="changeProduct('blanc')">
                    <span class="color-circle" style="background-color: white; border: 1px solid #ccc;"></span> Blanc
                </label>
            </div>

            <!-- Formulaire d'achat -->
            <form method="POST" action="add_to_cart.php" class="product-form">
                <input type="hidden" name="product_id" id="productId" value="9">
                <input type="hidden" name="product_name" id="productName" value="Boitier NZXT H9 Flow - Noir">
                <input type="hidden" name="product_price" id="productPrice" value="124.95">
                <input type="hidden" name="product_image" id="productImageInput" value="produit9.jpg">
                
                <p class="price">Prix : <strong>124,95€</strong></p>
                
                <button type="submit" class="btn-add-to-cart">
                    <i class="fas fa-shopping-cart"></i> Ajouter au panier
                </button>
            </form>
        </div>
    </div>
</section>

<?php include('include/pied-de-page.php'); ?>

<script>
    function changeProduct(color) {
        const productImage = document.getElementById('productImage');
        const productId = document.getElementById('productId');
        const productImageInput = document.getElementById('productImageInput');
        const productTitle = document.getElementById('productTitle');
        const productName = document.getElementById('productName');

        if (color === 'blanc') {
            productImage.src = 'img/produit10.jpg';
            productId.value = '10';
            productImageInput.value = 'produit10.jpg';
            productTitle.textContent = 'Boitier NZXT H9 Flow - Blanc';
            productName.value = 'Boitier NZXT H9 Flow - Blanc';
        } else {
            productImage.src = 'img/produit9.jpg';
            productId.value = '9';
            productImageInput.value = 'produit9.jpg';
            productTitle.textContent = 'Boitier NZXT H9 Flow - Noir';
            productName.value = 'Boitier NZXT H9 Flow - Noir';
        }
    }
</script>

<style>
.color-selection {
    margin: 15px 0;
}
.color-selection label {
    display: inline-flex;
    align-items: center;
    margin-right: 15px;
    cursor: pointer;
}
.color-circle {
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    margin-right: 5px;
}
</style>

</body>
</html>
