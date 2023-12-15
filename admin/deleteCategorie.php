<?php
    include '../config/database.php';

    $idcat=$_GET['idcat'];

    $stmt=$db->prepare("DELETE FROM categorie WHERE idcat=:idcat");
    $stmt->execute([
        'idcat'=>$idcat
    ]);
    header('location:../categorie.php'); 
  
?>
