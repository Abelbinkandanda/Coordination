<?php
    include '../config/database.php';

    $idinfo=$_GET['idinfo'];

    $stmt=$db->prepare("DELETE FROM information WHERE idinfo=:idinfo");
    $stmt->execute([
        'idinfo'=>$idinfo
    ]);
    header('location:../information.php');  
  
?>