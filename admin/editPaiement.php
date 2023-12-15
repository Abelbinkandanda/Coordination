<?php
    include '../config/database.php';

    if(isset($_POST['idpaie']) && isset($_POST['montant']) && isset($_POST['motif']) && isset($_POST['idecole'])){
      
        $idpaie=$_POST['idpaie'];
        $montant=$_POST['montant'];
        $motif=$_POST['motif'];  
        $idecole=$_POST['idecole'];  

        $req=$db->prepare('UPDATE `paiement` SET `montant`=:montant,`motif`=:motif,`idecole`=:idecole WHERE `idpaie`=:idpaie');
        $req->execute([
            'montant'=>$montant,
            'motif'=>$motif,
            'idecole'=>$idecole,
            'idpaie'=>$idpaie,
        ]);
        header('location:../paiement.php');
    }
?>