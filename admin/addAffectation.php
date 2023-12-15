<?php
    include '../config/database.php';

    if(isset($_POST['idenseig']) && isset($_POST['idecole']) && isset($_POST['idcours'])){
      
        $idenseig=$_POST['idenseig'];
        $idecole=$_POST['idecole'];
        $idcours=$_POST['idcours'];   

        $req=$db->prepare('INSERT INTO `affectenseignant`(idenseig,idecole,idcours) VALUES (:idenseig,:idecole,:idcours)');
        $req->execute([
            'idenseig'=>$idenseig,
            'idecole'=>$idecole,
            'idcours'=>$idcours
        ]);
        header('location:../affectation.php');
    }
?>