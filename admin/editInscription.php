<?php
    include '../config/database.php';

    if(isset($_POST['idins']) && isset($_POST['ideleve']) && isset($_POST['idclass']) && isset($_POST['idopt']) && isset($_POST['idecole']) && isset($_POST['annee'])){
      
        $idins=$_POST['idins'];
        $ideleve=$_POST['ideleve'];
        $idclass=$_POST['idclass'];
        $idopt=$_POST['idopt'];   
        $idecole=$_POST['idecole'];   
        $annee=$_POST['annee'];   

        $req=$db->prepare('UPDATE `inscription` SET `ideleve`=:ideleve,`idclass`=:idclass,`idopt`=:idopt,`idecole`=:idecole,`annee`=:annee WHERE `idins`=:idins');
        $req->execute([
            'ideleve'=>$ideleve,
            'idclass'=>$idclass,
            'idopt'=>$idopt,
            'idecole'=>$idecole,
            'annee'=>$annee,
            'idins'=>$idins,
        ]);
        header('location:../inscription.php');
    }
?>