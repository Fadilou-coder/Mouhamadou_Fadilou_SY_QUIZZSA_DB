<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page D'incription</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="m-0 p-0 d-flex justify-content-center">
    <div class="container-fluid fixed-top haut">
        <img class="position-absolute h-100" src="Images/logo-QuizzSA.png" alt="">
        <h2 class="text-center text-white mt-3">Plaisir de Jouer</h2>
    </div>
    <div class="container mt-md-2">
        <div class="row">
            <div class="col-lg-6  col-9 mt-3">
                <div class="row mt-5">
                    <div class="alert text-white mb-0 mt-4 col-9 blok-ins">
                        <h1 class="ml-xs-0 ml-3 mb-0 text">S'INSCRIRE</h1>
                        <p class="ml-xs-0 ml-3">Pour tester votre niveau de culture général</p>
                    </div>
                </div>
                <div class="row">
                    <div class="alert bg-light col-9 rounded">
                        <form class="container" action="" method="POST" enctype="multipart/form-data" id="form">
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control border border-info form-control rounded mt-3" id="prenom" value="<?php if(!empty($_POST['prenom'])) echo $_POST['prenom'] ?>">
                            <small class="text-danger" id="error-prenom"></small>
                            <input type="text" name="nom" placeholder="Nom" class="form-control border border-info form-control rounded mt-3" id="nom" value="<?php if(!empty($_POST['nom'])) echo $_POST['nom'] ?>">
                            <small class="text-danger" id="error-nom"></small>
                            <input type="text" name="login" placeholder="Login" class="form-control border border-info form-control rounded mt-3" id="login" value="<?php if(!empty($_POST['login'])) echo $_POST['login'] ?>">
                            <small class="text-danger" id="error-login"></small>
                            <input type="password" name="password" placeholder="Password" class="form-control border border-info form-control rounded mt-3" id="password">
                            <small class="text-danger" id="error-password"></small>
                            <input type="password" name="password1" placeholder="Confirm Password" class="form-control border border-info form-control rounded mt-3" id="confirm_password">
                            <small class="text-danger" id="error-password1"></small><br>
                            <label class="text-dark">Avatar</label>
                            <input class="bg-none float-right col-md-5 col-8 " type="file" name="votre_image" id="votre_image" accept="image/*"><br>
                            <small class="text-danger" id="error-votre_image"></small>
                            <button class="btn btn-info btn-block mt-2" type="submit" name="valider">Creer Compte</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-5 ">
                <div class="mt-5">
                    <img id="output" class="border rounded-circle mt-5 w-100">
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/script.js"></script>
</body>
</html>

<?php
include('data/data.php');
if(isset($_POST['valider'])){
    if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['login']) && !empty($_POST['password1']) &&  !empty($_POST['password'])){
       $login = $_POST['login'];
       $password = $_POST['password'];
       $password1 = $_POST['password1'];
       $prenom = $_POST['prenom'];
       $nom = $_POST['nom'];
       if ($password == $password1){
           $tmp = 1;
           if ($tmp) {
               $chemin = "img-user/";
               $photo = $chemin.basename($_FILES["votre_image"]["name"]);
               $uploadOk = 1;
               $Type = strtolower(pathinfo($photo,PATHINFO_EXTENSION));   
               $profil = $login.".";
               $profil .= $Type;
               $profil = $chemin.$profil;
           
               if($Type != "jpg" && $Type != "png" && $Type != "jpeg") {
                   echo "Désolé, les fichiers JPG, JPEG, PNG sont autorisés.";
                   $uploadOk = 0;
               }
           
               if ($uploadOk == 0) {
                   echo '<strong class="fixed-bottom mb-lg-4 text-danger">Désolé, Votre photo n`est pas téléchargé.</strong>';
           
               } else {
                   if (move_uploaded_file($_FILES["votre_image"]["tmp_name"], $profil)) {
                        creer_user($prenom, $nom, $login, $password, $profil, 'user');
                        header('location: index.php');
                   } else {
                       echo '<strong class="fixed-bottom mb-lg-4 text-danger">Désolé, Erreur de téléchargement du photo.</strong>';
                   }
               }
               
           }
           else{
               echo ' <center><strong class="fixed-bottom mb-lg-4 text-danger">Ce login existe deja!!!.</strong></center>';
           }
           
       }
   }
}


?>