<?php
    require './header.php';
    require './dbConnect.php';

    $stmt = $pdo->prepare("UPDATE library SET completed=:completed WHERE id=:id"); 
    $idLibrary = $_GET['id'];
    $updateLibrary = $_GET['completed'];
    $stmt->execute([
        'id' => $idLibrary,
        'completed' => $updateLibrary,
    ]);
    print json_encode($_GET);
?>