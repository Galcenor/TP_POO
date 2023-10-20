<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
<div class="navbar">
        <a href="./index.php" class="nav-link">Accueil</a>
        <a href="#" class="nav-link">À propos</a>
        <a href="#" class="nav-link">Services</a>
        <a href="#" class="nav-link">Contact</a>
        <div class="login">
        <?php
        if (isset($_SESSION['user_id'])) {
            // L'utilisateur est connecté, affichez le bouton de déconnexion
            echo '<a href="./logout.php" class="btn-login">Déconnexion</a>';
        } else {
            // L'utilisateur n'est pas connecté, affichez les boutons Inscription et Connexion
            echo '<a href="./login.php" class="btn-login">Connexion</a>';
            echo '<a href="./new.php" class="btn-login">Inscription</a>';
        }
        ?>
        </div>
        <div class="log">
            <?php
            if (isset($_SESSION['user_id'])) {
            // L'utilisateur est connecté, affichez le bouton de déconnexion
                echo '<p class="logged">Vous êtes : connecté</p>';
            } else {
            // L'utilisateur n'est pas connecté, affichez les boutons Inscription et Connexion
                echo '<p>Vous êtes : deconnecté</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>