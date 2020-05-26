<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Document</title>
</head>
<body>
    <?php  include 'include/header.php'; ?>

    <main>
        <h1>Modifier son Profil</h1>
        <form action="profil.php" method="POST" class="form_">
            <label for="login">Login :</label>
            <input type="text" id="login" name="login">
            <label for="old_password">Ancien mot de passe</label>
            <input type="password" id="old_password" name="old_password" required/>
            <label for="nw_password">Nouveau mot de passe: </label>
            <input type="password" id="nw_password" name="nw_password"/>
            <label for="conf_nwpassword">Nouveau mot de passe: </label>
            <input type="password" id="conf_nwpassword" name="conf_nwpassword"/>         
            <input type="submit" value="Modifier"/>       
        </form>
    </main>

    <footer>
        <h2><a href="index.php">Accueil</a></h2>
        <h3>Livre d'or - Martin Bozon</h3>
        <h2><a href="https://github.com/martin-bozon">GitHub</a></h2>
    </footer>
</body>
</html>