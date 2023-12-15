<?php
    include '../config/database.php';

    if(isset($_POST['designation']) && isset($_POST['idsection'])){
      
        $designation=$_POST['designation'];
        $idsection=$_POST['idsection'];  

        $req=$db->prepare('INSERT INTO options(designation,idsection) VALUES (:designation,:idsection)');
        $req->execute([
            'designation'=>$designation,
            'idsection'=>$idsection
        ]);
        header('location:../option.php');
    }
?>