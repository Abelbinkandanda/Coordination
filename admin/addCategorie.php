<?php
    include '../config/database.php';

    if(isset($_POST['designation'])){
      
        $designation=$_POST['designation'];  

        $req=$db->prepare('INSERT INTO `categorie`(designation) VALUES (:designation)');
        $req->execute([
            'designation'=>$designation
        ]);
        header('location:../categorie.php');
    }
?>