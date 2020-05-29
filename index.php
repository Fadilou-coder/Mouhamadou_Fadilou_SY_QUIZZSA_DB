<?php
    if (isset($_GET['lien'])) {
        switch ($_GET['lien']) {
            case 'creer_jr':
                require_once("CreerJoueur.php");
                break;
        }
    }
    else{
        require_once("PageConnexion.php");
    }
?>