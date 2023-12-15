<?php
    include '../config/database.php';

    if(isset($_POST['designation']) && isset($_POST['idopti'])){
      
        $designation=$_POST['designation'];
        $idopti=$_POST['idopti'];  

        $req=$db->prepare('INSERT INTO `classe`(designation,idopti) VALUES (:designation,:idopti)');
        $req->execute([
            'designation'=>$designation,
            'idopti'=>$idopti
        ]);
        header('location:../classe.php');
    }
?>