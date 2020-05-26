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
        <h1>Donne ton avis, même si on s'en fou.</h1>
        <form action="commentaire.php" method="POST" class="form_">
            <label for="com">Commentaire :</label>
            <textarea rows="5" cols="33" id="com" name="com" required>Tu es une superbe personne... </textarea>
        </form>
    </main>

    <footer>
        <h2><a href="index.php">Accueil</a></h2>
        <h3>Livre d'or - Martin Bozon</h3>
        <h2><a href="https://github.com/martin-bozon">GitHub</a></h2>
    </footer>
</body>
</html>