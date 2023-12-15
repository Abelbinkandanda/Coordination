<?php
    include '../config/database.php';

    if(isset($_POST['idcat']) && isset($_POST['designation'])){
      
        $idcat=$_POST['idcat'];  
        $designation=$_POST['designation'];  

        $req=$db->prepare('UPDATE `categorie` SET designation=:designation WHERE idcat=:idcat');
        $req->execute([
            'designation'=>$designation,
            'idcat'=>$idcat,
        ]);
        header('location:../categorie.php');
    }
?>