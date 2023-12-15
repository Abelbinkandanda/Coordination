<?php
    include '../config/database.php';

    if(isset($_POST['idclass']) && isset($_POST['designation']) && isset($_POST['idopti'])){
      
        $idclass=$_POST['idclass'];
        $designation=$_POST['designation'];
        $idopti=$_POST['idopti'];  

        $req=$db->prepare('UPDATE `classe` SET `designation`=:designation,`idopti`=:idopti WHERE `idclass`=:idclass');
        $req->execute([
            'designation'=>$designation,
            'idopti'=>$idopti,
            'idclass'=>$idclass
        ]);
        header('location:../classe.php');
    }
?>