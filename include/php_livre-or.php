<?php

        $connexionbd = mysqli_connect("localhost" , "root" , "" , "livreor");
        $requete = "SELECT commentaires.commentaire, DATE_FORMAT(date, '%d/%m/%Y') AS date, utilisateurs.login FROM commentaires INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id";
        $send_requete = mysqli_query($connexionbd, $requete);
        $commentaire_info = mysqli_fetch_all($send_requete, MYSQLI_ASSOC);
        var_dump($commentaire_info); 

?>