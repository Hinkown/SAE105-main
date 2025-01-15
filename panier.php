<?php
if(!isset($_SESSION)){
    session_start();
}

// Initialisation du panier si ce n'est pas déjà fait
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

// Ajout d'un produit au panier
if (isset($_GET['action']) && $_GET['action'] == 'ajouter' && isset($_GET['id'])) {
    $idProduit = $_GET['id'];
    $nomProduit = $_GET['nom'];
    $prixProduit = $_GET['prix'];
    $imageProduit = $_GET['image'];

    // Ajouter le produit au panier (vérifie si le produit est déjà dans le panier)
    $produitExistant = false;
    foreach ($_SESSION['panier'] as &$produit) {
        if ($produit['id'] == $idProduit) {
            $produit['quantite']++;
            $produitExistant = true;
            break;
        }
    }

    if (!$produitExistant) {
        $_SESSION['panier'][] = [
            'id' => $idProduit,
            'nom' => $nomProduit,
            'prix' => $prixProduit,
            'image' => $imageProduit,
            'quantite' => 1
        ];
    }
}

// Suppression d'un produit du panier
if (isset($_GET['action']) && $_GET['action'] == 'supprimer' && isset($_GET['id'])) {
    $idProduit = $_GET['id'];
    foreach ($_SESSION['panier'] as $key => $produit) {
        if ($produit['id'] == $idProduit) {
            unset($_SESSION['panier'][$key]);
            break;
        }
    }
    $_SESSION['panier'] = array_values($_SESSION['panier']); // Réindexer le tableau
}

// Mise à jour de la quantité
if (isset($_POST['quantite']) && isset($_POST['id'])) {
    foreach ($_SESSION['panier'] as &$produit) {
        if ($produit['id'] == $_POST['id']) {
            $produit['quantite'] = $_POST['quantite'];
            break;
        }
    }
}

$total = 0;
foreach ($_SESSION['panier'] as $produit) {
    $total += $produit['prix'] * $produit['quantite'];
}
?>

<?php include('include/entete.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - Techaven</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/panier.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script>
        // Mise à jour du prix quand la quantité change
        function updatePrice(id, price) {
            const quantity = document.getElementById('quantity-' + id).value;
            const totalCell = document.getElementById('total-price-' + id);
            totalCell.textContent = (price * quantity).toFixed(2) + ' €';

            // Optionnellement, mettre à jour le total général
            let total = 0;
            document.querySelectorAll('.product-total').forEach(function(cell) {
                total += parseFloat(cell.textContent.replace(' €', ''));
            });
            document.getElementById('grand-total').textContent = total.toFixed(2) + ' €';
        }
    </script>
</head>
<body>

    <!-- Menu de navigation -->
    <?php include('include/menu.php'); ?>

    <main>
        <h2>Mon Panier</h2>

        <!-- Affichage du panier -->
        <section class="panier">
            <?php if (empty($_SESSION['panier'])): ?>
                <div class="panier-vide">
                    <h3>Votre panier est vide</h3>
                    <p>Ajoutez des produits à votre panier pour commencer votre commande.</p>
                    <a href="index.php" class="btn-continuer">Continuer mes achats</a>
                </div>
            <?php else: ?>
                <table class="panier-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['panier'] as $produit): ?>
                            <tr>
                                <td><img src="img/<?php echo $produit['image']; ?>" alt="<?php echo $produit['nom']; ?>"></td>
                                <td><?php echo $produit['nom']; ?></td>
                                <td><?php echo number_format($produit['prix'], 2, ',', ' ') . ' €'; ?></td>
                                <td>
                                    <form action="panier.php" method="POST" oninput="updatePrice(<?php echo $produit['id']; ?>, <?php echo $produit['prix']; ?>)">
                                        <input type="number" name="quantite" id="quantity-<?php echo $produit['id']; ?>" value="<?php echo $produit['quantite']; ?>" min="1" style="width: 60px; padding: 8px; text-align: center; border-radius: 5px; border: 1px solid #bdc3c7;">
                                        <input type="hidden" name="id" value="<?php echo $produit['id']; ?>">
                                        <button type="submit" style="display: none;"></button>
                                    </form>
                                </td>
                                <td id="total-price-<?php echo $produit['id']; ?>" class="product-total"><?php echo number_format($produit['prix'] * $produit['quantite'], 2, ',', ' ') . ' €'; ?></td>
                                <td><a href="panier.php?action=supprimer&id=<?php echo $produit['id']; ?>" class="supprimer">Supprimer</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="total">
                    <h3>Total : <span id="grand-total"><?php echo number_format($total, 2, ',', ' ') . ' €'; ?></span></h3>
                    <a href="commande.php" class="btn-payer">Passer à la commande</a>
                </div>
            <?php endif; ?>
        </section>
    </main>

    <!-- Pied de page du site -->
    <?php include('include/pied-de-page.php'); ?>

</body>
</html>
