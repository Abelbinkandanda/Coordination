<?php
    include '../config/database.php';

    if(isset($_POST['idenseig']) && isset($_POST['heurearrive']) && isset($_POST['heuresortie'])){
      
        $idenseig=$_POST['idenseig'];
        $heurearrive=$_POST['heurearrive'];  
        $heuresortie=$_POST['heuresortie'];  

        $req=$db->prepare('INSERT INTO `presence`(idenseig,heurearrive,heuresortie) VALUES (:idenseig,:heurearrive,:heuresortie)');
        $req->execute([
            'idenseig'=>$idenseig,
            'heurearrive'=>$heurearrive,
            'heuresortie'=>$heuresortie,
        ]);
        header('location:../presence.php');
    }
?>