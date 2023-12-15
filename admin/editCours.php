<?php
    include '../config/database.php';

    if(isset($_POST['idcours']) && isset($_POST['designation'])){
      
        $idcours=$_POST['idcours'];
        $designation=$_POST['designation'];

        $req=$db->prepare('UPDATE `cours` SET `designation`=:designation WHERE `idcours`=:idcours');
        $req->execute([
            'designation'=>$designation,
            'idcours'=>$idcours,
        ]);
        header('location:../cours.php');
    }
?>