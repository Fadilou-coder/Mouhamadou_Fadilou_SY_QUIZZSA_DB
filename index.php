<?php
    if (isset($_GET['lien'])) {
        switch ($_GET['lien']) {
            case 'creer_jr':
                require_once("CreerJoueur.php");
                break;
            case 'CreerAdmin':
                require_once("CreerAdmin.php");
                break;
            case 'liste_jr':
                require_once("ListeJoueurs.php");
                break;
            case 'liste_ad':
                require_once("ListeAdmins.php");
                break;
        }
    }
    else{
        require_once("PageConnexion.php");
    }
?>