<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Livre d'or</title>
</head>
<body>
    <?php  include 'include/header.php'; ?>
    <main>
        <h1>Espace commentaire</h1>
        <section id="page_com">
            <section id="espace_com">
                <?php include 'include/php_livre-or.php'; ?>
            </section>
            <section >
                <?php
                    if(isset($_SESSION["login"]))
                            {
                ?>
                                <h2><a href='commentaire.php' id="lien_com">Laisser un commentaire&nbsp;<img src="image/com.png" alt="logo stylo"></a></h2>
                <?php
                            }
                ?>
            </section>
        </section>
        
    </main>

    <footer>
        <h2><a href="index.php">Accueil</a></h2>
        <h3>Livre d'or - Martin Bozon</h3>
        <h2><a href="https://github.com/martin-bozon">GitHub</a></h2>
    </footer>
</body>
</html>