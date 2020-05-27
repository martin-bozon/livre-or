<?php
    if(!isset($_SESSION["login"]))
        {
            header("Location:index.php");
        }
    else
        {
            if(isset($_POST["valimodif"]) && !empty($_POST["login"] && !empty($_POST["old_password"])))
                {                    
                    if(password_verify($_POST["old_password"], $_SESSION["mdp"]))
                        {
                            $login = $_POST["login"];
                            $mdp = $_POST["nw_password"];                            
                            $id = $_SESSION["id"];
                            $mdp_conf = $_POST["conf_nwpassword"];
                            $connexionbd = mysqli_connect("localhost" , "root" , "", "livreor");
                            $requete_info = "SELECT * FROM utilisateurs WHERE login = '$login'";
                            $send_requete = mysqli_query($connexionbd, $requete_info);
                            $info_login = mysqli_fetch_all($send_requete, MYSQLI_ASSOC);
                                                       
                            if($login == $_SESSION["login"] || empty($info_login))
                                {
                                    $requete_update_login = "UPDATE utilisateurs SET login='$login' WHERE id='$id'";
                                    $query_up_login = mysqli_query($connexionbd, $requete_update_login);
                                    $msg_login = "Login changé";
                                }
                            else
                                {
                                    $msg_error = "Ce login est déjà prit";
                                }
                            if(isset($mdp) && !empty($mdp))
                                {        
                                    if($mdp == $mdp_conf)
                                        {
                                            $mdp_hache = password_hash($mdp, PASSWORD_DEFAULT);
                                            $requete_update_mdp = "UPDATE utilisateurs SET password='$mdp_hache' WHERE id='$id'";
                                            $query_up_mdp = mysqli_query($connexionbd, $requete_update_mdp);     
                                            $msg_mdp = "Mot de passe changé";                                   
                                        }
                                    else
                                        {
                                            $msg_error = "Les mots de passe ne correspondent pas";
                                        }
                                }
                        }
                    else
                        {
                            $msg_error = "Mauvais mot de passe";
                        }
                }
        }
?>