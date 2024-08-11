<?php
// Connection a la BDD
include 'connexionbdd.php';

// Préparation de la requête SQL
$stmt = $pdo->prepare("SELECT nom, horraire, lienImage FROM film");

// Exécution de la requête
$stmt->execute();

// Récupération de toutes les lignes de résultat
$infofilm = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!Doctype html>
<html>      

    <head>
        <meta charset="utf-8">
        <title>Acceuil</title>
        <link href="acceuil.css" rel="stylesheet">
    </head>



    <body>
        
        <header class="header">
            <a href="acceuil.php" class="logo">CINE SHOP</a>

            <nav class="navbar">
                <a href="connexion.php" target="_blank">Connexion</a>
                <a href="pageCommande.php">Panier</a>
            </nav>

        </header>
    
        <video src="video/" loop autoplay muted width="10%" height="auto"></video>


        <!-- <section class="recherchebar"> </section> -->

        <h1>Bonjour</h1>

        <section class="produit">
            <table>

                <tr>
                    <th>Nom </th>
                    <th>Horraire </th>
                    <th>Image </th>
                </tr>
                    
                <?php foreach ($infofilm as $value) { ?>
                    <tr>
                        <td><a href="pageInfo.php?nom=<?= urlencode($value["nom"]) ?>&horraire=<?= urlencode($value["horraire"]) ?>&image=<?= urlencode($value["lienImage"]) ?>"><?= $value["nom"] ?></a></td>
                        <td><?= $value["horraire"] ?></td>
                        <td><img src="img/<?= $value["lienImage"] ?>" alt="Image du film <?= $value["nom"] ?>"></td>
                    </tr>
                <?php } ?>

            </table>
        </section>

    </body>


</html>