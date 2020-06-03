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
    <title>Liste Joueurs</title>
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
                    <h1 class="text-white text-center text">BIENVENU SUR LA PLATEFORM DE JEU DE QUIZZ</h1>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <div class="container mt-5">
                <div class="row mt-5 mt-lg-4">
                    <nav class="container navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler mt-md-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="container navbar-nav mr-auto">
                                    <div class="ml-lg-5 bg-light border border-info alert mb-0">
                                        <li class="nav-item">
                                            <a class="navbar-brand" href="index.php?lien=int_jr&page=1"><h1 class="ml-lg-2">QUESTIONS</h1></a>
                                        </li>
                                    </div>
                                    <div class="ml-lg-5">
                                        <div class="ml-lg-5">
                                            <div class="ml-lg-5">
                                                <div class="ml-lg-5">
                                                    <div class="ml-lg-5 bg-light border border-info alert mb-0">
                                                        <li class="nav-item ml-lg-4">
                                                            <a class="navbar-brand" href="index.php?lien=int_jr&page=1&score=top"><h1>TOP SCORE</h1></a>
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                </ul>
                            </div>
                    </nav>
                </div>
                <div class="container row border border-info bg-light alert">
                    <div class="container">
                        <div class="bg-danger container mt-2">
                            <h2 class="text-white text-center">QUESTION /:</h2>
                            <h2 class="text-white text-center"></h2>
                        </div>
                        <div class="col-1 bg-danger float-right text-center col-xs-2">X pts</div><br>
                        <div class="container mt-5">
                            <div class="container">
                                <form action="" method="POST">
                                    <div class="container"><input class="form-control-lg" type="checkbox" name="reponse1" id=""> <label for="reponse1"><h1></h1></label> </div>
                                    <div class="container"><input type="checkbox" name="reponse2" id=""> <label for="reponse2"><h1></h1></label> </div>
                                    <div class="container mb-5"><input type="checkbox" name="reponse3" id=""> <label for="reponse3"><h1></h1></label> </div>
                                    <button class="btn btn-info float-left" type="submit" name="suivant">Suivant</button>
                                    <button class="btn btn-danger ml-xs-5 btn-quit" type="submit" name="suivant">Quitter</button>
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