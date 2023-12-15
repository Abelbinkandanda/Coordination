<?php
    include '../config/database.php';

    $idaffect=$_GET['idaffect'];

    $stmt=$db->prepare("DELETE FROM affectenseignant WHERE idaffect=:idaffect");
    $stmt->execute([
        'idaffect'=>$idaffect
    ]);
    header('location:../affectation.php');  
  
?>