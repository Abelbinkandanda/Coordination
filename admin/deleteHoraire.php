<?php
    include '../config/database.php';

    $idhoraire=$_GET['idhoraire'];

    $stmt=$db->prepare("DELETE FROM affecthoraire WHERE idhoraire=:idhoraire");
    $stmt->execute([
        'idhoraire'=>$idhoraire
    ]);
    header('location:../horaire.php');  
  
?>