<?php
    include '../config/database.php';

    $idrapport=$_GET['idrapport'];

    $stmt=$db->prepare("DELETE FROM rapport WHERE idrapport=:idrapport");
    $stmt->execute([
        'idrapport'=>$idrapport
    ]);
    header('location:../rapport.php');  
  
?>