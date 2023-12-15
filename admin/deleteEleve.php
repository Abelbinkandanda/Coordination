<?php
    include '../config/database.php';

    $ideleve=$_GET['ideleve'];

    $stmt=$db->prepare("DELETE FROM eleve WHERE ideleve=:ideleve");
    $stmt->execute([
        'ideleve'=>$ideleve
    ]);
    header('location:../eleve.php');  
  
?>