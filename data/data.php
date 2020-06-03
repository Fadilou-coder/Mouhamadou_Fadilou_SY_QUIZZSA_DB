<?php

function connect_bd(){
    try{
        return $cnx = new PDO('mysql:host=mysql-mfs-quizzsa-db.alwaysdata.net;dbname=mfs-quizzsa-db_quizz-sa','207805','Zeumb645');
    }
    catch (Exception $e){
        die('Error'.$e->getMessage());
    }
}

function creer_user($prenom, $nom, $login, $password, $profil, $table){
    if ($table === 'user') {
        $req=connect_bd()->prepare('INSERT INTO joueur(Id,Prenom,Nom,Login,Password,Profil) VALUES(?,?,?,?,?,?)');
        $req->execute(array(null, $prenom, $nom, $login, $password, $profil));
    }
    else{
        $req=connect_bd()->prepare('INSERT INTO admin(Id,Prenom,Nom,Login,Password,Profil) VALUES(?,?,?,?,?,?)');
        $req->execute(array(null, $prenom, $nom, $login, $password, $profil));
    }
}

function connexion($login,$password){
    $joueurs = connect_bd()->prepare('SELECT * FROM joueur');
    $joueurs->execute();
    $joueurs = $joueurs->fetchAll();
    $admins = connect_bd()->prepare('SELECT * FROM admin');
    $admins->execute();
    $admins = $admins->fetchAll();
    $user = "";

    for ($i=0; $i < count($joueurs) ; $i++) { 
        if($joueurs[$i]['Login'] == $login && $joueurs[$i]['Password'] == $password){
            $user = "user";
            $login = $joueurs[$i]['Login'];
            $prenom = $joueurs[$i]['Prenom'];
            $nom = $joueurs[$i]['Nom'];
            $profil = $joueurs[$i]['Profil'];
            break;
        }
    }
    for ($i=0; $i < count($admins) ; $i++) {
        if ($admins[$i]['Login'] == $login && $admins[$i]['Password'] == $password) {
            $user = "admin";
            $prenom = $admins[$i]['Prenom'];
            $nom = $admins[$i]['Pom'];
            $profil = $admins[$i]['Profil'];
            break;
        }
                                
    }
                            
    if($user == "user"){
        $_SESSION['User'] = 'connect';
        $_SESSION['login'] = $login;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['nom'] = $nom;
        $_SESSION['profil'] = $profil;
        $_SESSION['score'] = 0;
        header('location: index.php?lien=int_jr');
    }
    else{
        if($user == "admin"){
            $_SESSION['Admin'] = 'connect';
            $_SESSION['prenom'] = $prenom;
            $_SESSION['nom'] = $nom;
            $_SESSION['profil'] = $profil;
            header('location: index.php?lien=CreerAdmin');
        }
        else{
            echo ' <center><strong class="fixed-bottom mb-lg-4 text-danger">Login ou mot de passe incorrecte</strong></center>';
        }
    }
} 

?>