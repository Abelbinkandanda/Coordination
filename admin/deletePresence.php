<?php
    include '../config/database.php';

    $idpres=$_GET['idpres'];

    $stmt=$db->prepare("DELETE FROM presence WHERE idpres=:idpres");
    $stmt->execute([
        'idpres'=>$idpres
    ]);
    header('location:../presence.php');  
  
?>