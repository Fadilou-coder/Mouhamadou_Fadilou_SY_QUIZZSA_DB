<?php
if (isset($_POST['deconnexion'])) {
    header('location: deconnexion.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer Admin</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
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
                                    <li class="nav-item active border border-info mr-3">
                                        <a class="navbar-brand text-info ml-3" href="">Creer Admin <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="index.php?lien=liste_jr">Liste Joueur</a>
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
            <div class="col-lg-6  col-9 mt-5">
                <div class="row mt-5">
                    <div class="alert text-white mb-0 col-9 blok-ins mt-5">
                        <h1 class="ml-xs-0 ml-3 mb-0 text">S'INSCRIRE</h1>
                        <p class="ml-xs-0 ml-3">Pour tester votre niveau de culture général</p>
                    </div>
                </div>
                <div class="row">
                    <div class="alert bg-light col-9 rounded">
                        <form class="container" method="POST" enctype="multipart/form-data" id="form">
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control border border-info form-control rounded mt-3" id="prenom" value="<?php if(!empty($_POST['prenom'])) echo $_POST['prenom'] ?>">
                            <small class="text-danger" id="error-prenom"></small>
                            <input type="text" name="nom" placeholder="Nom" class="form-control border border-info form-control rounded mt-3" id="nom" value="<?php if(!empty($_POST['nom'])) echo $_POST['nom'] ?>">
                            <small class="text-danger" id="error-nom"></small>
                            <input type="text" name="login" placeholder="Login" class="form-control border border-info form-control rounded mt-3" id="login" value="<?php if(!empty($_POST['login'])) echo $_POST['login'] ?>">
                            <small class="text-danger" id="error-login"></small>
                            <input type="password" name="password" placeholder="Password" class="form-control border border-info form-control rounded mt-3" id="password">
                            <small class="text-danger" id="error-password"></small>
                            <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control border border-info form-control rounded mt-3" id="confirm_password">
                            <small class="text-danger" id="error-password1"></small><br>
                            <label class="text-dark">Avatar</label>
                            <input class="bg-none float-right col-md-5 col-8 " type="file" name="votre_image" id="votre_image"><br>
                            <small class="text-danger" id="error-votre_image"></small>
                            <button class="btn btn-info btn-block mt-2" type="submit" name="valider">Creer Compte</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-5">
                <div class="mt-5 container col-3 position-fixed avatar">
                    <img id="output" class="border rounded-circle mt-5 w-100 h-100">
                </div>
            </div>
            </div>
        </div>
        
    </div>




    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/script.js"></script>
</body>
</html>

<script>
$(document).ready(function(){
    $(document).on('submit', '#form', function(e){
        const prenom = $('#prenom').val();
        const nom = $('#nom').val();
        const login = $('#login').val();
        const password = $('#password').val();
        const confirm_password = $('#confirm_password').val();
        const votre_image = $('#votre_image').val();
        $.ajax({
                type: "POST",
                url: "http://localhost/php/data/addAdmin.php",
                // data: {
                //     'prenom':prenom,
                //     'nom':nom,
                //     'login':login,
                //     'password':password,
                //     'confirm_password':confirm_password,
                //     'votre_image':votre_image
                // },
                data: new FormData(this),
                processData: false,
                contentType: false,
                dataType: "text",
                success: function (data) {
                    if (data) {
                        alert(data);
                    }
                }
                
        })
    })
})
</script>
<?php
// if(isset($_POST['valider'])){
//     if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['login']) && !empty($_POST['password1']) &&  !empty($_POST['password'])){
//        $login = $_POST['login'];
//        $password = $_POST['password'];
//        $password1 = $_POST['password1'];
//        $prenom = $_POST['prenom'];
//        $nom = $_POST['nom'];
//        if ($password == $password1){
//            $tmp = 1;
//            if ($tmp) {
//                $chemin = "img-admin/";
//                $photo = $chemin.basename($_FILES["votre_image"]["name"]);
//                $uploadOk = 1;
//                $Type = strtolower(pathinfo($photo,PATHINFO_EXTENSION));   
//                $profil = $login.".";
//                $profil .= $Type;
//                $profil = $chemin.$profil;
           
//                if($Type != "jpg" && $Type != "png" && $Type != "jpeg") {
//                    echo "Désolé, les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
//                    $uploadOk = 0;
//                }
           
//                if ($uploadOk == 0) {
//                 echo '<strong class="fixed-bottom mb-lg-4 text-danger">Désolé, Votre photo n`est pas téléchargé.</strong>';
           
//                } else {
//                    if (move_uploaded_file($_FILES["votre_image"]["tmp_name"], $profil)) {
//                         creer_user($prenom, $nom, $login, $password, $profil, 'admin');
//                    } else {
//                        echo '<strong class="fixed-bottom mb-lg-4 text-danger">Désolé, Erreur de téléchargement du photo.</strong>';
//                    }
//                }
               
//            }
//            else{
//                echo '<center><strong class="fixed-bottom mb-lg-4 text-danger">Ce login existe deja!!!.</strong></center>';
//            }
           
//        }
//    }
// }


?>