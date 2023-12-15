<?php
    include '../config/database.php';

    $idins=$_GET['idins'];

    $stmt=$db->prepare("DELETE FROM inscription WHERE idins=:idins");
    $stmt->execute([
        'idins'=>$idins
    ]);
    header('location:../inscription.php');  
  
?>