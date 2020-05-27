<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Accueil</title>
</head>
<body>
    <?php
    include 'include/header.php';

        if(isset($_SESSION["login"]))
            {
    ?>
                <main id="main_index">
                    <section>
                        <h1>Bonjour <?php echo $_SESSION["login"];?> !</h1>
                    </section>
                    <section>
                        <p>Que va tu nous raconter aujourd'hui ?</p>
                    </section>        
                </main>
    <?php
            }
        else
            {
    ?>
                <main id="main_index">
                    <section>
                        <h1>Bonjour !</h1>
                    </section>
                <section>
                    <p><a href="inscription.php">Inscris</a> toi et <a href="connexion.php">connectes</a> pour laisser un commentaire,</p>
                    <p>que personne ne lira car on se fou de ton avis.</p>
                </section>        
                </main>
    <?php
            }
    ?>

    <footer>
        <h2><a href="index.php">Accueil</a></h2>
        <h3>Livre d'or - Martin Bozon</h3>
        <h2><a href="https://github.com/martin-bozon">GitHub</a></h2>
    </footer>
</body>
</html>