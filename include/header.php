<header>
    
    <?php
        if(isset($_SESSION["login"]))
            {
    ?>
                <h2><a href="index.php">Accueil</a></h2>              
                <h2><a href="profil.php">Profil</a></h2>
                <h2><a href="livre-or.php">Livre d'or</a></h2>
                <h2><a href="commentaire.php">Commentaire</a></h2>
                <form id="deco" method="POST">
                    <input type="submit" value="Déconnexion" name="deco"/>
                </form>                
    <?php
            if(isset($_POST["deco"]))
                {
                    session_destroy();
                    header("Location:index.php");
                }
            }
        else
            {
    ?>
                <h2><a href="index.php">Accueil</a></h2>
                <h2><a href="inscription.php">Inscription</a>
                <h2><a href="connexion.php">Connexion</a></h2>
                <h2><a href="livre-or.php">Livre d'or</a></h2>                            
    <?php
            }
    ?>
</header>
