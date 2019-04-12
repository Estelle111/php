<?php

require './header.php';
require './dbConnect.php';


$stmt = $pdo->prepare("INSERT INTO library (author, title, publication, genre) VALUES (:author, :title, :publication, :genre)");

$author = $_GET['author'];
$title = $_GET['title'];
$publication = $_GET['publication'];
$genre = $_GET['genre'];

$stmt->execute([
    'author' => $author,
    'title' => $title,
    'publication' => $publication,
    'genre' => $genre
]);

print json_encode('status: 200');

?>