<?php
    include '../config/database.php';

    $iduser=$_GET['iduser'];

    $stmt=$db->prepare("DELETE FROM utilisateur WHERE iduser=:iduser");
    $stmt->execute([
        'iduser'=>$iduser
    ]);
    header('location:../users.php');  
  
?>