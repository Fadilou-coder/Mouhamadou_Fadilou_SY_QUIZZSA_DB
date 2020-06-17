<?php
include('data.php');
    $sql ="
            SELECT *
            FROM questions
    ";
    $req = connect_bd()->query($sql);
    $result = $req->fetchAll(2);
    echo json_encode($result);
?>