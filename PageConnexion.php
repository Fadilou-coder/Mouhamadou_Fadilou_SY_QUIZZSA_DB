<?php
include('data/data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PageConnexion</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link href="public/css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="p-0 m-0 d-flex justify-content-center">
    <div class="container-fluid fixed-top haut">
        <h2 class="text-center text-white mt-3">Plaisir de Jouer</h2>
    </div>
    <div id="body" class="row container-fluid justify-content-center">
        <div class="col-lg-6 col-10 mt-5 ">
            <div class="row mt-5">
                <div class="col-md-5 col-10 bg-white container mt-5 mt-md-0">
                    <img class="position-absolute  h-100" src="Images/logo-QuizzSA.png"><br>
                    <h2 class="text-center text-warning ml-4">QUIZZ<span class="text-info">SA</span></h2>
                </div>
            </div>
            <div class="container-fluid bg-white">
                <div class="row">
                    <div class="alert alert-info m-4 col-11 m-xs-0 text-center">
                        <h5 class="mt-2 ">Vous avez pas encore de compte?<a id="ins" class="text-info" href="#">Inscrivez-vous maintenant !</a></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="container mt-4 ">
                        <form name="form-cnx" class="container" action="" method="POST" id="form">
                            <div class="form-group">
                            <label>Login</label><br>
                            <input type="text" name="login" class="form-control  rounded form-control-lg" id="login">
                            <small class="text-danger" id="error-login"></small>
                            <br><br>
                            <label>Password</label><br>
                            <input type="password" name="password" class="form-control rounded form-control-lg" id="password">
                            <small class="text-danger" id="error-password"></small>
                            <center><button type="submit" name="valider" class="btn btn-info text-white mt-4 mb-4 btn-lg">Connexion</button></center>
                            </div>                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/script.js"></script>
</body>
</html>


<?php
if(isset($_POST['valider'])){
    if(!empty($_POST['login']) && !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        connexion($login, $password);
    }

}

?>