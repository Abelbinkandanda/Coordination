<?php
    include '../config/database.php';

    $idense=$_GET['idense'];

    $stmt=$db->prepare("DELETE FROM enseignant WHERE idense=:idense");
    $stmt->execute([
        'idense'=>$idense
    ]);
    header('location:../enseignant.php');  
  
?>