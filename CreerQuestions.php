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
    <title>Creer Questions</title>
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body class="m-0 p-0">
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
                                        <a class="navbar-brand" href="index.php?lien=liste_jr">Liste Joueur</a>
                                    </li>
                                    <li class="nav-item active border border-info mr-3">
                                        <a class="navbar-brand text-info ml-3" href="index.php?lien=creer_qst">Creer Questions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="index.php?lien=liste_qst">Liste Questions</a>
                                    </li>
                                    <li class=" nav-item">
                                        <a class="navbar-brand" href="#">Tableau de Bord</a>
                                    </li>
                                    <li class="nav-item mr-5">
                                        <a class="navbar-brand" href="index.php?lien=liste_ad">Liste Admin</a>
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
        <div class=" mt-5">
            <div class="container-fluid mt-5 d-flex justify-content-center">
                <div class="container-fluid mt-5">
                    <div class="container mt-5 bg-light">
                        <div class="row mt-5">
                            <div class="container mt-5 col-9">
                            <form name="form-qst" method="POST" id="form">
                                <div class="form-group row">
                                    <label for="question" class="col-sm-2 col-form-label mr-sm-5 mr-md-3 mr-lg-0">QUESTION</label>
                                    <div class="col-sm-8">
                                    <textarea class="form-control" id="question" name="question"><?php if(!empty($_POST['question'])) echo $_POST['question']; ?></textarea>
                                    <small class="text-danger" id="error-question"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="score" class="col-sm-5 col-md-3 col-form-label mr-md-3 mr-lg-0">Nbre de Points</label>
                                    <div class="col-sm-3 col-md-2">
                                        <input class="form-control" id="score" type="number" name="score" value="<?php if(!empty($_POST['score'])) echo $_POST['score']; ?>">
                                        <small class="text-danger" id="error-score"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="type" class="col-md-3 col-form-label mr-sm-5 mr-md-3 mr-lg-0">Type de Reponse</label>
                                    <div class="col-7">
                                        <select id="type" name="type" class="form-control">
                                            <option  value= "<?php if(!empty($_POST['type'])) echo $_POST['type']; ?>">Choisiser un type</option>
                                            <option value="choixM">Choix Multiple</option>
                                            <option value="choixS">Choix Simple</option>
                                            <option value="choixT">Choix Texte</option>
                                        </select>
                                        <small class="text-danger" id="error-type"></small>
                                    </div>
                                    <div class="col-1">
                                        <button class="border border-none bg-white" id="ajout" name="ajout" type="button">
                                            <img src="Images\ic-ajout-reponse.png"/>
                                        </button>
                                    </div>
                                </div>
                                <div class="container-fluid" id="formulaire" >
                                </div>
                                <button class="btn btn-info mb-2" type="submit" name="valider">Enregistrer</button>
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
    <script src="public/js/script.js"></script>
    <script src="public/js/jquery.js"></script>
</body>
</html>

<script>
$(document).ready(function(){
    $(document).on('submit', '#form', function(e){
        $.ajax({
                type: "POST",
                url: "http://localhost/php/data/addQst.php",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (data) {
                    alert(data)
                }
        });
    })
})
</script>

<?php

// if (isset($_POST['valider'])) {
//     if (!empty($_POST['question']) && !empty($_POST['score']) && !empty($_POST['type'])) {
//         $question = $_POST['question'];
//         $score = $_POST['score'];
//         $type = $_POST['type'];
//         $vrai = array();
//         $tmp = 1;
//         if ($_POST['type'] == "choixT") {
//             if (!empty($_POST['reponse'])) {
//                 $reponse = $_POST['reponse'];  
//             }
//             else{
//                 $tmp = 0;
//             }
//         }
//         else{
//             if ($_POST['type'] == "choixM") {
//                 $i = 0;
//                 if (!isset($_POST['reponse'.$i])) {
//                     $tmp = 0;
//                 }else{
//                     while(isset($_POST['reponse'.$i])){
//                         if (!empty($_POST['reponse'.$i])) {
//                             $reponse[$i] = $_POST['reponse'.$i];
//                             if(isset($_POST['vrai'.$i])){
//                                 $vrai[] = $reponse[$i];
//                             }  
//                         }
//                         else{
//                             $tmp = 0;
//                         }
//                         if (!isset($vrai)) {
//                             $tmp = 0;
//                         }
//                         $i++;
//                     }
//                 }
//             }
//             else{
//                 if ($_POST['type'] == "choixS") {
//                     $i = 0;
//                     if (!isset($_POST['reponse'.$i])) {
//                         $tmp = 0;
//                     }else{
//                         while(isset($_POST['reponse'.$i])){
//                             if (!empty($_POST['reponse'.$i]) && !empty($_POST['vrai'])) {
//                                 $reponse[$i] = $_POST['reponse'.$i];
//                             }
//                             else{
//                                 $tmp = 0;
//                             }
//                             $i++;
//                         }
//                         if ($tmp) {
//                             $vrai[] = $_POST[$_POST['vrai']];
//                         }
//                     }
                    
//                 }
//             }   
//         }
//         if($tmp){
//             creer_qst($question, $score, $type, $reponse, $vrai);
//         }
//         else{
//                 echo '<script>
//                             alert("remplir tous les champs");
//                     </script>';
//         }
//     }
// }
?>
