<?php
include('data.php');

    $limit = $_POST['limit'];
    $offset = $_POST['offset'];

    $sql ="
            SELECT * 
            FROM joueur
            ORDER BY id DESC
            LIMIT {$limit} 
            OFFSET {$offset}
    ";
    $req = connect_bd()->query($sql);
    $result = $req->fetchAll(2);

    echo json_encode($result);
?>