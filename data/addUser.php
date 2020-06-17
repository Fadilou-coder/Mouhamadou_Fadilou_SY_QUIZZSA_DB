
<?php
include('data.php');
    if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['login']) && !empty($_POST['confirm_password']) &&  !empty($_POST['password'])){
       $login = $_POST['login'];
       $password = $_POST['password'];
       $confirm_password = $_POST['confirm_password'];
       $prenom = $_POST['prenom'];
       $nom = $_POST['nom'];
       if ($password == $confirm_password){
               $chemin = "img-user/";
               $photo = $chemin.basename($_FILES['votre_image']['name']);
               $uploadOk = 1;
               $Type = strtolower(pathinfo($photo,PATHINFO_EXTENSION));   
               $profil = $login.".";
               $profil .= $Type;
               $profil = $chemin.$profil;
           
               if($Type != "jpg" && $Type != "png" && $Type != "jpeg") {
                   $uploadOk = 0;
               }
               if ($uploadOk == 0) {
                   echo 'erreur de chargement de votre image!!!!';
               } else {
                    if (move_uploaded_file($_FILES['votre_image']['tmp_name'], $profil)) {
                        creer_user($prenom, $nom, $login, $password, $profil, 'user');
                        echo '';
                   } else {
                       echo 'erreur de téléchargement de l image';
                   }
               }
       }
   }

?>