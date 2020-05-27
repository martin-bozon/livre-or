<?php

        $connexionbd = mysqli_connect("localhost" , "root" , "" , "livreor");
        $requete = "SELECT commentaires.commentaire, date, utilisateurs.login FROM commentaires  INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id ORDER BY date DESC" ;
        $send_requete = mysqli_query($connexionbd, $requete);
        $commentaire_info = mysqli_fetch_all($send_requete, MYSQLI_ASSOC); 

        foreach($commentaire_info as $commentaire)
                {
                        $date = date('d/m/Y' , strtotime($commentaire["date"]));                        
        ?>
                        <section id="commentaire">
                                <h4>Posté le <?php echo $date;?> par <?php echo $commentaire["login"];?> :</h4>
                                <p><?php echo $commentaire["commentaire"];?></p>
                        </section>
        <?php
                }
?>