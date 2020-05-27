<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Profil</title>
</head>
<body>
    <?php  include 'include/header.php'; ?>

    <main>
        <h1>Modifier son Profil</h1>
        <section class="formulaire">
            <form action="profil.php" method="POST" id="form_profil">
                <label for="login"><h3>Login :</h3></label>
                <input type="text" id="login" name="login">
                <label for="old_password"><h3>Ancien mot de passe:</h3></label>
                <input type="password" id="old_password" name="old_password" required/>
                <label for="nw_password"><h3>Nouveau mot de passe: </h3></label>
                <input type="password" id="nw_password" name="nw_password"/>
                <label for="conf_nwpassword"><h3>Confirmer mot de passe: </h3></label>
                <input type="password" id="conf_nwpassword" name="conf_nwpassword"/>         
                <input type="submit" value="Modifier"/>       
            </form>
        </section>
        
    </main>

    <footer>
        <h2><a href="index.php">Accueil</a></h2>
        <h3>Livre d'or - Martin Bozon</h3>
        <h2><a href="https://github.com/martin-bozon">GitHub</a></h2>
    </footer>
</body>
</html>