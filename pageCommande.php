<?php

?>

<!DOCTYPE html>
<html>

<head>
    <title>Page de commande</title>
    <link href="index.css" rel="stylesheet">
</head>

<body>

    <h1>Votre panier :</h1>

    <ul>
        <?php
        // Vérifier si le panier existe et s'il n'est pas vide
        if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
            foreach ($_SESSION['panier'] as $key => $skate) {
                echo "<li>";
                echo "<h2>{$film['nom']}</h2>";
                echo "<img src=\"img/{$film['image']}\" alt=\"{$film['nom']}\" width=\"100\">";
                echo "<p>horraire : {$film['horraire']}</p>";
                
                // Bouton de suppression
                echo "<form action=\"supprimer.php\" method=\"post\">";
                echo "<input type=\"hidden\" name=\"index\" value=\"$key\">";
                echo "<input type=\"submit\" value=\"Supprimer\">";
                echo "</form>";
                echo "</li>";
            }
        } else {
            echo "<p>Votre panier est vide.</p>";
        }
        ?>
    </ul>

</body>

</html>