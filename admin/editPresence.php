<?php
    include '../config/database.php';

    if(isset($_POST['idpres']) && isset($_POST['idenseig']) && isset($_POST['heurearrive']) && isset($_POST['heuresortie'])){
      
        $idpres=$_POST['idpres'];
        $idenseig=$_POST['idenseig'];
        $heurearrive=$_POST['heurearrive'];  
        $heuresortie=$_POST['heuresortie'];  

        $req=$db->prepare('UPDATE `presence` SET `idenseig`=:idenseig,`heurearrive`=:heurearrive,`heuresortie`=:heuresortie WHERE `idpres`=:idpres');
        $req->execute([
            'idenseig'=>$idenseig,
            'heurearrive'=>$heurearrive,
            'heuresortie'=>$heuresortie,
            'idpres'=>$idpres,
        ]);
        header('location:../presence.php');
    }
?>