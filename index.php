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
            case 'int_jr':
                require_once("interfaceUser.php");
                break;
            case 'creer_qst':
                require_once("CreerQuestions.php");
                break;
            case 'liste_qst':
                require_once("ListeQuestions.php");
                break;
        }
    }
    else{
        require_once("PageConnexion.php");
    }
?>