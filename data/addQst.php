<?php
include('data.php');
    if (!empty($_POST['question']) && !empty($_POST['score']) && !empty($_POST['type'])) {
        $question = $_POST['question'];
        $score = $_POST['score'];
        $type = $_POST['type'];
        $vrai = array();
        $tmp = 1;
        if ($_POST['type'] == "choixT") {
            if (!empty($_POST['reponse'])) {
                $reponse = $_POST['reponse'];  
            }
            else{
                $tmp = 0;
            }
        }
        else{
            if ($_POST['type'] == "choixM") {
                $i = 0;
                if (!isset($_POST['reponse'.$i])) {
                    $tmp = 0;
                }else{
                    while(isset($_POST['reponse'.$i])){
                        if (!empty($_POST['reponse'.$i])) {
                            $reponse[$i] = $_POST['reponse'.$i];
                            if(isset($_POST['vrai'.$i])){
                                $vrai[] = $reponse[$i];
                            }  
                        }
                        else{
                            $tmp = 0;
                        }
                        if (!isset($vrai)) {
                            $tmp = 0;
                        }
                        $i++;
                    }
                }
            }
            else{
                if ($_POST['type'] == "choixS") {
                    $i = 0;
                    if (!isset($_POST['reponse'.$i])) {
                        $tmp = 0;
                    }else{
                        while(isset($_POST['reponse'.$i])){
                            if (!empty($_POST['reponse'.$i]) && !empty($_POST['vrai'])) {
                                $reponse[$i] = $_POST['reponse'.$i];
                            }
                            else{
                                $tmp = 0;
                            }
                            $i++;
                        }
                        if ($tmp) {
                            $vrai[] = $_POST[$_POST['vrai']];
                        }
                    }
                    
                }
            }   
        }
        if($tmp){
            creer_qst($question, $score, $type, $reponse, $vrai);
        }
        else{
                echo 'remplir tous les champs';
        }
    }

?>