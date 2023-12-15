<?php
    include '../config/database.php';

    $idclass=$_GET['idclass'];

    $stmt=$db->prepare("DELETE FROM classe WHERE idclass=:idclass");
    $stmt->execute([
        'idclass'=>$idclass
    ]);
    header('location:../classe.php');  
  
?>