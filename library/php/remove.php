<?php
    require './header.php';
    require './dbConnect.php';

    $stmt = $pdo->prepare("DELETE FROM `library` WHERE id=:id"); 
    $removeid = $_GET['id'];
    $stmt->execute([
        'id' => $removeid,
    ]);
    //print json_encode($_GET);

?>