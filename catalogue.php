<?php include('include/entete.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - Techaven</title>
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/catalogue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <!-- Menu de navigation -->
    <?php include('include/menu.php'); ?>

    <main>
        

        <!-- Tableau des produits -->
        <section class="catalogue">
            <table class="produits-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Détails</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Répète cette structure pour chaque produit -->
                    <tr>
                        <td><img src="img/produit1.jpg" alt="Roller Hockey 1"></td>
                        <td>Processeur Intel Core Ultra 9 285K (3.7 GHz / 5.7 GHz)</td>
                        <td class="price"><span class="amount">499,95</span><span class="euro-symbol">€</span></td>
                        <td><a href="produit1.php">Voir le produit</a></td>
                    </tr>
                    <tr>
                        <td><img src="img/produit2.jpg" alt="Roller Hockey 2"></td>
                        <td>Carte Mère ASUS ROG MAXIMUS Z890 HERO</td>
                        <td class="price"><span class="amount">249,95</span><span class="euro-symbol">€</span></td>
                        <td><a href="produit2.php">Voir le produit</a></td>
                    </tr>
                    <tr>
                        <td><img src="img/produit3.jpg" alt="Roller Hockey 3"></td>
                        <td>Mémoire Vive Corsair Vengeance RGB DDR5 32 Go (2 x 16 Go) 6000 MHz CL30</td>
                        <td class="price"><span class="amount">89,95</span><span class="euro-symbol">€</span></td>
                        <td><a href="produit3.php">Voir le produit</a></td>
                    </tr>
                    <tr>
                        <td><img src="img/produit4.jpg" alt="Roller Hockey 4"></td>
                        <td>Disque Dur Western Digital WD Blue 1 To</td>
                        <td class="price"><span class="amount">39,95</span><span class="euro-symbol">€</span></td>
                        <td><a href="produit4.php">Voir le produit</a></td>
                    </tr>
                    <tr>
                        <td><img src="img/produit5.jpg" alt="Roller Hockey 5"></td>
                        <td>SSD Samsung 990 PRO M.2 PCIe NVMe 2 To</td>
                        <td class="price"><span class="amount">99,95</span><span class="euro-symbol">€</span></td>
                        <td><a href="produit5.php">Voir le produit</a></td>
                    </tr>
                    <tr>
                        <td><img src="img/produit6.jpg" alt="Roller Hockey 6"></td>
                        <td>Watercooling MSI MAG CORELIQUID 360R V2</td>
                        <td class="price"><span class="amount">119,95</span><span class="euro-symbol">€</span></td>
                        <td><a href="produit6.php">Voir le produit</a></td>
                    </tr>
                    <tr>
                        <td><img src="img/produit7.jpg" alt="Roller Hockey 7"></td>
                        <td>Carte Graphique Gainward GeForce RTX 4070 Ti SUPER Panther</td>
                        <td class="price"><span class="amount">749,95</span><span class="euro-symbol">€</span></td>
                        <td><a href="produit7.php">Voir le produit</a></td>
                    </tr>
                    <tr>
                        <td><img src="img/produit8.jpg" alt="Roller Hockey 8"></td>
                        <td>Alimentation MSI MPG A850GF</td>
                        <td class="price"><span class="amount">139,95</span><span class="euro-symbol">€</span></td>
                        <td><a href="produit8.php">Voir le produit</a></td>
                    </tr>
                    <tr>
                        <td><img src="img/produit9.jpg" alt="Roller Hockey 9"></td>
                        <td>Boitier NZXT H9 Flow</td>
                        <td class="price"><span class="amount">124,95</span><span class="euro-symbol">€</span></td>
                        <td><a href="produit9.php">Voir le produit</a></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <!-- Pied de page du site -->
    <?php include('include/pied-de-page.php'); ?>

</body>

</html>
