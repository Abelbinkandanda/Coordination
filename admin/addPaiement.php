<?php
    include '../config/database.php';

    if(isset($_POST['montant']) && isset($_POST['motif']) && isset($_POST['idecole'])){
      
        $montant=$_POST['montant'];
        $motif=$_POST['motif'];  
        $idecole=$_POST['idecole'];  

        $req=$db->prepare('INSERT INTO `paiement`(montant,motif,idecole) VALUES (:montant,:motif,:idecole)');
        $req->execute([
            'montant'=>$montant,
            'motif'=>$motif,
            'idecole'=>$idecole,
        ]);
        header('location:../paiement.php');
    }
?>