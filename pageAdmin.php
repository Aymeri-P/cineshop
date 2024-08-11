<?php
include 'connexionbdd.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les valeurs du formulaire

    // FILM
    $nomfilmvaleur = $_POST["nom"];
    $marquefilmvaleur = $_POST["horraire"];
    $lienImagefilmvaleur = $_POST["lienImage"];

    // Pour les skate
    $stmtSkate = $pdo->prepare("INSERT INTO film (nom, horraire, lienImage) VALUES (:nomfilm, :horrairefilm, :lienImagefilm)");
    $stmtSkate->execute([
        ':nomfilm' => $nomfilmvaleur,
        ':horrairefilm' => $marquefilmvaleur,
        ':lienImagefilm' => $lienImagefilmvaleur
    ]);

    // Redirigez l'utilisateur vers une page de confirmation ou une autre page après l'insertion
    header("Location: pageAdmin.php");
    exit(); // Assurez-vous de quitter le script après la redirection
}
?>


<!Doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Ma page</title>
        <link href="index.css" rel="stylesheet">
    </head>

    
    <body>

        <header class="header">
            <a href="Acceuil.php" class="logo">CINE SHOP</a>

            <nav class="navbar">
                <a href="Connection.php">Connexion</a>
            </nav>

        </header>


        
        <div class="ajouterElement">
            
            <div class="ajout film">
                <!-- Ajouter FILM -->
                <h2>Ajouter FILM :</h2>
                <form action="#" method="POST">
                    <label for="nomfilmvaleur">Nom :</label>
                    <input type="text" id="nomfilm" name="nom">

                    <label for="horrairefilmvaleur">Horraire :</label>
                    <input type="text" id="horrairefilm" name="horraire">

                    <label for="lienImagefilmvaleur">Lien Image :</label>
                    <input type="text" id="lienImagefilm" name="lienImage">

                    <input type="submit" value="AjouterFilm"> 
                </form>
            </div>

        </div>
    
        

    </body>

</html>