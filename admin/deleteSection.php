<?php
    include '../config/database.php';

    $idsec=$_GET['idsec'];

    $stmt=$db->prepare("DELETE FROM section WHERE idsec=:idsec");
    $stmt->execute([
        'idsec'=>$idsec
    ]);
    header('location:../section.php');  
  
?>