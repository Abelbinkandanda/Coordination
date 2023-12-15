<?php
    include '../config/database.php';

    $idrole=$_GET['idrole'];

    $stmt=$db->prepare("DELETE FROM role WHERE idrole=:idrole");
    $stmt->execute([
        'idrole'=>$idrole
    ]);
    header('location:../role.php');  
  
?>