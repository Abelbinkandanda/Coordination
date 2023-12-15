<?php
    include '../config/database.php';

    if(isset($_POST['idclass']) && isset($_POST['idopt']) && isset($_POST['idcours']) && isset($_POST['jours']) && isset($_POST['heuredebut']) && isset($_POST['heurefin']) && isset($_POST['idenseig']) && isset($_POST['idsect']) && isset($_POST['idecole'])){
      
        $idclass=$_POST['idclass'];
        $idopt=$_POST['idopt'];
        $idcours=$_POST['idcours'];   
        $jours=$_POST['jours'];   
        $heuredebut=$_POST['heuredebut'];   
        $heurefin=$_POST['heurefin'];   
        $idenseig=$_POST['idenseig'];   
        $idsect=$_POST['idsect'];   
        $idecole=$_POST['idecole'];   

        $req=$db->prepare('INSERT INTO `affecthoraire`(idclass,idopt,idcours,jours,heuredebut,heurefin,idenseig,idsect,idecole) VALUES (:idclass,:idopt,:idcours,:jours,:heuredebut,:heurefin,:idenseig,:idsect,:idecole)');
        $req->execute([
            'idclass'=>$idclass,
            'idopt'=>$idopt,
            'idcours'=>$idcours,
            'jours'=>$jours,
            'heuredebut'=>$heuredebut,
            'heurefin'=>$heurefin,
            'idenseig'=>$idenseig,
            'idsect'=>$idsect,
            'idecole'=>$idecole
        ]);
        header('location:../horaire.php');
    }
?>