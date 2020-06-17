<?php

function connect_bd(){

    $dbhost = 'mysql-mfs-quizzsa-db.alwaysdata.net';
    $dbname = 'mfs-quizzsa-db_quizz-sa';
    $dbuser = '207805';
    $dbpswd = 'Zeumb645';
    try{
        $cnx = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            )
        );
    }catch (PDOException $e){
        die("Une erreur est survenue lors de la connexion à la Base de données !");
    }
    return $cnx;
}
function resharch($login){
    $joueurs = connect_bd()->prepare('SELECT * FROM joueur');
    $joueurs->execute();
    $joueurs = $joueurs->fetchAll();
    $admins = connect_bd()->prepare('SELECT * FROM admin');
    $admins->execute();
    $admins = $admins->fetchAll();
    for ($i=0; $i < count($joueurs) ; $i++) { 
        if($joueurs[$i]['login'] == $login){
            return 0;
        }
    }
    for ($i=0; $i < count($admins) ; $i++) { 
        if($admins[$i]['login'] == $login){
            return 0;
        }
    }
    return 1;
}
function creer_user($prenom, $nom, $login, $password, $profil, $table){
    if (resharch($login) == 0) {
        return 0;
    }
       
    if ($table === 'user') {
        $req=connect_bd()->prepare('INSERT INTO joueur(id,prenom,nom,login,password,profil,score) VALUES(?,?,?,?,?,?,?)');
        $req->execute(array(null, $prenom, $nom, $login, $password, $profil,0));
        header('location: index.php');
    }
    else{
        $req=connect_bd()->prepare('INSERT INTO admin(id,prenom,nom,login,password,profil) VALUES(?,?,?,?,?,?)');
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
        if($joueurs[$i]['login'] == $login && $joueurs[$i]['password'] == $password){
            $user = "user";
            $login = $joueurs[$i]['login'];
            $prenom = $joueurs[$i]['prenom'];
            $nom = $joueurs[$i]['nom'];
            $profil = $joueurs[$i]['profil'];
            break;
        }
    }
    for ($i=0; $i < count($admins) ; $i++) {
        if ($admins[$i]['login'] == $login && $admins[$i]['password'] == $password) {
            $user = "admin";
            $prenom = $admins[$i]['prenom'];
            $nom = $admins[$i]['nom'];
            $profil = $admins[$i]['profil'];
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
            return 0;
        }
    }
} 

function creer_qst($question, $score, $type, $reponse, $vrai){
    $req=connect_bd()->prepare('INSERT INTO questions VALUES(?,?,?,?)');
    $req->execute(array(null, $question, $score, $type));
    if ($type == 'choixT') {
        $req=connect_bd()->prepare('INSERT INTO reponses VALUES(?,?,?,?)');
        $req->execute(array(null, $reponse,'', ''));
    }else{
            for ($i=0; $i < 3 ; $i++) { 
                
                if (isset($reponse[$i])) {
                    $rps[$i] = $reponse[$i];
                }else{
                    $rps[$i] = '';
                }
                if (isset($vrai[$i])) {
                    $vr[$i] = $vrai[$i];
                }else{
                    $vr[$i] = '';
                }
            }
            $req=connect_bd()->prepare('INSERT INTO reponses VALUES(?,?,?,?)');
            $req->execute(array(null, $rps[0],$rps[1], $rps[2]));
            $req = connect_bd()->query('SELECT LAST_INSERT_ID() FROM reponses');
            $result = $req->fetchAll();
            $result = count($result);
            $req1=connect_bd()->prepare('INSERT INTO rep_vrai VALUES(?,?,?,?)');
            $req1->execute(array($result, $vr[0],$vr[1],$result));
    }
    echo 'success';
}

?>