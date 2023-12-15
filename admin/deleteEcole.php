<?php
    include '../config/database.php';

    $idecole=$_GET['idecole'];

    $stmt=$db->prepare("DELETE FROM ecole WHERE idecole=:idecole");
    $stmt->execute([
        'idecole'=>$idecole
    ]);
    header('location:../ecole.php');  
  
?>