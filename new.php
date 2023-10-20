<?php 
include './navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="allformdiv">
        <h1 class="titleformregister">Inscription</h1>
        <form id="newForm" action="./request.php" method="POST">
        <label for="username" id="usernamelab">Nom</label>
        <input type="text" id="usernameregister" name="username" autocomplete="name" required><br>
    
        <label for="email" id="maillab">Email</label>
        <input type="email" id="emailregister" name="email" autocomplete="email" required><br>
    
        <label for="password" id="passlab">Mot de passe</label>
        <input type="password" id="passwordregister" name="password" autocomplete="new-password" required><br>
    
        <input type="submit" value="S'inscrire" id="btnSub">
        </form>
        <div id="validateMsg"></div>
    </div>
</body>
    <script src="./assets/script.js"></script>
</html>