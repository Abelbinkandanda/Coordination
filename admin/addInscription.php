<?php
    include '../config/database.php';

    if(isset($_POST['ideleve']) && isset($_POST['idclass']) && isset($_POST['idopt']) && isset($_POST['idecole']) && isset($_POST['annee'])){
      
        $ideleve=$_POST['ideleve'];
        $idclass=$_POST['idclass'];
        $idopt=$_POST['idopt'];   
        $idecole=$_POST['idecole'];   
        $annee=$_POST['annee'];   

        $req=$db->prepare('INSERT INTO `inscription`(ideleve,idclass,idopt,idecole,annee) VALUES (:ideleve,:idclass,:idopt,:idecole,:annee)');
        $req->execute([
            'ideleve'=>$ideleve,
            'idclass'=>$idclass,
            'idopt'=>$idopt,
            'idecole'=>$idecole,
            'annee'=>$annee
        ]);
        header('location:../inscription.php');
    }
?>