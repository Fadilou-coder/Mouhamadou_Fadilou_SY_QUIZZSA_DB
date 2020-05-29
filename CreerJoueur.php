<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page D'incription</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid position-absolute fixed-top haut">
        <img class="position-absolute h-100" src="Images/logo-QuizzSA.png" alt="">
        <h2 class="text-center text-white mt-3">Plaisir de Jouer</h2>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6">
                <div class="row">
                    <div class="alert text-white mb-0 mt-4 col-9 blok-ins">
                        <h1 class="ml-3 mb-0">S'INSCRIRE</h1>
                        <p class="ml-3">Pour tester votre niveau de culture général</p>
                    </div>
                </div>
                <div class="row">
                    <div class="alert bg-light col-9 rounded">
                        <form class="container" action="" method="POST" id="form">
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control border border-info form-control-lg rounded mt-3" id="prenom">
                            <small class="text-danger" id="error-prenom"></small>
                            <input type="text" name="nom" placeholder="Nom" class="form-control border border-info form-control-lg rounded mt-3" id="nom">
                            <small class="text-danger" id="error-nom"></small>
                            <input type="text" name="login" placeholder="Login" class="form-control border border-info form-control-lg rounded mt-3" id="login">
                            <small class="text-danger" id="error-login"></small>
                            <input type="password" name="password" placeholder="Password" class="form-control border border-info form-control-lg rounded mt-3" id="password">
                            <small class="text-danger" id="error-password"></small>
                            <input type="password" name="password1" placeholder="Confirm Password" class="form-control border border-info form-control-lg rounded mt-3" id="confirm_password">
                            <small class="text-danger" id="error-password1"></small><br>
                            <label class="text-dark">Avatar</label>
                            <input class="bg-none float-right col-5 col-xs-7" type="file" name="votre_image" id="votre_image"><br>
                            <small class="text-danger" id="error-votre_image"></small>
                            <button class="btn btn-info btn-block mt-2" type="submit" name="valider">Creer Compte</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-5">
                <div class="mt-5">
                    <img src="Images/profile-buttons-png-3.png" class="border rounded-circle mt-5 w-100 img-responsive">
                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>
</html>