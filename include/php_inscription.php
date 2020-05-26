<?php
    if(isset($_SESSION["login"]))
        {
            header("Location:inex.php");
        }
    else if(isset($_POST["validinsc"]))
        {
            $login = $_POST['login'];
            $connexionbd = mysqli_connect("localhost" , "root" , "" , "livreor");
            $verif_login = "SELECT login FROM utilisateurs WHERE login = '$login'"; //vérifie si le login existe déjà
            $query_verif = mysqli_query($connexionbd, $verif_login);
            $resultat_verifL = mysqli_fetch_all($query_verif);

            if(empty($resultat_verifL)) //vérifie que la requete est vide, donc que le login n'exsite pas
                {
                    if($_POST["password"] == $_POST["confpassword"]) 
                        {
                            $mdp_hache = password_hash($_POST["password"], PASSWORD_DEFAULT);
                            $requete_insert = "INSERT INTO utilisateurs (login, password) VALUES ('$login' , '$mdp_hache')";
                            $send_requete = mysqli_query($connexionbd , $requete_insert);
                            mysqli_close($connexionbd);
                            header("Location:connexion.php");
                        }
                    else
                        {
                            $msg_error = "Les mots de passe ne sont pas identiques.";
                        }                   
                }
            else
                {
                    $msg_error = "OUPSI ! Ce login est déjà prit.";
                }           
        }
?>
    