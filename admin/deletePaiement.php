<?php
    include '../config/database.php';

    $idpaie=$_GET['idpaie'];

    $stmt=$db->prepare("DELETE FROM paiement WHERE idpaie=:idpaie");
    $stmt->execute([
        'idpaie'=>$idpaie
    ]);
    header('location:../paiement.php');  
  
?>