<?php
    session_start();
    include 'include/php_connexion.php';
?>
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
        <h1>Formulaire de connexion</h1>
        <form action="connexion.php" method="POST" class="form_">
            <label for="login">Login :</label>
            <input type="text" id="login" name="login" required>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required/>
            <input type="submit" value="Connexion" name="validcon">
        <?php
            if(isset($msg_error))
                {
        ?>
                    <p class="msg_error">
        <?php
                    echo $msg_error;
        ?>
                    </p>
        <?php
                }
        ?>
        </form>
    </main>

    <footer>
        <h2><a href="index.php">Accueil</a></h2>
        <h3>Livre d'or - Martin Bozon</h3>
        <h2><a href="https://github.com/martin-bozon">GitHub</a></h2>
    </footer>
</body>
</html>