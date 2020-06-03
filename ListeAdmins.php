<?php
include('data/data.php');
if (isset($_POST['deconnexion'])) {
    header('location: deconnexion.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Admins</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="m-0 p-0">
    <div class="container-fluid fixed-top haut">
        <img class="position-absolute h-100" src="Images/logo-QuizzSA.png" alt="">
        <form action="" method="POST"><button class="btn btn-info float-right mt-3" type="submit" name="deconnexion">Deconnexion</button></form>
        <h2 class="text-center text-white mt-3">Plaisir de Jouer</h2>
    </div>
    <div class="container">
        <div class="container fixed-top">
            <div class="row mt-5">
                <div class="container position-fixed bg-info mt-4">
                    <h1 class="text-white text-center text">CREER ET PARAMETRER VOS QUIZZ</h1>
                </div>
            </div>
            <div class="row container justify-content-center position-fixed mt-5">
                <div class="container-fluid mt-2 mt-xs-0">
                    <nav class="container navbar navbar-expand-lg navbar-light bg-white mt-4">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="navbar-brand" href="index.php?lien=CreerAdmin">Creer Admin <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="index.php?lien=liste_jr">Liste Joueur</a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="#">Creer Questions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="#">Liste Questions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-brand" href="#">Tableau de Bord</a>
                                </li>
                                <li class="nav-item active border border-info">
                                    <a class="navbar-brand text-info ml-3" href="index.php?lien=liste_ad">Liste Admin</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <div class="container mt-5 bg-light">
                <div class="row mt-5">
                    <h1 class="container mt-5 text-center text-info">LISTE ADMINISTRATEUR</h1>
                </div>
                <div class="container row">
                    <div class="container">
                        <div class="container alert text-white mb-0 border border-info">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-dark border border-0">Prénom: </th>
                                        <th class="text-dark border-0 text-center">Nom: </th>
                                    </tr>
                                    <tr class="mb-0">
                                        <td class="text-dark border border-0"></td>
                                        <td class="text-dark border border-0 text-center"></td>
                                    </tr>
                                </thead>

                            </table>
                            <div class="row">
                                <form action="" method="POST" class="container">
                                    <button class="btn btn-info float-left" type="submit" name="suivant">Suivant</button>
                                    <button class="btn btn-info float-right" type="submit" name="prec">Précédant</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    



    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>