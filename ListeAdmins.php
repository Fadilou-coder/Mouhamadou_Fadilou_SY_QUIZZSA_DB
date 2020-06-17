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
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="m-0 p-0" id="body">
    <div class="container-fluid fixed-top haut">
        <img class="position-absolute h-100" src="Images/logo-QuizzSA.png" alt="">
        <form action="" method="POST"><button class="btn btn-info float-right mt-3" type="submit" name="deconnexion">Deconnexion</button></form>
        <h2 class="text-center text-white mt-3">Plaisir de Jouer</h2>
    </div>
    <div class="container">
        <div class="container fixed-top">
            <div class="row container position-fixed mt-5 ml-lg-5 nav-bar">
                    <div class="mt-xs-0">
                        <nav class="container navbar navbar-expand-lg navbar-light mt-4">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class=" navbar-nav mr-auto bg-white">
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="index.php?lien=CreerAdmin">Creer Admin <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="index.php?lien=liste_jr">Liste Joueurs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="index.php?lien=creer_qst">Creer Questions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="index.php?lien=liste_qst">Liste Questions</a>
                                    </li>
                                    <li class=" nav-item">
                                        <a class="navbar-brand" href="#">Tableau de Bord</a>
                                    </li>
                                    <li class="nav-item mr-5  active border border-info mr-3">
                                        <a class="navbar-brand text-info ml-3" href="index.php?lien=liste_ad">Liste Admin</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
            </div>
            <div class="row mt-5 bloc-bleu">
                <div class="mt-1">
                    <div class="mt-4">
                        <div class="container position-fixed bg-info mt-5">
                            <h1 class="text-white text-center text">CREER ET PARAMETRER VOS QUIZZ</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="d-flex justify-content-center mt-5">
            <div class="container-fluid mt-5">
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
                                        <tbody id="thead">
                                            <tr class="mb-0">
                                                <td class="text-dark border border-0">AAAA</td>
                                                <td class="text-dark border border-0 text-center"></td>
                                            </tr>
                                        </tbody>
                                    </thead>

                                </table>
                                <div class="row">
                                    <div class="container">
                                        <button id="suiv" class="btn btn-info float-right" name="suivant">Suivant</button>
                                        <button id="prec" class="btn btn-info float-left" name="prec">Précédant</button>
                                    </div>
                                </div>
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
    <script src="public/js/script.js"></script>
    <script src="public/js/jquery.js"></script>
</body>
</html>

<script>
var offset = 0;
var nbre_ad;
    $(document).ready(function(){
        const thead = $('#thead');
        $.ajax({
            type: "POST",
            url: "http://localhost/php/data/getnbrAdmins.php",
            data: {},
            dataType: "JSON",
            success: function (data) {
                nbre_ad = data.length - 5;
            }
        });
        $.ajax({
            type: "POST",
            url: "http://localhost/php/data/getadmins.php",
            data: {limit:5,offset:offset},
            dataType: "JSON",
            success: function (data) {
                thead.html('')
                printData(data,thead);
            }
        });
        $('#suiv').click(function(e){
            offset +=5;
            $.ajax({
                type: "POST",
                url: "http://localhost/php/data/getadmins.php",
                data: {limit:5,offset:offset},
                dataType: "JSON",
                success: function (data) {
                    thead.html('')
                    printData(data,thead);
                        
                }
            });
        })
        $('#prec').click(function(e){
            offset -=5;
            $.ajax({
                type: "POST",
                url: "http://localhost/php/data/getadmins.php",
                data: {limit:5,offset:offset},
                dataType: "JSON",
                success: function (data) {
                    thead.html('')
                    printData(data,thead);
                }
            });
            
        })
    });

function printData(data,thead){
        if (offset == 0) {
            $('#prec').css('display','none')
        }
        else{
            $('#prec').css('display','block')
        }
        if (offset >= nbre_ad) {
            $('#suiv').css('display','none')
        }
        else{
            $('#suiv').css('display','block')
        }

        $.each(data, function(indice,admin){
            thead.append(`
                <tr class="mb-0">
                    <td class="text-dark border border-0">${admin.prenom}</td>
                    <td class="text-dark border border-0 text-center">${admin.nom}</td>
                </tr>
            `);
        });
}
</script>