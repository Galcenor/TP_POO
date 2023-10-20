<?php 
include './navbar.php';
?>

<!DOCTYPE html>
<head>
    <title>Connexion</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<form id="loginForm" action="./verify.php" method="POST">
    <label for="username">Nom :</label>
    <input type="text" id="username" name="username" autocomplete="name" required><br>
    
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" autocomplete="new-password" required><br>
    
    <input type="submit" value="Se connecter">
</form>
<script src="./assets/script.js"></script>