<?php
    include '../config/database.php';

    if(isset($_POST['idaffect']) && isset($_POST['idenseig']) && isset($_POST['idecole']) && isset($_POST['idcours'])){

        $idaffect=$_POST['idaffect'];
        $idenseig=$_POST['idenseig'];
        $idecole=$_POST['idecole'];
        $idcours=$_POST['idcours'];   

        $req=$db->prepare('UPDATE `affectenseignant` SET idenseig=:idenseig,idecole=:idecole,idcours=:idcours WHERE idaffect=:idaffect');
        $req->execute([
            'idenseig'=>$idenseig,
            'idecole'=>$idecole,
            'idcours'=>$idcours,
            'idaffect'=>$idaffect
        ]);
        header('location:../affectation.php');
    }
?>