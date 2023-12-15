<?php
    include '../config/database.php';

    $idopti=$_GET['idopti'];

    $stmt=$db->prepare("DELETE FROM options WHERE idopti=:idopti");
    $stmt->execute([
        'idopti'=>$idopti
    ]);
    header('location:../option.php');  
  
?>