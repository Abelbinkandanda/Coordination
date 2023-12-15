<?php
    include '../config/database.php';

    $idcours=$_GET['idcours'];

    $stmt=$db->prepare("DELETE FROM cours WHERE idcours=:idcours");
    $stmt->execute([
        'idcours'=>$idcours
    ]);
    header('location:../cours.php');  
  
?>