<?php
session_start(); // Démarrer la session
// Récupérer les détails du skate depuis l'URL
$nom = $_GET['nom'] ?? '';
$horraire = $_GET['horraire'] ?? '';
$image = $_GET['image'] ?? '';

// Ajouter les détails du skate au panier
$film = array(
    'nom' => $nom,
    'horraire' => $horraire,
    'image' => $image
);

// Ajouter le skate au panier
$_SESSION['panier'][] = $film;
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Informations sur le skate</title>
        <link href="acceuil.css" rel="stylesheet">
    </head>

    <body>

        <header class="header">
            <a href="Accueil.php" class="logo">Rider Shop</a>

            <nav class="navbar">
                <a href="pageCommande.php">Panier</a>
            </nav>
        </header>


        <section class="presentation">
                    <?php
                    // Récupération des paramètres de l'URL
                    $nom = $_GET['nom'] ?? '';
                    $horraire = $_GET['horraire'] ?? '';
                    $image = $_GET['image'] ?? '';

                    // Affichage des détails du skate
                    echo "<h2>$nom</h2>";
                    echo "<img src=\"img/$image\" alt=\"$nom\" width=\"300\">";
                    echo "<p>horraire : $horraire</p>";
                    ?>

        </section>

        <a href="#" target="_blank">Ajouter Aux Panier</a>
        <a href="pageCommande.php" target="_blank">Voir Le Panier</a>

    </body>
</html>
