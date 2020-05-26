<?php
if(isset($_SESSION["login"]))
    {
        echo 'login';
        if(isset($_POST["send_com"]) && !empty($_POST["com"]))
            {
                $commentaire = $_POST["com"];
                $id_user = $_SESSION["id"];
                $connexionbd = mysqli_connect("localhost" , "root" , "" , "livreor");
                $requete_com = "INSERT INTO commentaires (commentaire, id_utilisateur, date) VALUES ('$commentaire', $id_user, NOW())";
                $send_com = mysqli_query($connexionbd , $requete_com);
                mysqli_close($connexionbd);
                header("Location:livre-or.php");
            }
    }
else
    {
        header("Location:index.php");
    }
?>