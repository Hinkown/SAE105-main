<header>
    <div class="logo">
        <a href="index.php">
            <img src="img/logo.png" alt="Logo Techaven">
        </a>
    </div>
    <h1>Techaven</h1>
    <div class="panier">
        <a href="panier.php">
            <i class="fas fa-shopping-cart"></i> <!-- Icône du panier -->
            <span class="panier-count">
                <?php 
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    
                    $panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : [];
                    $nombreArticles = 0;
                    
                    // Compter le nombre total d'articles, en tenant compte des quantités
                    foreach ($panier as $produit) {
                        $nombreArticles += $produit['quantite']; // Ajouter la quantité de chaque produit
                    }

                    echo $nombreArticles; // Afficher le nombre total d'articles
                ?>
            </span>
            <span>Mon Panier</span>
        </a>
    </div>
</header>
