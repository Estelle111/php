<?php

require './header.php';
require './dbConnect.php';

// get library table from bibliotheque database
$sql = "SELECT * FROM library";
$result = $pdo->query($sql);
$rows = array();

while($r = $result->fetch(PDO::FETCH_ASSOC)){
    $rows[]=$r;
}
echo json_encode($rows);

//$conn->close()

?>