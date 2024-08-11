<?php
include 'connexionbdd.php';

?>

<!Doctype html>
<html>      

    <head>
        <meta charset="utf-8">
        <title>Ma page</title>
        <link href="acceuil.css" rel="stylesheet">
    </head>

    <body>

        <section>
            <div class="form-box">
                <div class="form-value">
                    <form action="validation.php" method="POST">
                        <h2>Connexion</h2>

                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="text" name="name" required>
                            <label for="name">Nom</label>
                        </div>

                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" name="password" required>
                            <label for="password">Mot de passe</label>
                        </div>

                        <div class="forget">
                            <label for=""><input type="checkbox"> Se souvenir de moi</label>
                        </div>

                        <input class="bouton" type="submit" value="Se connecter">

                        <div class="register">
                            <p>Si vous n'avez pas de compte <a href="Inscription.php"> S'inscrire</a></p>
                            <br>
                            <p><a href="connectionAdmin.php">Admin</a></p>
                            <br>
                            <p>Revenir a la page<a href="Acceuil.php"> Accueil</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>